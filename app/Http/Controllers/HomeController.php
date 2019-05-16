<?php
	namespace App\Http\Controllers;

	use App\Cupboard;
	use App\Rack;
	use Illuminate\Http\Request;

	class HomeController {
		/**
		 * Cola Machine Status
		 */
		public function index(){
			$cuppboards = Cupboard::with("rack")->first();

			$door 		= Cupboard::first();
			$cupboard 	= $cuppboards->rack;

            $total = $cupboard->sum(function($value) {
                $total = 0;
                foreach($value->product as $product){
                    $total = $total+$product->type;
                }
                return $total;
            });

			return view('welcome', compact('door', 'cupboard', 'total'));
		}

		/**
		 * Coke Machine Operations
		 *
		 * @return bool|\Illuminate\Http\RedirectResponse
		 */
		public function operation(Request $request){
			 try {
				if(count($request->all()) > 1 AND $request->get("id") !== null){
					//dd($request->all());
					/*
					$Cupboard = Rack::where("id", $request->get("id"))->with("cupboard")->first();
					if($Cupboard->cupboard->cover == 1){
						return redirect()->route('home')->with('error', __('Kapak Acik Birakilmis.'));
					}
					*/

					if($request->get("open")) {
						$openStatus = $request->get("open") == 2 ? 2 : 1;
						return $this->openCase($openStatus, $request->get("id"));
					}
					if($request->get("up")){
						$this->openCase(1, $request->get("id"));

						$type = $request->get("up") == 2  ? 2 : 1;
						return $this->up($request->get("id"), $type);
					}
					if($request->get("down")){
						$this->openCase(1, $request->get("id"));

                        $type = $request->get("down") == 2 ? 2 : 1;
						return $this->down($request->get("id"), $type);
					}

					return redirect()->route('home')->with('error', __('Tanimsiz.'));
				}else {
					return redirect()->route('home')->with('error', __('Islem Hatasi'));
				}
			} catch (\Exception $exception) {
				return redirect()->route('home')->with('error', __('Hata Mesaji'));
			}
		}

		/**
		 * Open/Close Coke Machine Door
		 *
		 * @param $status
		 * @param $id
		 *
		 * @return \Illuminate\Http\RedirectResponse
		 */
		static function openCase($status, $id){
			$Cupboard = Rack::where("id", $id)->with("cupboard")->first();
			if($Cupboard->count() > 0){
				$rack = $Cupboard->cupboard;
				$rack->update(["cover" => $status]);

				$statusText = $status == 2 ? "Kapak Kapatildi" : "Kapak Acildi";
				return redirect()->route('home')->with('error', $statusText);
			}else {
				return redirect()->route('home')->with('error', __('Mesrubat Dolabi Bulunamadi!'));
			}
		}

		/**
		 * Coke Machine Drink Push
		 *
		 * @param $id
		 *
		 * @return \Illuminate\Http\RedirectResponse
		 */
		static function up($id, $type){
			$Rack = Rack::where("id", $id)->first();

			if($Rack->count() > 0){
				if($Rack->product->sum('type')+$type > 20){
					return redirect()->route('home')->with('error', __('Raf Dolu!'));
				}

                $Rack->product()->create([
                    'type' => $type
                ]);

				return redirect()->route('home')->with('error', __('Raf\'a Icecek Yerlestirildi!'));
			}else {
				return redirect()->route('home')->with('error', __('Raf Bulunamadi!'));
			}
		}

		/**
		 * Coke Machine Drink Pull
		 *
		 * @param $id
		 *
		 * @return \Illuminate\Http\RedirectResponse
		 */
		static function down($id, $type){
			$Rack = Rack::where("id", $id)->first();
			if($Rack->count() > 0){
				if($Rack->product->sum('type')-$type < 0){
					return redirect()->route('home')->with('error', __('Raf Bos!'));
				}

				if($Rack->product()->where("type", $type)->count() === 0){
                    return redirect()->route('home')->with('error', __('Raf\'da Bu tip içecek bulunamadı!'));
                }

				$Rack->product()->where("type", $type)->first()->delete();
				return redirect()->route('home')->with('error', __('Raf\'a Icecek Alindi!!'));
			}else {
				return redirect()->route('home')->with('error', __('Raf Bulunamadi!'));
			}
		}

		/**
		 * Coke Machine Cover capping
		 */
		public function __destruct(){
			$this->openCase(2, 1);
		}
	}
