@extends("frontend.header")

@section("content")
	<div class="seat-section">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
				<table>
					<tbody>
						@foreach($data as $row)
						<tr>
							<td>
								@if( $row->A1 == '0')
								<button type="button" value="6000" id="btn1" class="number" onclick="one()">A1</button>
								<script type="text/javascript">
									var a =0;
									function one(){
										if (a==0) {
											document.getElementById('btn1').classList.add("btn_c");
											var a1 =document.getElementById('btn1').value;
											document.getElementById("display1").value=a1;
											a++;
										}else{
											document.getElementById('btn1').classList.remove("btn_c");
											document.getElementById("display1").value=0;
											a--;
										}
									}
								</script>
								@else
								<button type="button" disabled class="booked">A1</button>
								@endif
							</td>
							<td>
								@if( $row->A2 == '0')
								<button type="button" value="6000" id="btn2" class="number" onclick="two()">A2</button>
								<script type="text/javascript">
									var b =0;
									function two(){
										if (b==0) {
											document.getElementById('btn2').classList.add("btn_c");
											var a2 =document.getElementById('btn2').value;
											document.getElementById("display2").value=a2;
											b++;
										}else{
											document.getElementById('btn2').classList.remove("btn_c");
											document.getElementById("display2").value=0;
											b--;
										}
									}
								</script>
								@else
								<button type="button" disabled class="booked">A2</button>
								@endif
							</td>
							<td>
								@if( $row->A3 == '0')
								<button type="button" class="number" value="6000" id="btn3" onclick="three()">A3</button>
								<script type="text/javascript">
									var c =0;
									function three(){
										if (c==0) {
											document.getElementById('btn3').classList.add("btn_c");
											var a3 =document.getElementById('btn3').value;
											document.getElementById("display3").value=a3;
											c++;
										}else{
											document.getElementById('btn3').classList.remove("btn_c");
											document.getElementById("display3").value=0;
											c--;
										}
									}
								</script>

								@else
								<button type="button" disabled class="booked">A3</button>
								@endif
							</td>
							<td>
								@if( $row->A4 == '0')
								<button type="button" class="number" value="6000" id="btn4" onclick="four()">A4</button>
								<script type="text/javascript">
									var d =0;
									function four(){
										if (d==0) {
											document.getElementById('btn4').classList.add("btn_c");
											var a4 =document.getElementById('btn4').value;
											document.getElementById("display4").value=a4;
											d++;
										}else{
											document.getElementById('btn4').classList.remove("btn_c");
											document.getElementById("display4").value=0;
											d--;
										}
									}
								</script>
								@else
								<button type="button" disabled class="booked">A4</button>
								@endif
							</td>
							<td>
								@if( $row->A5 == '0')
								<button type="button" class="number" value="6000" id="btn5" onclick="five()">A5</button>
								<script type="text/javascript">
									var e =0;
									function five(){
										if (e==0) {
											document.getElementById('btn5').classList.add("btn_c");
											var a5 =document.getElementById('btn5').value;
											document.getElementById("display5").value=a5;
											e++;
										}else{
											document.getElementById('btn5').classList.remove("btn_c");
											document.getElementById("display5").value=0;
											e--;
										}
									}
								</script>
								@else
								<button type="button" disabled class="booked">A5</button>
								@endif
							</td>
							<td>
								@if( $row->A6 == '0')
								<button type="button" class="number" value="6000" id="btn6" onclick="six()">A6</button>
								<script type="text/javascript">
									var f =0;
									function six(){
										if (f==0) {
											document.getElementById('btn6').classList.add("btn_c");
											var a6 =document.getElementById('btn6').value;
											document.getElementById("display6").value=a6;
											f++;
										}else{
											document.getElementById('btn6').classList.remove("btn_c");
											document.getElementById("display6").value=0;
											f--;
										}
									}
								</script>
								@else
								<button type="button" disabled class="booked">A6</button>
								@endif
							</td>
							<td>
								@if( $row->A7 == '0')
								<button type="button" class="number" value="6000" id="btn7" onclick="seven()">A7</button>
								<script type="text/javascript">
									var g =0;
									function seven(){
										if (g==0) {
											document.getElementById('btn7').classList.add("btn_c");
											var a7 =document.getElementById('btn7').value;
											document.getElementById("display7").value=a7;
											g++;
										}else{
											document.getElementById('btn7').classList.remove("btn_c");
											document.getElementById("display7").value=0;
											g--;
										}
									}
								</script>
								@else
								<button type="button" disabled class="booked">A7</button>
								@endif
							</td>
							<td>
								@if( $row->A8 == '0')
								<button type="button" class="number" value="6000" id="btn8" onclick="eight()">A8</button>
								<script type="text/javascript">
									var h =0;
									function eight(){
										if (h==0) {
											document.getElementById('btn8').classList.add("btn_c");
											var a8 =document.getElementById('btn8').value;
											document.getElementById("display8").value=a8;
											h++;
										}else{
											document.getElementById('btn8').classList.remove("btn_c");
											document.getElementById("display8").value=0;
											h--;
										}
									}
								</script>
								@else
								<button type="button" disabled class="booked">A8</button>
								@endif
							</td>
							<td>
								@if( $row->A9 == '0')
								<button type="button" class="number" value="6000" id="btn9" onclick="nine()">A9</button>
								<script type="text/javascript">
									var i =0;
									function nine(){
										if (i==0) {
											document.getElementById('btn9').classList.add("btn_c");
											var a9 =document.getElementById('btn9').value;
											document.getElementById("display9").value=a9;
											i++;
										}else{
											document.getElementById('btn9').classList.remove("btn_c");
											document.getElementById("display9").value=0;
											i--;
										}
									}
								</script>
								@else
								<button type="button" disabled class="booked">A9</button>
								@endif
							</td>
							<td>
								@if( $row->A10 == '0')
								<button type="button" class="number" value="6000" id="btn10" onclick="ten()">A10</button>
								<script type="text/javascript">
									var j =0;
									function ten(){
										if (j==0) {
											document.getElementById('btn10').classList.add("btn_c");
											var a10 =document.getElementById('btn10').value;
											document.getElementById("display10").value=a10;
											j++;
										}else{
											document.getElementById('btn10').classList.remove("btn_c");
											document.getElementById("display10").value=0;
											j--;
										}
									}
								</script>
								@else
								<button type="button" disabled class="booked">A10</button>
								@endif
							</td>
						</tr>
						<tr>
							<td>
								@if( $row->A11 == '0')
								<button type="button" value="6000" id="btn11" class="number" onclick="eleven()">A11</button>
									<script type="text/javascript">
										var k =0;
											function eleven(){
												if (k==0) {
													document.getElementById('btn11').classList.add("btn_c");
													var a11 =document.getElementById('btn11').value;
													document.getElementById("display11").value=a11;
													k++;
												}else{
													document.getElementById('btn11').classList.remove("btn_c");
													document.getElementById("display11").value=0;
													k--;
												}
											}
										</script>
									@else
										<button type="button" disabled class="booked">A11</button>
									@endif
							</td>
							<td>
								@if( $row->A12 == '0')
								<button type="button" value="6000" id="btn12" class="number" onclick="twelve()">A12</button>
								<script type="text/javascript">
									var l =0;
									function twelve(){
										if (l==0) {
											document.getElementById('btn12').classList.add("btn_c");
											var a12 =document.getElementById('btn12').value;
											document.getElementById("display12").value=a12;
											l++;
										}else{
											document.getElementById('btn12').classList.remove("btn_c");
											document.getElementById("display12").value=0;
											l--;
										}
									}
								</script>
								@else
								<button type="button" disabled class="booked">A12</button>
								@endif
							</td>
							<td>
								@if( $row->A13 == '0')
								<button type="button" class="number" value="6000" id="btn13" onclick="thirty()">A13</button>
								<script type="text/javascript">
									var m =0;
									function thirty(){
										if (m==0) {
											document.getElementById('btn13').classList.add("btn_c");
											var a3 =document.getElementById('btn3').value;
											document.getElementById("display13").value=a3;
											m++;
										}else{
											document.getElementById('btn13').classList.remove("btn_c");
											document.getElementById("display13").value=0;
											m--;
										}
									}
								</script>

								@else
								<button type="button" disabled class="booked">A13</button>
								@endif
							</td>
							<td>
								@if( $row->A14 == '0')
								<button type="button" class="number" value="6000" id="btn14" onclick="fourty()">A14</button>
								<script type="text/javascript">
									var n =0;
									function fourty(){
										if (n==0) {
											document.getElementById('btn14').classList.add("btn_c");
											var a14 =document.getElementById('btn14').value;
											document.getElementById("display14").value=a14;
											n++;
										}else{
											document.getElementById('btn14').classList.remove("btn_c");
											document.getElementById("display14").value=0;
											n--;
										}
									}
								</script>
								@else
								<button type="button" disabled class="booked">A14</button>
								@endif
							</td>
							<td>
								@if( $row->A15 == '0')
								<button type="button" class="number" value="6000" id="btn15" onclick="fivty()">A15</button>
								<script type="text/javascript">
									var o =0;
									function fivty(){
										if (o==0) {
											document.getElementById('btn15').classList.add("btn_c");
											var a15 =document.getElementById('btn15').value;
											document.getElementById("display15").value=a15;
											o++;
										}else{
											document.getElementById('btn15').classList.remove("btn_c");
											document.getElementById("display15").value=0;
											o--;
										}
									}
								</script>
								@else
								<button type="button" disabled class="booked">A15</button>
								@endif
							</td>
							<td>
								@if( $row->A16 == '0')
									<button type="button" class="number" value="6000" id="btn16" onclick="sixty()">A16</button>
									<script type="text/javascript">
										var p =0;
										function sixty(){
											if (p==0) {
												document.getElementById('btn16').classList.add("btn_c");
												var a16 =document.getElementById('btn16').value;
												document.getElementById("display16").value=a16;
												p++;
											}else{
												document.getElementById('btn16').classList.remove("btn_c");
												document.getElementById("display16").value=0;
												p--;
											}
										}
									</script>
								@else
									<button type="button" disabled class="booked">A16</button>
								@endif
							</td>
							<td>
								@if( $row->A17 == '0')
									<button type="button" class="number" value="6000" id="btn17" onclick="seventy()">A17</button>
									<script type="text/javascript">
										var q =0;
										function seventy(){
										if (q==0) {
												document.getElementById('btn17').classList.add("btn_c");
												var a17 =document.getElementById('btn17').value;
												document.getElementById("display17").value=a17;
												q++;
											}else{
												document.getElementById('btn17').classList.remove("btn_c");
												document.getElementById("display17").value=0;
												q--;
											}
										}
									</script>
								@else
									<button type="button" disabled class="booked">A17</button>
								@endif
							</td>
							<td>
								@if( $row->A18 == '0')
								<button type="button" class="number" value="6000" id="btn18" onclick="eighty()">A18</button>
								<script type="text/javascript">
									var r =0;
									function eighty(){
										if (r==0) {
											document.getElementById('btn18').classList.add("btn_c");
											var a18 =document.getElementById('btn18').value;
											document.getElementById("display18").value=a18;
											r++;
										}else{
											document.getElementById('btn18').classList.remove("btn_c");
											document.getElementById("display18").value=0;
											r--;
										}
									}
								</script>
								@else
								<button type="button" disabled class="booked">A18</button>
								@endif
							</td>
							<td>
								@if( $row->A19 == '0')
									<button type="button" class="number" value="6000" id="btn19" onclick="ninty()">A19</button>
									<script type="text/javascript">
										var s =0;
										function ninty(){
											if (s==0) {
												document.getElementById('btn19').classList.add("btn_c");
													var a19 =document.getElementById('btn19').value;
													document.getElementById("display19").value=a19;
													s++;
												}else{
													document.getElementById('btn19').classList.remove("btn_c");
													document.getElementById("display19").value=0;
													s--;
												}
											}
									</script>
								@else
									<button type="button" disabled class="booked">A19</button>
								@endif
							</td>
							<td>
								@if( $row->A20 == '0')
									<button type="button" class="number" value="6000" id="btn20" onclick="twenty()">A20</button>
									<script type="text/javascript">
										var t =0;
										function twenty(){
											if (t==0) {
													document.getElementById('btn20').classList.add("btn_c");
													var a10 =document.getElementById('btn20').value;
													document.getElementById("display20").value=a10;
													t++;
												}else{
													document.getElementById('btn20').classList.remove("btn_c");
													document.getElementById("display20").value=0;
													t--;
												}
											}
									</script>
								@else
									<button type="button" disabled class="booked">A20</button>
								@endif
							</td>
						</tr>		
						@endforeach
					</tbody>
				</table>
				<br>
				<table>
					<tbody>
						@foreach($data as $row)
						<tr>
							<td>
								@if( $row->B1 == '0')
								<button type="button" value="4000" id="btnb1" class="number" onclick="second_b1()">B1</button>
								<script type="text/javascript">
									var ba =0;
									function second_b1(){
										if (ba==0) {
											document.getElementById('btnb1').classList.add("btn_c");
											var b1 =document.getElementById('btnb1').value;
											document.getElementById("display21").value=b1;
											ba++;
										}else{
											document.getElementById('btnb1').classList.remove("btn_c");
											document.getElementById("display21").value=0;
											ba--;
										}
									}
								</script>
								@else
								<button type="button" disabled class="booked">B1</button>
								@endif
							</td>
							<td>
								@if( $row->B2 == '0')
								<button type="button" value="4000" id="btnb2" class="number" onclick="second_b2()">B2</button>
								<script type="text/javascript">
									var bb =0;
									function second_b2(){
										if (bb==0) {
											document.getElementById('btnb2').classList.add("btn_c");
											var b2 =document.getElementById('btnb2').value;
											document.getElementById("display22").value=b2;
											bb++;
										}else{
											document.getElementById('btnb2').classList.remove("btn_c");
											document.getElementById("display22").value=0;
											bb--;
										}
									}
								</script>
								@else
								<button type="button" disabled class="booked">B2</button>
								@endif
							</td>
							<td>
								@if( $row->B3 == '0')
								<button type="button" value="4000" id="btnb3" class="number" onclick="second_b3()">B3</button>
								<script type="text/javascript">
									var bc =0;
									function second_b3(){
										if (bc==0) {
											document.getElementById('btnb3').classList.add("btn_c");
											var b3 =document.getElementById('btnb3').value;
											document.getElementById("display23").value=b3;
											bc++;
										}else{
											document.getElementById('btnb3').classList.remove("btn_c");
											document.getElementById("display23").value=0;
											bc--;
										}
									}
								</script>
								@else
								<button type="button" disabled class="booked">B3</button>
								@endif
							</td>
							<td>
								@if( $row->B4 == '0')
								<button type="button" value="4000" id="btnb4" class="number" onclick="second_b4()">B4</button>
								<script type="text/javascript">
									var bd =0;
									function second_b4(){
										if (bd==0) {
											document.getElementById('btnb4').classList.add("btn_c");
											var b4 =document.getElementById('btnb4').value;
											document.getElementById("display24").value=b4;
											bd++;
										}else{
											document.getElementById('btnb4').classList.remove("btn_c");
											document.getElementById("display24").value=0;
											bd--;
										}
									}
								</script>
								@else
								<button type="button" disabled class="booked">B4</button>
								@endif
							</td>
							<td>
								@if( $row->B5 == '0')
								<button type="button" value="4000" id="btnb5" class="number" onclick="second_b5()">B5</button>
								<script type="text/javascript">
									var be =0;
									function second_b5(){
										if (be==0) {
											document.getElementById('btnb5').classList.add("btn_c");
											var b5 =document.getElementById('btnb5').value;
											document.getElementById("display25").value=b5;
											be++;
										}else{
											document.getElementById('btnb5').classList.remove("btn_c");
											document.getElementById("display25").value=0;
											be--;
										}
									}
								</script>
								@else
								<button type="button" disabled class="booked">B5</button>
								@endif
							</td>
							<td>
								@if( $row->B6 == '0')
								<button type="button" value="4000" id="btnb6" class="number" onclick="second_b6()">B6</button>
								<script type="text/javascript">
									var bf =0;
									function second_b6(){
										if (bf==0) {
											document.getElementById('btnb6').classList.add("btn_c");
											var b6 =document.getElementById('btnb6').value;
											document.getElementById("display26").value=b6;
											bf++;
										}else{
											document.getElementById('btnb6').classList.remove("btn_c");
											document.getElementById("display26").value=0;
											bf--;
										}
									}
								</script>
								@else
								<button type="button" disabled class="booked">B6</button>
								@endif
							</td>
							<td>
								@if( $row->B7 == '0')
								<button type="button" value="4000" id="btnb7" class="number" onclick="second_b7()">B7</button>
								<script type="text/javascript">
									var bg =0;
									function second_b7(){
										if (bg==0) {
											document.getElementById('btnb7').classList.add("btn_c");
											var b7 =document.getElementById('btnb7').value;
											document.getElementById("display27").value=b7;
											bg++;
										}else{
											document.getElementById('btnb7').classList.remove("btn_c");
											document.getElementById("display27").value=0;
											bg--;
										}
									}
								</script>
								@else
								<button type="button" disabled class="booked">B7</button>
								@endif
							</td>
							<td>
								@if( $row->B8 == '0')
								<button type="button" value="4000" id="btnb8" class="number" onclick="second_b8()">B8</button>
								<script type="text/javascript">
									var bh =0;
									function second_b8(){
										if (bh==0) {
											document.getElementById('btnb8').classList.add("btn_c");
											var b8 =document.getElementById('btnb8').value;
											document.getElementById("display28").value=b8;
											bh++;
										}else{
											document.getElementById('btnb8').classList.remove("btn_c");
											document.getElementById("display28").value=0;
											bh--;
										}
									}
								</script>
								@else
								<button type="button" disabled class="booked">B8</button>
								@endif
							</td>
							<td>
								@if( $row->B9 == '0')
								<button type="button" value="4000" id="btnb9" class="number" onclick="second_b9()">B9</button>
								<script type="text/javascript">
									var bi =0;
									function second_b9(){
										if (bi==0) {
											document.getElementById('btnb9').classList.add("btn_c");
											var b9 =document.getElementById('btnb9').value;
											document.getElementById("display29").value=b9;
											bi++;
										}else{
											document.getElementById('btnb9').classList.remove("btn_c");
											document.getElementById("display29").value=0;
											bi--;
										}
									}
								</script>
								@else
								<button type="button" disabled class="booked">B9</button>
								@endif
							</td>
							<td>
								@if( $row->B10 == '0')
								<button type="button" value="4000" id="btnb10" class="number" onclick="second_b10()">B10</button>
								<script type="text/javascript">
									var bj =0;
									function second_b10(){
										if (bj==0) {
											document.getElementById('btnb10').classList.add("btn_c");
											var b10 =document.getElementById('btnb10').value;
											document.getElementById("display30").value=b10;
											bj++;
										}else{
											document.getElementById('btnb10').classList.remove("btn_c");
											document.getElementById("display30").value=0;
											bj--;
										}
									}
								</script>
								@else
								<button type="button" disabled class="booked">B10</button>
								@endif
							</td>
						</tr>
						<tr>
							<td>
								@if( $row->B11 == '0')
								<button type="button" value="4000" id="btnb11" class="number" onclick="second_b11()">B11</button>
									<script type="text/javascript">
										var bk =0;
											function second_b11(){
												if (bk==0) {
													document.getElementById('btnb11').classList.add("btn_c");
													var b11 =document.getElementById('btnb11').value;
													document.getElementById("display31").value=b11;
													bk++;
												}else{
													document.getElementById('btnb11').classList.remove("btn_c");
													document.getElementById("display31").value=0;
													bk--;
												}
											}
										</script>
									@else
										<button type="button" disabled class="booked">B11</button>
									@endif
							</td>
							<td>
								@if( $row->B12 == '0')
								<button type="button" value="4000" id="btnb12" class="number" onclick="second_b12()">B12</button>
									<script type="text/javascript">
										var bl =0;
											function second_b12(){
												if (bl==0) {
													document.getElementById('btnb12').classList.add("btn_c");
													var b12 =document.getElementById('btnb12').value;
													document.getElementById("display32").value=b12;
													bl++;
												}else{
													document.getElementById('btnb12').classList.remove("btn_c");
													document.getElementById("display32").value=0;
													bl--;
												}
											}
										</script>
									@else
										<button type="button" disabled class="booked">B12</button>
									@endif
							</td>
							<td>
								@if( $row->B13 == '0')
								<button type="button" value="4000" id="btnb13" class="number" onclick="second_b13()">B13</button>
									<script type="text/javascript">
										var bm =0;
											function second_b13(){
												if (bm==0) {
													document.getElementById('btnb13').classList.add("btn_c");
													var b13 =document.getElementById('btnb13').value;
													document.getElementById("display33").value=b13;
													bm++;
												}else{
													document.getElementById('btnb12').classList.remove("btn_c");
													document.getElementById("display33").value=0;
													bm--;
												}
											}
										</script>
									@else
										<button type="button" disabled class="booked">B13</button>
									@endif
							</td>
							<td>
								@if( $row->B14 == '0')
								<button type="button" value="4000" id="btnb14" class="number" onclick="second_b14()">B14</button>
									<script type="text/javascript">
										var bn =0;
											function second_b14(){
												if (bn==0) {
													document.getElementById('btnb14').classList.add("btn_c");
													var b14 =document.getElementById('btnb14').value;
													document.getElementById("display34").value=b14;
													bn++;
												}else{
													document.getElementById('btnb14').classList.remove("btn_c");
													document.getElementById("display34").value=0;
													bn--;
												}
											}
										</script>
									@else
										<button type="button" disabled class="booked">B14</button>
									@endif
							</td>
							<td>
								@if( $row->B15 == '0')
								<button type="button" value="4000" id="btnb15" class="number" onclick="second_b15()">B15</button>
									<script type="text/javascript">
										var bo =0;
											function second_b15(){
												if (bo==0) {
													document.getElementById('btnb15').classList.add("btn_c");
													var b15 =document.getElementById('btnb15').value;
													document.getElementById("display35").value=b15;
													bo++;
												}else{
													document.getElementById('btnb15').classList.remove("btn_c");
													document.getElementById("display35").value=0;
													bo--;
												}
											}
										</script>
									@else
										<button type="button" disabled class="booked">B15</button>
									@endif
							</td>
							<td>
								@if( $row->B16 == '0')
								<button type="button" value="4000" id="btnb16" class="number" onclick="second_b16()">B16</button>
									<script type="text/javascript">
										var bp =0;
											function second_b16(){
												if (bp==0) {
													document.getElementById('btnb16').classList.add("btn_c");
													var b16 =document.getElementById('btnb16').value;
													document.getElementById("display36").value=b16;
													bp++;
												}else{
													document.getElementById('btnb16').classList.remove("btn_c");
													document.getElementById("display36").value=0;
													bp--;
												}
											}
										</script>
									@else
										<button type="button" disabled class="booked">B16</button>
									@endif
							</td>
							<td>
								@if( $row->B17 == '0')
								<button type="button" value="4000" id="btnb17" class="number" onclick="second_b17()">B17</button>
									<script type="text/javascript">
										var bq =0;
											function second_b17(){
												if (bq==0) {
													document.getElementById('btnb17').classList.add("btn_c");
													var b17 =document.getElementById('btnb17').value;
													document.getElementById("display37").value=b17;
													bq++;
												}else{
													document.getElementById('btnb17').classList.remove("btn_c");
													document.getElementById("display37").value=0;
													bq--;
												}
											}
										</script>
									@else
										<button type="button" disabled class="booked">B17</button>
									@endif
							</td>
							<td>
								@if( $row->B18 == '0')
								<button type="button" value="4000" id="btnb18" class="number" onclick="second_b18()">B18</button>
									<script type="text/javascript">
										var br =0;
											function second_b18(){
												if (br==0) {
													document.getElementById('btnb18').classList.add("btn_c");
													var b18 =document.getElementById('btnb18').value;
													document.getElementById("display38").value=b18;
													br++;
												}else{
													document.getElementById('btnb18').classList.remove("btn_c");
													document.getElementById("display38").value=0;
													br--;
												}
											}
										</script>
									@else
										<button type="button" disabled class="booked">B18</button>
									@endif
							</td>
							<td>
								@if( $row->B19 == '0')
								<button type="button" value="4000" id="btnb19" class="number" onclick="second_b19()">B19</button>
									<script type="text/javascript">
										var bs =0;
											function second_b19(){
												if (bs==0) {
													document.getElementById('btnb19').classList.add("btn_c");
													var b19 =document.getElementById('btnb19').value;
													document.getElementById("display39").value=b19;
													bs++;
												}else{
													document.getElementById('btnb19').classList.remove("btn_c");
													document.getElementById("display39").value=0;
													bs--;
												}
											}
										</script>
									@else
										<button type="button" disabled class="booked">B19</button>
									@endif
							</td>
							<td>
								@if( $row->B20 == '0')
								<button type="button" value="4000" id="btnb20" class="number" onclick="second_b20()">B20</button>
									<script type="text/javascript">
										var bt =0;
											function second_b20(){
												if (bt==0) {
													document.getElementById('btnb20').classList.add("btn_c");
													var b20 =document.getElementById('btnb20').value;
													document.getElementById("display40").value=b20;
													bt++;
												}else{
													document.getElementById('btnb20').classList.remove("btn_c");
													document.getElementById("display40").value=0;
													bt--;
												}
											}
										</script>
									@else
										<button type="button" disabled class="booked">B20</button>
									@endif
							</td>
						</tr>		
						@endforeach
					</tbody>
				</table>
				<br>
				<table>
					<tbody>
						@foreach($data as $row)
						<tr>
							<td>
								@if( $row->C1 == '0')
								<button type="button" value="2000" id="btnc1" class="number" onclick="second_c1()">C1</button>
								<script type="text/javascript">
									var ca =0;
									function second_c1(){
										if (ca==0) {
											document.getElementById('btnc1').classList.add("btn_c");
											var c1 =document.getElementById('btnc1').value;
											document.getElementById("display41").value=c1;
											ca++;
										}else{
											document.getElementById('btnc1').classList.remove("btn_c");
											document.getElementById("display41").value=0;
											ca--;
										}
									}
								</script>
								@else
								<button type="button" disabled class="booked">C1</button>
								@endif
							</td>
							<td>
								@if( $row->C2 == '0')
								<button type="button" value="2000" id="btnc2" class="number" onclick="second_c2()">C2</button>
								<script type="text/javascript">
									var cb =0;
									function second_c2(){
										if (cb==0) {
											document.getElementById('btnc2').classList.add("btn_c");
											var c2 =document.getElementById('btnc2').value;
											document.getElementById("display42").value=c2;
											cb++;
										}else{
											document.getElementById('btnc2').classList.remove("btn_c");
											document.getElementById("display42").value=0;
											cb--;
										}
									}
								</script>
								@else
								<button type="button" disabled class="booked">C2</button>
								@endif
							</td>
							<td>
								@if( $row->C3 == '0')
								<button type="button" value="2000" id="btnc3" class="number" onclick="second_c3()">C3</button>
								<script type="text/javascript">
									var cc =0;
									function second_c3(){
										if (cc==0) {
											document.getElementById('btnc3').classList.add("btn_c");
											var c3 =document.getElementById('btnc3').value;
											document.getElementById("display43").value=c3;
											cc++;
										}else{
											document.getElementById('btnc3').classList.remove("btn_c");
											document.getElementById("display43").value=0;
											cc--;
										}
									}
								</script>
								@else
								<button type="button" disabled class="booked">C3</button>
								@endif
							</td>
							<td>
								@if( $row->C4 == '0')
								<button type="button" value="2000" id="btnc4" class="number" onclick="second_c4()">C4</button>
								<script type="text/javascript">
									var cd =0;
									function second_c4(){
										if (cd==0) {
											document.getElementById('btnc4').classList.add("btn_c");
											var c4 =document.getElementById('btnc4').value;
											document.getElementById("display44").value=c4;
											cd++;
										}else{
											document.getElementById('btnc4').classList.remove("btn_c");
											document.getElementById("display44").value=0;
											cd--;
										}
									}
								</script>
								@else
								<button type="button" disabled class="booked">B4</button>
								@endif
							</td>
							<td>
								@if( $row->C5 == '0')
								<button type="button" value="2000" id="btnc5" class="number" onclick="second_c5()">C5</button>
								<script type="text/javascript">
									var ce =0;
									function second_c5(){
										if (ce==0) {
											document.getElementById('btnc5').classList.add("btn_c");
											var c5 =document.getElementById('btnc5').value;
											document.getElementById("display45").value=c5;
											ce++;
										}else{
											document.getElementById('btnc5').classList.remove("btn_c");
											document.getElementById("display45").value=0;
											ce--;
										}
									}
								</script>
								@else
								<button type="button" disabled class="booked">C5</button>
								@endif
							</td>
							<td>
								@if( $row->C6 == '0')
								<button type="button" value="2000" id="btnc6" class="number" onclick="second_c6()">C6</button>
								<script type="text/javascript">
									var cf =0;
									function second_c6(){
										if (cf==0) {
											document.getElementById('btnc6').classList.add("btn_c");
											var c6 =document.getElementById('btnc6').value;
											document.getElementById("display46").value=c6;
											cf++;
										}else{
											document.getElementById('btnc6').classList.remove("btn_c");
											document.getElementById("display46").value=0;
											cf--;
										}
									}
								</script>
								@else
								<button type="button" disabled class="booked">C6</button>
								@endif
							</td>
							<td>
								@if( $row->C7 == '0')
								<button type="button" value="2000" id="btnc7" class="number" onclick="second_c7()">C7</button>
								<script type="text/javascript">
									var cg =0;
									function second_c7(){
										if (cg==0) {
											document.getElementById('btnc7').classList.add("btn_c");
											var c7 =document.getElementById('btnc7').value;
											document.getElementById("display47").value=c7;
											cg++;
										}else{
											document.getElementById('btnc7').classList.remove("btn_c");
											document.getElementById("display47").value=0;
											cg--;
										}
									}
								</script>
								@else
								<button type="button" disabled class="booked">C7</button>
								@endif
							</td>
							<td>
								@if( $row->C8 == '0')
								<button type="button" value="2000" id="btnc8" class="number" onclick="second_c8()">C8</button>
								<script type="text/javascript">
									var ch =0;
									function second_c8(){
										if (ch==0) {
											document.getElementById('btnc8').classList.add("btn_c");
											var c8 =document.getElementById('btnc8').value;
											document.getElementById("display48").value=c8;
											ch++;
										}else{
											document.getElementById('btnc8').classList.remove("btn_c");
											document.getElementById("display48").value=0;
											ch--;
										}
									}
								</script>
								@else
								<button type="button" disabled class="booked">C8</button>
								@endif
							</td>
							<td>
								@if( $row->C9 == '0')
								<button type="button" value="2000" id="btnc9" class="number" onclick="second_c9()">C9</button>
								<script type="text/javascript">
									var ci =0;
									function second_c9(){
										if (ci==0) {
											document.getElementById('btnc9').classList.add("btn_c");
											var c9 =document.getElementById('btnc9').value;
											document.getElementById("display49").value=c9;
											ci++;
										}else{
											document.getElementById('btnc9').classList.remove("btn_c");
											document.getElementById("display49").value=0;
											ci--;
										}
									}
								</script>
								@else
								<button type="button" disabled class="booked">C9</button>
								@endif
							</td>
							<td>
								@if( $row->C10 == '0')
								<button type="button" value="2000" id="btnc10" class="number" onclick="second_c10()">C10</button>
								<script type="text/javascript">
									var cj =0;
									function second_c10(){
										if (cj==0) {
											document.getElementById('btnc10').classList.add("btn_c");
											var c10 =document.getElementById('btnc10').value;
											document.getElementById("display50").value=c10;
											cj++;
										}else{
											document.getElementById('btnc10').classList.remove("btn_c");
											document.getElementById("display50").value=0;
											cj--;
										}
									}
								</script>
								@else
								<button type="button" disabled class="booked">C10</button>
								@endif
							</td>
						</tr>
						<tr>
							<td>
								@if( $row->C11 == '0')
								<button type="button" value="2000" id="btnc11" class="number" onclick="second_c11()">C11</button>
									<script type="text/javascript">
										var ck =0;
											function second_c11(){
												if (ck==0) {
													document.getElementById('btnc11').classList.add("btn_c");
													var c11 =document.getElementById('btnc11').value;
													document.getElementById("display51").value=c11;
													ck++;
												}else{
													document.getElementById('btnc11').classList.remove("btn_c");
													document.getElementById("display51").value=0;
													ck--;
												}
											}
										</script>
									@else
										<button type="button" disabled class="booked">C11</button>
									@endif
							</td>
							<td>
								@if( $row->C12 == '0')
								<button type="button" value="2000" id="btnc12" class="number" onclick="second_c12()">C12</button>
									<script type="text/javascript">
										var cl =0;
											function second_c12(){
												if (cl==0) {
													document.getElementById('btnc12').classList.add("btn_c");
													var c12 =document.getElementById('btnc12').value;
													document.getElementById("display52").value=c12;
													cl++;
												}else{
													document.getElementById('btnc12').classList.remove("btn_c");
													document.getElementById("display52").value=0;
													cl--;
												}
											}
										</script>
									@else
										<button type="button" disabled class="booked">C12</button>
									@endif
							</td>
							<td>
								@if( $row->C13 == '0')
								<button type="button" value="2000" id="btnc13" class="number" onclick="second_c13()">C13</button>
									<script type="text/javascript">
										var cm =0;
											function second_c13(){
												if (cm==0) {
													document.getElementById('btnc13').classList.add("btn_c");
													var c13 =document.getElementById('btnc13').value;
													document.getElementById("display53").value=c13;
													cm++;
												}else{
													document.getElementById('btnc13').classList.remove("btn_c");
													document.getElementById("display53").value=0;
													cm--;
												}
											}
										</script>
									@else
										<button type="button" disabled class="booked">C13</button>
									@endif
							</td>
							<td>
								@if( $row->C14 == '0')
								<button type="button" value="2000" id="btnc14" class="number" onclick="second_c14()">C14</button>
									<script type="text/javascript">
										var cn =0;
											function second_c14(){
												if (cn==0) {
													document.getElementById('btnc14').classList.add("btn_c");
													var c14 =document.getElementById('btnc14').value;
													document.getElementById("display54").value=c14;
													cn++;
												}else{
													document.getElementById('btnc14').classList.remove("btn_c");
													document.getElementById("display54").value=0;
													cn--;
												}
											}
										</script>
									@else
										<button type="button" disabled class="booked">C14</button>
									@endif
							</td>
							<td>
								@if( $row->C15 == '0')
								<button type="button" value="2000" id="btnc15" class="number" onclick="second_c15()">C15</button>
									<script type="text/javascript">
										var co =0;
											function second_c15(){
												if (co==0) {
													document.getElementById('btnc15').classList.add("btn_c");
													var c15 =document.getElementById('btnc15').value;
													document.getElementById("display55").value=c15;
													co++;
												}else{
													document.getElementById('btnc15').classList.remove("btn_c");
													document.getElementById("display55").value=0;
													co--;
												}
											}
										</script>
									@else
										<button type="button" disabled class="booked">C15</button>
									@endif
							</td>
							<td>
								@if( $row->C16 == '0')
								<button type="button" value="2000" id="btnc16" class="number" onclick="second_c16()">C16</button>
									<script type="text/javascript">
										var cp =0;
											function second_c16(){
												if (cp==0) {
													document.getElementById('btnc16').classList.add("btn_c");
													var c16 =document.getElementById('btnc16').value;
													document.getElementById("display56").value=c16;
													cp++;
												}else{
													document.getElementById('btnc16').classList.remove("btn_c");
													document.getElementById("display56").value=0;
													cp--;
												}
											}
										</script>
									@else
										<button type="button" disabled class="booked">C16</button>
									@endif
							</td>
							<td>
								@if( $row->C17 == '0')
								<button type="button" value="2000" id="btnc17" class="number" onclick="second_c17()">C17</button>
									<script type="text/javascript">
										var cq =0;
											function second_c17(){
												if (cq==0) {
													document.getElementById('btnc17').classList.add("btn_c");
													var c17 =document.getElementById('btnc17').value;
													document.getElementById("display57").value=c17;
													cq++;
												}else{
													document.getElementById('btnc17').classList.remove("btn_c");
													document.getElementById("display57").value=0;
													cq--;
												}
											}
										</script>
									@else
										<button type="button" disabled class="booked">C17</button>
									@endif
							</td>
							<td>
								@if( $row->C18 == '0')
								<button type="button" value="2000" id="btnc18" class="number" onclick="second_c18()">C18</button>
									<script type="text/javascript">
										var cr =0;
											function second_c18(){
												if (cr==0) {
													document.getElementById('btnc18').classList.add("btn_c");
													var c18 =document.getElementById('btnc18').value;
													document.getElementById("display58").value=c18;
													cr++;
												}else{
													document.getElementById('btnc18').classList.remove("btn_c");
													document.getElementById("display58").value=0;
													cr--;
												}
											}
										</script>
									@else
										<button type="button" disabled class="booked">C18</button>
									@endif
							</td>
							<td>
								@if( $row->C19 == '0')
								<button type="button" value="2000" id="btnc19" class="number" onclick="second_c19()">C19</button>
									<script type="text/javascript">
										var cs =0;
											function second_c19(){
												if (cs==0) {
													document.getElementById('btnc19').classList.add("btn_c");
													var c19 =document.getElementById('btnc19').value;
													document.getElementById("display59").value=c19;
													cs++;
												}else{
													document.getElementById('btnc19').classList.remove("btn_c");
													document.getElementById("display59").value=0;
													cs--;
												}
											}
										</script>
									@else
										<button type="button" disabled class="booked">C19</button>
									@endif
							</td>
							<td>
								@if( $row->C20 == '0')
								<button type="button" value="2000" id="btnc20" class="number" onclick="second_c20()">C20</button>
									<script type="text/javascript">
										var ct =0;
											function second_c20(){
												if (ct==0) {
													document.getElementById('btnc20').classList.add("btn_c");
													var c20 =document.getElementById('btnc20').value;
													document.getElementById("display60").value=c20;
													ct++;
												}else{
													document.getElementById('btnc20').classList.remove("btn_c");
													document.getElementById("display60").value=0;
													ct--;
												}
											}
										</script>
									@else
										<button type="button" disabled class="booked">C20</button>
									@endif
							</td>
						</tr>		
						@endforeach
					</tbody>
				</table>
				<div class="front-indicator">Screening</div>
			</div>
	  		<div class="col-md-4">
	  			<button class="button" onclick="myfunction()">Total</button>
	  			<input type="text" class="add" id="add" value="0">MMK
	  			<input type="text" id="check" onclick="checkprice()">
	  			
				<div class="hidden">
					<input type="text" class="display1" id="display1" value="0">
					<input type="text" class="display2" id="display2" value="0">
					<input type="text" class="display3" id="display3" value="0">
					<input type="text" class="display4" id="display4" value="0">
					<input type="text" class="display5" id="display5" value="0">
					<input type="text" class="display6" id="display6" value="0">
					<input type="text" class="display7" id="display7" value="0">
					<input type="text" class="display8" id="display8" value="0">
					<input type="text" class="display9" id="display9" value="0">
					<input type="text" class="display10" id="display10" value="0">
					<input type="text" class="display11" id="display11" value="0">
					<input type="text" class="display12" id="display12" value="0">
					<input type="text" class="display13" id="display13" value="0">
					<input type="text" class="display14" id="display14" value="0">
					<input type="text" class="display15" id="display15" value="0">
					<input type="text" class="display16" id="display16" value="0">
					<input type="text" class="display17" id="display17" value="0">
					<input type="text" class="display18" id="display18" value="0">
					<input type="text" class="display19" id="display19" value="0">
					<input type="text" class="display20" id="display20" value="0">
					<input type="text" class="display21" id="display21" value="0">
					<input type="text" class="display22" id="display22" value="0">
					<input type="text" class="display23" id="display23" value="0">
					<input type="text" class="display24" id="display24" value="0">
					<input type="text" class="display25" id="display25" value="0">
					<input type="text" class="display26" id="display26" value="0">
					<input type="text" class="display27" id="display27" value="0">
					<input type="text" class="display28" id="display28" value="0">
					<input type="text" class="display29" id="display29" value="0">
					<input type="text" class="display30" id="display30" value="0">
					<input type="text" class="display31" id="display31" value="0">
					<input type="text" class="display32" id="display32" value="0">
					<input type="text" class="display33" id="display33" value="0">
					<input type="text" class="display34" id="display34" value="0">
					<input type="text" class="display35" id="display35" value="0">
					<input type="text" class="display36" id="display36" value="0">
					<input type="text" class="display37" id="display37" value="0">
					<input type="text" class="display38" id="display38" value="0">
					<input type="text" class="display39" id="display39" value="0">
					<input type="text" class="display40" id="display40" value="0">
					<input type="text" class="display41" id="display41" value="0">
					<input type="text" class="display42" id="display42" value="0">
					<input type="text" class="display43" id="display43" value="0">
					<input type="text" class="display44" id="display44" value="0">
					<input type="text" class="display45" id="display45" value="0">
					<input type="text" class="display46" id="display46" value="0">
					<input type="text" class="display47" id="display47" value="0">
					<input type="text" class="display48" id="display48" value="0">
					<input type="text" class="display49" id="display49" value="0">
					<input type="text" class="display50" id="display50" value="0">
					<input type="text" class="display51" id="display51" value="0">
					<input type="text" class="display52" id="display52" value="0">
					<input type="text" class="display53" id="display53" value="0">
					<input type="text" class="display54" id="display54" value="0">
					<input type="text" class="display55" id="display55" value="0">
					<input type="text" class="display56" id="display56" value="0">
					<input type="text" class="display57" id="display57" value="0">
					<input type="text" class="display58" id="display58" value="0">
					<input type="text" class="display59" id="display59" value="0">
					<input type="text" class="display60" id="display60" value="0">
				</div>
				<script type="text/javascript">
					function myfunction(){
						var a1 =parseInt(document.getElementById('display1').value);
						var a2 =parseInt(document.getElementById('display2').value);
						var a3 =parseInt(document.getElementById('display3').value);
						var a4 =parseInt(document.getElementById('display4').value);
						var a5 =parseInt(document.getElementById('display5').value);
						var a6 =parseInt(document.getElementById('display6').value);
						var a7 =parseInt(document.getElementById('display7').value);
						var a8 =parseInt(document.getElementById('display8').value);
						var a9 =parseInt(document.getElementById('display9').value);
						var a10 =parseInt(document.getElementById('display10').value);
						var a11 =parseInt(document.getElementById('display11').value);
						var a12 =parseInt(document.getElementById('display12').value);
						var a13 =parseInt(document.getElementById('display13').value);
						var a14 =parseInt(document.getElementById('display14').value);
						var a15 =parseInt(document.getElementById('display15').value);
						var a16 =parseInt(document.getElementById('display16').value);
						var a17 =parseInt(document.getElementById('display17').value);
						var a18 =parseInt(document.getElementById('display18').value);
						var a19 =parseInt(document.getElementById('display19').value);
						var a20 =parseInt(document.getElementById('display20').value);
						var b1 =parseInt(document.getElementById('display21').value);
						var b2 =parseInt(document.getElementById('display22').value);
						var b3 =parseInt(document.getElementById('display23').value);
						var b4 =parseInt(document.getElementById('display24').value);
						var b5 =parseInt(document.getElementById('display25').value);
						var b6 =parseInt(document.getElementById('display26').value);
						var b7 =parseInt(document.getElementById('display27').value);
						var b8 =parseInt(document.getElementById('display28').value);
						var b9 =parseInt(document.getElementById('display29').value);
						var b10 =parseInt(document.getElementById('display30').value);
						var b11 =parseInt(document.getElementById('display31').value);
						var b12 =parseInt(document.getElementById('display32').value);
						var b13 =parseInt(document.getElementById('display33').value);
						var b14 =parseInt(document.getElementById('display34').value);
						var b15 =parseInt(document.getElementById('display35').value);
						var b16 =parseInt(document.getElementById('display36').value);
						var b17 =parseInt(document.getElementById('display37').value);
						var b18 =parseInt(document.getElementById('display38').value);
						var b19 =parseInt(document.getElementById('display39').value);
						var b20 =parseInt(document.getElementById('display40').value);
						var c1 =parseInt(document.getElementById('display41').value);
						var c2 =parseInt(document.getElementById('display42').value);
						var c3 =parseInt(document.getElementById('display43').value);
						var c4 =parseInt(document.getElementById('display44').value);
						var c5 =parseInt(document.getElementById('display45').value);
						var c6 =parseInt(document.getElementById('display46').value);
						var c7 =parseInt(document.getElementById('display47').value);
						var c8 =parseInt(document.getElementById('display48').value);
						var c9 =parseInt(document.getElementById('display49').value);
						var c10 =parseInt(document.getElementById('display50').value);
						var c11 =parseInt(document.getElementById('display51').value);
						var c12 =parseInt(document.getElementById('display52').value);
						var c13 =parseInt(document.getElementById('display53').value);
						var c14 =parseInt(document.getElementById('display54').value);
						var c15 =parseInt(document.getElementById('display55').value);
						var c16 =parseInt(document.getElementById('display56').value);
						var c17 =parseInt(document.getElementById('display57').value);
						var c18 =parseInt(document.getElementById('display58').value);
						var c19 =parseInt(document.getElementById('display59').value);
						var c20 =parseInt(document.getElementById('display60').value);
						var total = a1 + a2 + a3 + a4 + a5 + a6 + a7 + a8 + a9 + a10 + a11 + a12 + a13 + a14 + a15 + a16 + a17 + a18 + a19 + a20 + b1 + b2 + b3 + b4 + b5 + b6 + b7 + b8 + b9 + b10 + b11 + b12 + b13 + b14 + b15 + b16 + b17 + b18 + b19 + b20 + c1 + c2 + c3 + c4 + c5 + c6 + c7 + c8 + c9 + c10 + c11 +c12 + c13 + c14 + c15 + c16 + c17 + c18 + c19 + c20;
					var a= parseInt(total);
					document.getElementById('add').value = a;
					console.log(add);
					}
				</script>
				
			</div>
		</div>
	</div>




@endsection

