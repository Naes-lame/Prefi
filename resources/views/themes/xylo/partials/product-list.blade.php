@foreach($products as $product)
@php
    // Debug information
    $debugInfo = [
        'product_id' => $product->id,
        'has_images' => $product->images->isNotEmpty() ? 'Yes' : 'No',
        'has_thumbnail' => $product->thumbnail ? 'Yes' : 'No',
        'images' => []
    ];

    // Get all images for this product
    foreach($product->images as $img) {
        $debugInfo['images'][] = [
            'path' => $img->image_url,
            'url' => Storage::url($img->image_url),
            'type' => $img->type
        ];
    }

    // Try to get the first available image from the images relationship
    $mainImage = $product->images->first();
    
    // If no image is found in the images relationship, try the thumbnail
    if (!$mainImage && $product->thumbnail) {
        $imageUrl = Storage::url($product->thumbnail->image_url);
        $debugInfo['using'] = 'thumbnail';
        $debugInfo['thumbnail_path'] = $product->thumbnail->image_url;
    } elseif ($mainImage) {
        $imageUrl = Storage::url($mainImage->image_url);
        $debugInfo['using'] = 'main_image';
    } else {
        $imageUrl = asset('images/default-product.jpg');
        $debugInfo['using'] = 'default';
    }
    
    // Get the product name for alt text
    $productName = $product->translation->name ?? 'Product Image';
    
    // Debug output (only visible to you)
    // Uncomment the next line to see debug information
    // dd($debugInfo);
@endphp
<div class="col-6 col-md-4 mb-4">
    <div class="product-card h-100 d-flex flex-column">
        <div class="product-img position-relative" style="height: 250px; overflow: hidden;">
            <div style="position: relative; height: 100%;">
                @if($product->images->isNotEmpty() || $product->thumbnail)
                    <img src="{{ $imageUrl }}" 
                         class="img-fluid w-100 h-100 object-fit-cover"
                         alt="{{ $productName }}"
                         title="{{ $productName }}"
                         style="transition: transform 0.3s ease; border: 1px solid #eee;">
                @else
                    <div class="d-flex align-items-center justify-content-center bg-light" style="height: 100%;">
                        <div class="text-center p-3">
                            <i class="fas fa-image fa-3x text-muted mb-2"></i>
                            <p class="small text-muted mb-0">No image available</p>
                            <p class="small text-muted">Product ID: {{ $product->id }}</p>
                        </div>
                    </div>
                @endif
            <button class="wishlist-btn position-absolute top-0 end-0 m-2">
                <i class="fa-regular fa-heart"></i>
            </button>
            @if($product->discount > 0)
                <div class="discount-badge position-absolute top-0 start-0 bg-danger text-white px-2 py-1 m-2">
                    -{{ $product->discount }}%
                </div>
            @endif
        </div>
        <div class="product-info p-3 flex-grow-1 d-flex flex-column">
            <h3 class="h6 mb-2">
                <a href="{{ route('product.show', $product->slug) }}" 
                   class="text-decoration-none text-dark">
                    {{ $product->translation->name ?? 'Product Name' }}
                </a>
            </h3>
            
            @if($product->translation->short_description)
                <p class="small text-muted mb-2">
                    {{ Str::limit($product->translation->short_description, 60) }}
                </p>
            @endif
            
            <div class="mt-auto">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <div class="price">
                        @if($product->discount > 0)
                            <span class="text-danger fw-bold">${{ number_format($product->price - ($product->price * $product->discount / 100), 2) }}</span>
                            <small class="text-muted text-decoration-line-through ms-2">${{ number_format($product->price, 2) }}</small>
                        @else
                            <span class="fw-bold">${{ number_format($product->price, 2) }}</span>
                        @endif
                    </div>
                    @if($product->stock > 0)
                        <span class="badge bg-success">In Stock</span>
                    @else
                        <span class="badge bg-secondary">Out of Stock</span>
                    @endif
                </div>
                
                <div class="d-flex justify-content-between align-items-center mt-2">
                    <div class="reviews small">
                        <i class="fas fa-star text-warning"></i>
                        <span>4.8</span>
                        <span class="text-muted">({{ number_format(rand(50, 1000)) }})</span>
                    </div>
                    <button class="btn btn-sm btn-outline-primary" onclick="addToCart({{ $product->id }})">
                        <i class="fas fa-shopping-cart me-1"></i> Add to Cart
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
