<nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <img class="h-8 w-8" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=500" alt="Workflow">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="/production" class="{{ (request()->is('/')) ? 'bg-gray-900' : '' }}  text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page"  >Dashboard</a>

              <a href="/production/customers" class="{{ (request()->is('customers')) ? 'bg-gray-900' : '' }}   text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"  aria-current="page"   >Customers</a>

              <a href="/production/products" class="{{ (request()->is('products')) ? 'bg-gray-900' : '' }}  text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Products</a>

              <a href="/production/settings" class="{{ (request()->is('settings')) ? 'bg-gray-900' : '' }}  text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Settings</a>
            </div>
          </div>
        </div>
       
      
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu">
      <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="/production" class="{{ (request()->is('/')) ? 'bg-gray-900' : '' }} text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Dashboard</a>

        <a href="/production/customers" class="{{ (request()->is('customers')) ? 'bg-gray-900' : '' }} text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Customers</a>

        <a href="/production/products" class="{{ (request()->is('products')) ? 'bg-gray-900' : '' }} text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Products</a>

        <a href="/production/settings" class="{{ (request()->is('settings')) ? 'bg-gray-900' : '' }} text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Settings</a>

      </div>
     
    </div>
  </nav>

  <header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <h1 class="text-3xl tracking-tight font-bold text-gray-900">Vetoyard</h1>
    </div>
  </header>