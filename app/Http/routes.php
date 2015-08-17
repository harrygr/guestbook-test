<?php

get('/', ['uses' => 'GuestbookController@index']);

get('/api/posts', ['uses' => 'GuestbookController@getPosts']);
post('/api/posts', ['uses' => 'GuestbookController@store']);