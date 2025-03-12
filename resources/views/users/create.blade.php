<form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <input type="text" name="name" placeholder="Name">
    @error('name')
        <div>{{ $message }}</div>
    @enderror
    
    <input type="email" name="email" placeholder="Email">
    @error('email')
        <div>{{ $message }}</div>
    @enderror
    
    <input type="number" name="age" placeholder="Age">
    @error('age')
        <div>{{ $message }}</div>
    @enderror
    <br>
    <br>    
    <input type="password" name="password" placeholder="Password">
    @error('password')
        <div>{{ $message }}</div>
    @enderror
    
    <input type="password" name="password_confirmation" placeholder="Confirm Password">
    
    <input type="file" name="avatar" accept="image/*">
    @error('avatar')
        <div>{{ $message }}</div>
    @enderror
    <br>
    <br>
    
    <input type="text" name="product_name" placeholder="Product Name">
    @error('product_name')
        <div>{{ $message }}</div>
    @enderror
    
    <input type="number" name="price" placeholder="Price">
    @error('price')
        <div>{{ $message }}</div>
    @enderror
    
    <input type="url" name="website" placeholder="Website">
    @error('website')
        <div>{{ $message }}</div>
    @enderror
    <br>
    <br>
    
    <input type="date" name="published_at">
    @error('published_at')
        <div>{{ $message }}</div>
    @enderror
    
    <input type="date" name="start_date">
    @error('start_date')
        <div>{{ $message }}</div>
    @enderror
    
    <input type="date" name="end_date">
    @error('end_date')
        <div>{{ $message }}</div>
    @enderror

    <button type="submit">Submit</button>
</form>
