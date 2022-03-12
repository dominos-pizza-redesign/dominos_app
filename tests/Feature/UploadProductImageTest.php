<?php

namespace Tests\Feature;

use Tests\TestCase;

class UploadProductImageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_upload_product_image_from_visiting_route()
    {
        $this->seed();
        $this->get('/upload-product-image')->assertSee('Image Uploaded');
    }
}
