<?php
    Route::get('crud','Learning\Crud\CrudController@index');
    Route::get('crud/add','Learning\Crud\CrudController@create');
    Route::post('crud/add','Learning\Crud\CrudController@store');
    Route::get('crud/update/{id}','Learning\Crud\CrudController@edit');
    Route::post('crud/update/{id}','Learning\Crud\CrudController@update');
    Route::get('crud/delete/{id}','Learning\Crud\CrudController@destroy');
?>