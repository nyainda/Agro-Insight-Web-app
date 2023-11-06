<x-app-layout title="Forms">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <form method="post" action="">
        @csrf
        <div>
            <label for="buyer_name">Your Name:</label>
            <input type="text" name="buyer_name" id="buyer_name" required>
        </div>
        <div>
            <label for="buyer_email">Your Email:</label>
            <input type="email" name="buyer_email" id="buyer_email" required>
        </div>
        <div>
            <label for="buy_price">Buying Price:</label>
            <input type="number" name="buy_price" id="buy_price" step="0.01" required>
        </div>
        <div>
            <label for="purchase_type">Purchase Type:</label>
            <select name="purchase_type" id="purchase_type" required>
                <option value="raised">Raised</option>
                <option value="purchased">Purchased</option>
            </select>
        </div>
        <button type="submit">Buy Animal</button>
    </form>

</x-app-layout>
