<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>ICT Commission</title>
		<style>
			body {
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				text-align: center;
				color: #777;
                
			}

			body h1 {
				font-weight: 300;
				margin-bottom: 0px;
				padding-bottom: 0px;
				color: #0cb5f8;
                font-weight: 800;
                margin-bottom: 2rem;
			}

			body h3 {
				font-weight: 300;
				margin-top: 10px;
				margin-bottom: 20px;
				font-style: italic;
				color: #555;
			}

			body a {
				color: #06f;
			}

			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
				border-collapse: collapse;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}
		</style>
	</head>
	<body>
        <div class="invoice-box" style="margin-top:8rem;">
            <h1>TANZANIA ICT CONFERENCE 2023</h1>
			<table>
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td class="title">
									
									<img src="{{ asset('assets/images/logo/ictc-logo.png') }}" alt="ICTC Logo" style="width: 30%; max-width: 300px" />
								</td>

								<td>
									Invoice #: {{ $data->bill_ref_no }}<br />
									<b style="color:#06f;font-weight:700;font-size:larger">TAIC 2023</b><br />
									Date: {{ \Illuminate\Support\Facades\Date::now()->format('F j, Y') }}
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								<td>
									14 Jamuhuri Street<br />
									Dar es salaam<br />
									PO Box 70479
								</td>

								<td>
									{{ $data->institution }}<br />
									{{ $data->first_name }} {{ $data->middle_name }} {{ $data->last_name }}<br />
									{{ $data->email }}
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="heading">
					<td>Bill Purpuse</td>

					<td>Bill Number #</td>
				</tr>

				<tr class="details">
					<td>TAIC Fee Bill</td>

					<td>{{ $data->bill_ref_no }}</td>
				</tr>

				<tr class="heading">
					<td>Item</td>
					<td>Price</td>
				</tr>

				<tr class="item">
					<td>{{ $data->event_name }}</td>
					<td>{{ $data->event_fee }}</td>
				</tr>
				@foreach($data->annual_fee as $annual_fee )

				<tr class="item last">
					<td>Annual fee</td>

					<td>{{ number_format($annual_fee->amount) }}</td>
				</tr>

				@endforeach

				<tr class="total">
					<td></td>

					<td>Total: {{ number_format($data->total_amount) }}</td>
				</tr>
			</table>
		</div>
	</body>
</html>

