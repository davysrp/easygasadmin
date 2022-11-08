<div class="row">
    <div class="col-sm-4 invoice-col">
        <b>Invoice #007612</b><br>
        <br>
        <b>Order ID:</b> 4F3S8J<br>
        <b>Payment Due:</b> 2/22/2012<br>
    </div>
    <div class="col-sm-4 invoice-col">
        <address>
            <strong>John Doe</strong><br>
            795 Folsom Ave, Suite 600<br>
            San Francisco, CA 94107<br>
            Phone: (555) 539-1037<br>
            Email: john.doe@example.com
        </address>
    </div>
</div>
<table class="table table-striped">
    <thead>
    <tr>
        <th>Id</th>
        <th>Product</th>
        <th>Qty</th>
        <th>Price</th>
        <th>Total</th>
    </tr>
    </thead>
    <tbody>
    @for($i=1;$i<=3;$i++)
    <tr>
        <td>{!! $i !!}</td>
        <td>Product {!! $i !!}</td>
        <td>2</td>
        <td>$10</td>
        <td>{!! 10*2 !!}</td>
    </tr>
    @endfor
    </tbody>
</table>
<div class="row">
    <div class="col-md-6"></div>
    <div class="col-6">
        <p class="lead">Amount Due 2/22/2014</p>

        <div class="table-responsive">
            <table class="table">
                <tbody><tr>
                    <th style="width:50%">Subtotal:</th>
                    <td>$250.30</td>
                </tr>
                </tbody></table>
        </div>
    </div>
</div>
