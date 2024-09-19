<tbody>
    @foreach($orders as $order)
        <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->created_at->format('d-m-Y') }}</td>
            <td>${{ $order->total_amount }}</td>
            <td>
                <!-- Display current status -->
                {{ $order->status }}

                <!-- Form to update the order status -->
                <form action="{{ route('orders.updateStatus', $order->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('PUT')
                    
                    <!-- Dropdown to select new status -->
                    <select name="status" onchange="this.form.submit()">
                        <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="processing" {{ $order->status == 'processing' ? 'selected' : '' }}>Processing</option>
                        <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Completed</option>
                        <option value="cancelled" {{ $order->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                    </select>
                </form>
            </td>
        </tr>
    @endforeach
</tbody>

@if (session('success'))
    <div style="color: green;">
        {{ session('success') }}
    </div>
@endif
