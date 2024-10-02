<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap"
    />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=la-solid-900:wght@400&display=swap"
    />

    <title>Product Dashboard UI</title>
    <script>
document.addEventListener('DOMContentLoaded', function() {
  const viewButtons = document.querySelectorAll('.view-btn');
  const sidebar = document.querySelector('.sidebar');
  const productDetails = document.querySelector('.sidebarsproduct-details');
  const backButton = document.querySelector('.back-button');

  viewButtons.forEach(button => {
    button.addEventListener('click', function() {
      sidebar.style.display = 'none';
      productDetails.style.display = 'block';
    });
  });

  backButton.addEventListener('click', function() {
    productDetails.style.display = 'none';
    sidebar.style.display = 'block';
  });
});
</script>

  </head>
  <body>
    <!-- Left Sidebar (Icons) -->
    <div class="icon-sidebar">
      <div class="top-icons">
        <img src="{{ asset('images/Subtract.svg') }}" id="subtract" alt="icon 1" />
        <img src="{{ asset('images/Product.svg') }}" id="sideicon" alt="icon 2" />
        <img src="{{ asset('images/AlertsMenu.svg') }}" id="sideicon" alt="icon 3" />
        <img src="{{ asset('images/user.svg') }}" id="sideicon" alt="icon 4" />
      </div>
      <div class="bottom-icon">
        <img src="{{ asset('images/Englishmenu.png') }}" id="English" alt="icon 5" />
      </div>
    </div>
    @include('sidebar.main')
@include('sidebar.product-details')
 
    <!-- Main Content -->
    <div class="main-content">
      <!-- Header -->
      <section class="frame-1d">
        <h1 class="text-h1">Group/segment/brand/etc name</h1>
        <div class="frame-1e">
          <div class="frame-1f">
            <button class="export" type="button">Favorites</button>
            <button class="export-21" type="button">Export</button>
            <button class="remove" type="button">Remove</button>
          </div>
          <div class="plainfield">
            <input
              id="search-products"
              class="plainfield-input"
              type="search"
              placeholder="Search products"
            />
            <div class="ico" role="img" aria-label="Search icon"></div>
          </div>
        </div>
      </section>

      <!-- Products Table -->
      <table>
        <thead>
          <tr>
            <th>
              <label class="custom-checkbox-container">
                <input type="checkbox" class="product-checkbox">
                <span class="checkmark"></span>
              </label>
              Product Name
            </th>
            <th>MyPrice</th>
            <th>Lowest</th>
            <th>Highest</th>
            <th>Lower</th>
            <th>Alerts</th>
            <th>Suggestions</th>
            <th>Competition</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table_body">
          <tr>
            <td>
              <div class="product-info">
                <label class="custom-checkbox-container">
                  <input type="checkbox" class="product-checkbox">
                  <span class="checkmark"></span>
                </label>
                <img src="{{ asset('images/fdsf.png') }}" alt="product" />
                <span>Sony WH-1000XM5 Headphones</span>
              </div>
            </td>
            <td id="product_details" class="MyPrice">$413.99</td>
            <td id="product_details" class="Lowest">$413.99</td>
            <td id="product_details" class="Highest">$902.49</td>
            <td id="product_details" class="Lower">$902.49</td>
            <td id="product_details" class="Alerts">52 Sellers</td>
            <td id="product_details" class="Suggestions">6 Suggestions</td>
            <td>
              <button id="competition-btn" style="background: #FFF2DA; color: #FF9029;">Med</button>
            </td>
            <td class="actions">
                <button class="link-btn"><img src="{{ asset('images/Website.png') }}" alt="Button Icon" class="button-image"></button>
                <button class="view-btn"><img src="{{ asset('images/View.png') }}" alt="Button Icon" class="button-image"></button>
                <button class="fav-btn"><img src="{{ asset('images/Favorites.png') }}" alt="Button Icon" class="button-image"></button>
              </td>
            </tr>
            <!-- Add more rows as needed -->
          </tbody>
        </table>
        
        <!-- Pagination -->
        <div class="pagination">
          <button id="nav" class="nav-prev">Prev</button>
          <button id="nav" class="nav-1">1</button>
          <button id="nav" class="nav-2">2</button>
          <button id="nav" class="nav-3">3</button>
          <button id="nav" class="nav-next">Next</button>
        </div>
      </div>
    </div>
    </body>
  </html>