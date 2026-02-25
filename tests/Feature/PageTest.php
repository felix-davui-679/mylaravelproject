<?php

test('test_home_page_loads', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

test('test_about_page_loads', function () {
    $response = $this->get('/about');

    $response->assertStatus(200);
});
