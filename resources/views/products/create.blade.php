<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="text" name="name">
    <input type="number" name="id_type">
    <!-- <input type="number" name="id_supplier"> -->
    <input type="text" name="description">
    <input type="number" name="price">
    <input type="number" name="promotion_price">
    <input type="file" name="images[]" multiple>
    <input type="submit" />
</form>