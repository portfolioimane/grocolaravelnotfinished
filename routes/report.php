
<?php

Route::group(['prefix'=>'admin','middleware'=>['auth:admin','permission']],function(){
Route::get('stock-report',['as' => 'stock.report','uses' => 'Chart\ReportController@stockReport']);
Route::get('sales-report',['as' => 'sales.report','uses' => 'Chart\ReportController@salesReport']);
Route::get('invoice-report',['as' => 'invoice.report','uses' => 'Chart\ReportController@invoiceReport']);
Route::get('transaction',['as' => 'transection.report','uses' => 'Chart\ReportController@showTransection']);
});
