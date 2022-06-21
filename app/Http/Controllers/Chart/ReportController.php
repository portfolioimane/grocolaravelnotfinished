   <?php

namespace App\Http\Controllers\Chart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order\Order;
use App\Models\Order\OrderDetails;
use App\Models\Setting\PaymentSetting;
use App\Models\User;
use App\AllStatic;
use DB,PDF,Session,Excel;


class ReportController extends Controller
{



   public function stockReport()
    {
        return view('admin.report.stockreport');
    }
   
    public function salesReport()
    {
        return view('admin.report.salesreport');
    }

      public function invoiceReport()
    {
        return view('admin.report.invoicereport');
    }

      public function showTransection()
    {
        return view('admin.report.transaction');
    }
}