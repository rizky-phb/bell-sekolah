<?php

use App\Models\StockOpname;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\ReturController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ReturSalesController;
use App\Http\Controllers\StockOpnameController;
use App\Http\Controllers\ProductStockController;
use App\Http\Controllers\CashflowCloseController;
use App\Http\Controllers\ProfilCompanyController;
use App\Http\Controllers\ReturPurchaseController;
use App\Http\Controllers\ReportLabaRugiController;
use App\Http\Controllers\PurchaseReceiptController;
use App\Http\Controllers\StockAdjustmentController;

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('post.login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
// Route::post('/import', [ImportController::class, 'importProduct'])->name('importProduct');
Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('view');
    Route::middleware(['MenuSecure:Dashboard'])->group(function () {
        Route::get('/dashboard', [HomeController::class, 'index'])->name('view.dashboard');
        Route::get('/blank', [HomeController::class, 'blank'])->name('blank.dashboard');
    });
    // Route Data Product ===========================================================
    Route::middleware(['MenuSecure:Product'])->group(function () {
        Route::get('/product', [ProductController::class, 'index'])->name('product.index');
        Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
        Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
        Route::put('/product/update/{product}', [ProductController::class, 'update'])->name('product.update');
        Route::delete('/product/destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
    });
    // Route Customer ===========================================================
    Route::middleware(['MenuSecure:Customer'])->group(function () {
        Route::get('/customer', [CustomerController::class, 'index'])->name('customer.index');
        Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
        Route::post('/customer/store', [CustomerController::class, 'store'])->name('customer.store');
        Route::get('/customer/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
        Route::put('/customer/update/{customer}', [CustomerController::class, 'update'])->name('customer.update');
        Route::delete('/customer/destroy/{id}', [CustomerController::class, 'destroy'])->name('customer.destroy');
    });
    // Route Stock Product ============================================================
    Route::middleware(['MenuSecure:Stock'])->group(function () {
        Route::get('/product/stock', [ProductStockController::class, 'index'])->name('stock.index');
    });
    // Route Inventory ==============================================================
    Route::middleware(['MenuSecure:Inventory'])->group(function () {
        //Route StockOpname
        Route::get('/stock_opname', [StockOpnameController::class, 'index'])->name('stockOpname.index');
        Route::get('/stock_opname/create', [StockOpnameController::class, 'create'])->name('stockOpname.create');
        Route::post('/stock_opname/store', [StockOpnameController::class, 'store'])->name('stockOpname.store');
        Route::get('/stock_opname/edit/{id}', [StockOpnameController::class, 'edit'])->name('stockOpname.edit');
        Route::post('/stock_opname/store_final', [StockOpnameController::class, 'store_final'])->name('stockOpname.store_final');
        Route::delete('/stock_opname/destroy/{id}', [StockOpnameController::class, 'destroy'])->name('stockOpname.destroy');
        Route::get('/stock_opname/save_so/{id}', [StockOpnameController::class, 'save_so'])->name('stockOpname.save_so');

        Route::get('/stock_opname/print/{id}', [StockOpnameController::class, 'print'])->name('stockOpname.print');
        Route::get('/stock_opname/nota/{code}', [StockOpnameController::class, 'nota'])->name('stockOpname.nota');
        //Route StockAdjustment
        Route::get('/stock_adjustment', [StockAdjustmentController::class, 'index'])->name('stockAdjustment.index');
        Route::get('/stock_adjustment/create/{id}', [StockAdjustmentController::class, 'create'])->name('stockAdjustment.create');
        Route::post('/stock_adjustment/store', [StockAdjustmentController::class, 'store'])->name('stockAdjustment.store');
        Route::get('/stock_adjustment/edit/{id}', [StockAdjustmentController::class, 'edit'])->name('stockAdjustment.edit');
        Route::put('/stock_adjustment/update/{id}', [StockAdjustmentController::class, 'update'])->name('stockAdjustment.update');
        Route::delete('/stock_adjustment/destroy/{id}', [StockAdjustmentController::class, 'destroy'])->name('stockAdjustment.destroy');

        Route::get('/stock_opname/stock_adjustment', [StockAdjustmentController::class, 'dataStockOpname'])->name('stockAdjustment.dataStockOpname');
        Route::get('/stock_opname/stock_adjustment/{id}', [StockAdjustmentController::class, 'fetchStockOpnameDetail'])->name('stockAdjustment.fetchStockOpnameDetail');

        Route::get('/stock_adjustment/print/{id}', [StockAdjustmentController::class, 'print'])->name('stockAdjustment.print');
        Route::get('/stock_adjustment/nota/{code}', [StockAdjustmentController::class, 'nota'])->name('stockAdjustment.nota');
    });
    // Route Data Purchase ===========================================================
    Route::middleware(['MenuSecure:Purchase'])->group(function () {
        Route::get('/purchase', [PurchaseController::class, 'index'])->name('purchase.index');
        Route::get('/purchase/create', [PurchaseController::class, 'create'])->name('purchase.create');
        Route::post('/purchase/store', [PurchaseController::class, 'store'])->name('purchase.store');
        Route::get('/purchase/edit/{id}', [PurchaseController::class, 'edit'])->name('purchase.edit');
        Route::get('/purchase/print/{id}', [PurchaseController::class, 'print'])->name('purchase.print');
        Route::get('/purchase/nota/{code}', [PurchaseController::class, 'nota'])->name('purchase.nota');
        Route::put('/purchase/update/{purchase}', [PurchaseController::class, 'update'])->name('purchase.update');
        Route::delete('/purchase/destroy/{purchase}', [PurchaseController::class, 'destroy'])->name('purchase.destroy');

        Route::get('/purchase-order/purchase-receipt', [PurchaseReceiptController::class, 'DatapurchaseOrder'])->name('receipt.DatapurchaseOrder');
        Route::get('/purchase-order/purchase-receipt/{id}', [PurchaseReceiptController::class, 'fetchPurchaseDetails'])->name('receipt.fetchPurchaseDetails');
        Route::post('/purchase-order/purchase-receipt/store', [PurchaseReceiptController::class, 'savePurchase'])->name('receipt.savePurchase');
        Route::get('/purchase-receipt', [PurchaseReceiptController::class, 'index'])->name('receipt.index');
        Route::get('/purchase-receipt/create', [PurchaseReceiptController::class, 'create'])->name('receipt.create');
        Route::post('/purchase-receipt/doneReceipt/{id}', [PurchaseReceiptController::class, 'doneReceipt'])->name('receipt.doneReceipt');
        Route::get('/purchase-receipt/edit/{id}', [PurchaseReceiptController::class, 'edit'])->name('receipt.edit');
        Route::put('/purchase-receipt/update', [PurchaseReceiptController::class, 'update'])->name('receipt.update');
        Route::delete('/purchase-receipt/destroy/{purchase}', [PurchaseReceiptController::class, 'destroy'])->name('receipt.destroy');

        Route::get('/purchase-receipt/print/{id}', [PurchaseReceiptController::class, 'print'])->name('receipt.print');
        Route::get('/purchase-receipt/nota/{code}', [PurchaseReceiptController::class, 'nota'])->name('receipt.nota');


        Route::get('/purchase-retur', [ReturPurchaseController::class, 'index'])->name('returPurchase.index');
        Route::get('/purchase-retur/create', [ReturPurchaseController::class, 'create'])->name('returPurchase.create');
        Route::post('/purchase-retur/store', [ReturPurchaseController::class, 'store'])->name('returPurchase.store');
        Route::get('/purchase-retur/edit/{id}', [ReturPurchaseController::class, 'edit'])->name('returPurchase.edit');
        Route::get('/purchase-retur/print/{id}', [ReturPurchaseController::class, 'print'])->name('returPurchase.print');
        Route::get('/purchase-retur/nota/{return_code}', [ReturPurchaseController::class, 'nota'])->name('returPurchase.nota');

    });
    // Route Report ===========================================================
    Route::middleware(['MenuSecure:Report'])->group(function () {
        Route::get('/report', [ReportController::class, 'reportSales'])->name('report.index');
        Route::get('/report/sales-data', [ReportController::class, 'dataSales']);
        Route::get('/laba-rugi', [ReportLabaRugiController::class, 'index']);
        Route::get('/laba-rugi/print', [ReportLabaRugiController::class, 'print']);

        //Retur Penjualan
        Route::get('/retur-penjualan', [ReturSalesController::class, 'index'])->name('returPenjualan.index');
        Route::get('/retur-penjualan/create', [ReturSalesController::class, 'create'])->name('returPenjualan.create');
        Route::get('/retur-penjualan/datasales', [ReturSalesController::class, 'DataSales'])->name('returPenjualan.DataSales');
        Route::get('/retur-penjualan/datasalesdetail/{id}', [ReturSalesController::class, 'DataSalesDetail'])->name('returPenjualan.DataSalesDetail');
        Route::post('/retur-penjualan/store', [ReturSalesController::class, 'store'])->name('returPenjualan.store');

        Route::get('/retur-penjualan/print/{id}', [ReturSalesController::class, 'print'])->name('returPenjualan.print');
        Route::get('/retur-penjualan/nota/{code}', [ReturSalesController::class, 'nota'])->name('returPenjualan.nota');
    });
    // Route Profile Company ===========================================================
    Route::middleware(['MenuSecure:Company'])->group(function () {
        Route::get('/company', [ProfilCompanyController::class, 'index'])->name('company.index');
        Route::put('/company/update/{id}', [ProfilCompanyController::class, 'update'])->name('company.update');
        Route::get('/company/edit/{id}', [ProfilCompanyController::class, 'edit'])->name('company.edit');
    });
    Route::middleware(['MenuSecure:Sales'])->group(function () {
        //Route Sales
        Route::get('/sales', [SalesController::class, 'index'])->name('sales.index');
        Route::get('/sales/create', [SalesController::class, 'create'])->name('sales.create');
        Route::get('/sales/edit/{id}', [SalesController::class, 'edit'])->name('sales.edit');
        Route::put('/sales/update/{id}', [SalesController::class, 'update'])->name('sales.update');
        Route::delete('/sales/destroy/{id}', [SalesController::class, 'destroy'])->name('sales.destroy');
        Route::get('/sales/print/{id}', [SalesController::class, 'print'])->name('sales.print');
        Route::put('/sales/status_pembayaran/{id}', [SalesController::class, 'updateStatusPembayaran'])->name('sales.updateStatusPembayaran');
        //Route CashFlowClose
        Route::get('/sales/cashflow_close', [CashflowCloseController::class, 'index'])->name('cashflow.index');
        Route::get('/sales/cashflow_close/print/{id}', [CashflowCloseController::class, 'print'])->name('receipt.print');
        Route::get('/sales/cashflow_close/nota/{code}', [CashflowCloseController::class, 'nota'])->name('receipt.nota');
    });
    Route::get('/sales/cashflow_close/nota-kasir/{code}', [CashflowCloseController::class, 'notakasir'])->name('receipt.notakasir');
    Route::get('/sales/nota/{id}', [SalesController::class, 'nota'])->name('sales.nota');
    // Route Kasir ===========================================================
    Route::middleware(['MenuSecure:Kasir'])->group(function () {
        Route::get('/search-product', [KasirController::class, 'search'])->name('kasir.search');
        Route::post('/kasir/transaction', [SalesController::class, 'kasirTransaction'])->name('kasir.kasirTransaction');
        Route::get('/kasir', [KasirController::class, 'index'])->name('kasir.index');
        Route::post('/kasir/cfc', [KasirController::class, 'createCashflowClose'])->name('kasir.createCashflowClose');
        Route::post('/kasir/cfcd', [KasirController::class, 'closeCashflow'])->name('kasir.closeCashflow');
        Route::get('/kasir/edit/{id}', [KasirController::class, 'edit'])->name('kasir.edit');
    });
    // Route Role ==========================================================================
    Route::middleware(['MenuSecure:Role'])->group(function () {
        Route::get('/role/create', [RoleController::class, 'create'])->name('role.create');
        Route::get('/role', [RoleController::class, 'index'])->name('role.index');
        Route::post('/role/store', [RoleController::class, 'store'])->name('role.store');
        Route::get('/role/edit/{id}', [RoleController::class, 'edit'])->name('role.edit');
        Route::put('/role/update/{id}', [RoleController::class, 'update'])->name('role.update');
        Route::delete('/role/destroy/{id}', [RoleController::class, 'destroy'])->name('role.destroy');

        // Route Permission
        Route::get('/permission', [PermissionController::class, 'index'])->name('permission.index');
        Route::get('/permission/create', [PermissionController::class, 'create'])->name('permission.create');
        Route::post('/permission/store', [PermissionController::class, 'store'])->name('permission.store');
        Route::get('/permission/edit/{id}', [PermissionController::class, 'edit'])->name('permission.edit');
        Route::put('/permission/update/{id}', [PermissionController::class, 'update'])->name('permission.update');
        Route::delete('/permission/destroy/{id}', [PermissionController::class, 'destroy'])->name('permission.destroy');

        // Route Users
        Route::get('/users', [UsersController::class, 'index'])->name('users.index');
        Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');
        Route::post('/users/store', [UsersController::class, 'store'])->name('users.store');
        Route::get('/users/edit/{id}', [UsersController::class, 'edit'])->name('users.edit');
        Route::put('/users/update/{id}', [UsersController::class, 'update'])->name('users.update');
        Route::delete('/users/destroy/{id}', [UsersController::class, 'destroy'])->name('users.destroy');
    });
});
