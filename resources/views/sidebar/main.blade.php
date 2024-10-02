@php
$sections = [
    [
        'title' => 'All products',
        'description' => 'Manage and track all added products in your account.',
    ],
    [
        'title' => 'Sellers',
        'description' => 'View sellers offering identical products for competitive tracking.',
    ],
    [
        'title' => 'Add new product',
        'description' => 'Add products via manual entry or CSV for monitoring.',
    ],
];
@endphp

<div class="sidebar">
    @foreach($sections as $section)
        <div class="section">
            <a href="#" class="sub-link">{{ $section['title'] }}</a>
            <p>{{ $section['description'] }}</p>
        </div>
    @endforeach
</div>
