<?php

namespace App\Http\Services;

use App\Models\Media;
use App\Repositories\Interfaces\MediaRepositoryInterface;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use App\Repositories\MediaRepository;

class MediaService
{
    private $mediaRepository;
    private $productRepository;

    public function __construct(MediaRepositoryInterface $mediaRepository, ProductRepositoryInterface $productRepository)
    {
        $this->mediaRepository = $mediaRepository;
        $this->productRepository = $productRepository;
    }


    public function store($product, $request)
    {
        foreach ($request->file('images') as $item) {
            $image_name = rand(1, 99) . '.' . time() . '.' . $item->extension();
            $media[] =
                [
                    'images' => $image_name,
                    'product_id' => $request->product_id
                ];
            $this->mediaRepository->store($media);
        }
    }

    public function update($product, $request)
    {
        if ($request->file('images')) {
            if ($request->delete) {
                foreach ($request->delete as $item) {
                }
            }
            foreach ($request->file('images') as $image) {
                $image_name = rand(1, 99) . '-' . time() . '.' . $image->extension();
                $image->storeAs('images', $image_name);
                $media[] =
                    [
                        'images' => $image_name,
                        'product_id' => $product->id,
                    ];
            }
            $this->mediaRepository->update($media, $item);
        }
    }
}
