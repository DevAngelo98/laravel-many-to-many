<?php

Route::get('/employees', "EmployeeController@index") -> name('employee.index');
Route::get('/employee/create', "EmployeeController@create") -> name('employee.create');
Route::post('/employee/store', "EmployeeController@store") -> name('employee.store');

Route::get('/employee/{id}/edit', "EmployeeController@edit") -> name('employee.edit');
Route::post('/employee/{id}/update', "EmployeeController@update") -> name('employee.update');

Route::get('/employee/{id}/delete', "EmployeeController@destroy") -> name('employee.delete');


Route::get('/employee/{ide}/remove/task/{idt}', "EmployeeController@removeTaskFromEmployee") -> name('employee.remove.task');
