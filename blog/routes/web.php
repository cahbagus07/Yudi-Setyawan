<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return "<center><h2>Hello World</h2>
<p>Ini adalah postingan pertama dari mata kuliah Web Framework</p></center>
    ";
});
route::get('/show/{id?}', function($id=1){
	echo "Nilai Parameter Adalah ".$id;
});
route::get('/edit/{nama}', function ($nama){
	echo "Nilai Parameter Adalah ".$nama;
}) ->where('nama','[A-Za-z]+');

route::get('/index',function(){
	echo "<a href = '".route('create')."'> Akses Route dengan nama </a>";
});
route::get('/create', function(){
	echo "Route diakses menggunakan nama";
})->name('create');

route::get('/produk','produkController@index');

route::get('/produk/show', 'produkController@show');

route::get('/halaman',function(){
	$title = 'Harry Pooter';
	$konten = 'haryy ppootter and the deathly hallows : part 2';
	return view('konten.halaman',compact('title','konten'));

});

Route::get('/pelanggan','pelangganController@index');


route::resource('produk','produkController');