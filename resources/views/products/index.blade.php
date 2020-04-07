<!-- @foreach($products as $product)
lay ten product
{{$product->name}}

lay ảnh


@endforeach -->
<input type="hidden" name="" value="{{ $images = $product->images->get(0) }}">
{{dd($images->image)}}