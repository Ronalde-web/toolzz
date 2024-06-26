<?php
/******************************************************************
 * Rotas do Painel
 ******************************************************************/
Route::group(['prefix' => 'painel', 'middleware' => 'auth'], function(){
    //Routes Users
    Route::any('usuarios/pesquisar', 'Painel\UserController@search')->name('usuarios.search');
    Route::resource('usuarios', 'Painel\UserController');
    
    //Routes Categories
    Route::any('categorias/pesquisar', 'Painel\CategoryController@search')->name('categorias.search');
    Route::resource('categorias', 'Painel\CategoryController');
    
    //Routes Posts
    Route::any('posts/pesquisar', 'Painel\PostController@search')->name('posts.search');
    Route::resource('posts', 'Painel\PostController');
 
    //Route Profile User
    Route::get('perfil', 'Painel\UserController@showProfile')->name('profile');
    Route::post('perfil/{id}', 'Painel\UserController@updateProfile')->name('profile.update');
    
    //Routes Comments
    Route::any('comentarios/pesquisar', 'Painel\CommentController@search')->name('comments.search');
    Route::get('comentarios', 'Painel\CommentController@index')->name('comments');
    Route::get('comentario/{id}/respostas', 'Painel\CommentController@answers');
    Route::post('comentario/{id}/answer', 'Painel\CommentController@answerComment')->name('answer-comment');
    Route::post('comentario/{id}/destroy', 'Painel\CommentController@destroy')->name('destroy-comment');
    Route::get('comentario/{id}/resposta/{idAnswer}/delete', 'Painel\CommentController@destroyAnswer')->name('destroy-answer');
    
    
    //Routes Profiles
    Route::any('perfil/{id}/usuarios/search', 'Painel\ProfileController@searchUser')->name('profile.users.search');
    Route::get('perfil/{id}/usuarios/{userId}/delete', 'Painel\ProfileController@deleteUser')->name('profile.user.delete');
    Route::post('perfil/{id}/usuarios/cadastrar', 'Painel\ProfileController@usersAddProfile')->name('profile.users.add');
    Route::get('perfil/{id}/usuarios/cadastrar', 'Painel\ProfileController@usersAdd')->name('profile.users.add');
    Route::get('perfil/{id}/usuarios', 'Painel\ProfileController@users')->name('profile.users');
    Route::any('perfis/pesquisar', 'Painel\ProfileController@search')->name('profiles.search');
    Route::resource('perfis', 'Painel\ProfileController');
    
    
    //Routes Permissions
    Route::any('permissao/{id}/perfis/search', 'Painel\PermissionController@searchProfile')->name('permissao.profiles.search');
    Route::get('permissao/{id}/perfis/{profileId}/delete', 'Painel\PermissionController@deleteProfile')->name('permissao.profile.delete');
    Route::post('permissao/{id}/perfis/cadastrar', 'Painel\PermissionController@profilesAddPermission')->name('permissao.profiles.add');
    Route::get('permissao/{id}/perfis/cadastrar', 'Painel\PermissionController@profilesAdd')->name('permissao.profiles.add');
    Route::get('permissao/{id}/perfis', 'Painel\PermissionController@profiles')->name('permissao.perfis');
    Route::any('permissions/pesquisar', 'Painel\PermissionController@search')->name('permissions.search');
    Route::resource('permissoes', 'Painel\PermissionController');


    Route::get('/', 'Painel\PainelController@index'); 
});
/******************************************************************
 * End Routes Painel
 ******************************************************************/


/******************************************************************
 * Rotas de Autenticação
 ******************************************************************/
// Authentication Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register')->name('');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('plogin');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
/******************************************************************
 * Rotas de Autenticação
 ******************************************************************/


/******************************************************************
 * Rotas do Site
 ******************************************************************/
Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');



/******************************************************************
 * End Routes Site
 ******************************************************************/