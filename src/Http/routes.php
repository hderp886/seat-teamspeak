<?php
/**
 * User: Warlof Tutsimo <loic.leuilliot@gmail.com>
 * Date: 15/06/2016
 * Time: 18:45
 */

Route::group([
    'namespace' => 'Seat\Warlof\Teamspeak\Http\Controllers',
    'prefix' => 'teamspeak'
], function(){
    Route::get('/', [
        'as' => 'teamspeak.list',
        'uses' => 'TeamspeakController@getRelations',
        'middleware' => 'bouncer:teamspeak.view'
    ]);

    Route::get('/public/{group_id}/remove', [
        'as' => 'teamspeak.public.remove',
        'uses' => 'TeamspeakController@getRemovePublic',
        'middleware' => 'bouncer:teamspeak.create'
    ]);

    Route::get('/users/{user_id}/{group_id}/remove', [
        'as' => 'teamspeak.user.remove',
        'uses' => 'TeamspeakController@getRemoveUser',
        'middleware' => 'bouncer:teamspeak.create'
    ]);

    Route::get('/roles/{role_id}/{group_id}/remove', [
        'as' => 'teamspeak.role.remove',
        'uses' => 'TeamspeakController@getRemoveRole',
        'middleware' => 'bouncer:teamspeak.create'
    ]);

    Route::get('/corporations/{corporation_id}/{group_id}/remove', [
        'as' => 'teamspeak.corporation.remove',
        'uses' => 'TeamspeakController@getRemoveCorporation',
        'middleware' => 'bouncer:teamspeak.create'
    ]);

    Route::get('/alliances/{alliance_id}/{group_id}/remove', [
        'as' => 'teamspeak.alliance.remove',
        'uses' => 'TeamspeakController@getRemoveAlliance',
        'middleware' => 'bouncer:teamspeak.create'
    ]);

    Route::post('/', [
        'as' => 'teamspeak.add',
        'uses' => 'TeamspeakController@postRelation',
        'middleware' => 'bouncer:teamspeak.create'
    ]);

    Route::get('/configuration', [
        'as' => 'teamspeak.configuration',
        'uses' => 'TeamspeakController@getConfiguration',
        'middleware' => 'bouncer:teamspeak.setup'
    ]);
    
    Route::get('/logs', [
        'as' => 'teamspeak.logs',
        'uses' => 'TeamspeakController@getLogs',
        'middleware' => 'bouncer:teamspeak.setup'
    ]);

    Route::get('/run/{commandName}', [
        'as' => 'teamspeak.command.run',
        'uses' => 'TeamspeakController@getSubmitJob',
        'middleware' => 'bouncer:teamspeak.setup'
    ]);

    Route::post('/configuration', [
        'as' => 'teamspeak.configuration.post',
        'uses' => 'TeamspeakController@postConfiguration',
        'middleware' => 'bouncer:teamspeak.setup'
    ]);
});
