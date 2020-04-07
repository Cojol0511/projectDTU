<!-- @foreach($products as $product)
lay ten product
{{$product->name}}




@endforeach -->
<!-- lay ảnh dau tien lafm anh dai dien, con cac anh sau cất trong dabáế -->
<input type="hidden" name="" value="{{ $images = $product->images->get(0) }}">
{{dd($images->image)}}