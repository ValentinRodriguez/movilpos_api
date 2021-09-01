<?php

$files = $request->file('image');

foreach($files as $file){
    $this->modelo::create([
        'title' => $request->title,
        'product_id' => base64_decode($request->product_id),
        'image' => $upload->upload_global($file, 'productimage'),
        'create_uid' => Auth::user()->id,
        'write_uid' => Auth::user()->id
    ]);
}

function upload_global($file, $folder){ 

    $file_type = $file->getClientOriginalExtension(); 
    $folder = $folder; 
    $destinationPath = public_path() . '/uploads/'.$folder; 
    $destinationPathThumb = public_path() . '/uploads/'.$folder.'thumb'; 
    $filename = uniqid().'_'.time() . '.' . $file->getClientOriginalExtension();
    $url = '/uploads/'.$folder.'/'.$filename; 

    if ($file->move($destinationPath.'/' , $filename)) { 
        return $filename; 
    } 
}



<a href="cpu.php?cpu=Intel+Core+i3-2370M+%40+2.40GHz&amp;id=761#price">30.23
</a></td><td>


<a href="cpu.php?cpu=Intel+Core+i3-2370M+%40+2.40GHz&amp;id=761#price">$44.02</a></td></tr><tr id="cpu1879" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-2375M+%40+1.50GHz&amp;id=1879">Intel Core i3-2375M @ 1.50GHz
</a></td><td>890</td><td>2650</td><td>NA</td><td>NA</td></tr><tr id="cpu762" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-2377M+%40+1.50GHz&amp;id=762">Intel Core i3-2377M @ 1.50GHz
</a></td><td>872</td><td>2665</td><td>NA</td><td>NA</td></tr><tr id="cpu763" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-3110M+%40+2.40GHz&amp;id=763">Intel Core i3-3110M @ 2.40GHz
</a></td><td>1,588</td><td>2128</td><td>


<a href="cpu.php?cpu=Intel+Core+i3-3110M+%40+2.40GHz&amp;id=763#price">22.71
</a></td><td>


<a href="cpu.php?cpu=Intel+Core+i3-3110M+%40+2.40GHz&amp;id=763#price">$69.95*</a></td></tr><tr id="cpu1442" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-3120M+%40+2.50GHz&amp;id=1442">Intel Core i3-3120M @ 2.50GHz
</a></td><td>1,612</td><td>2111</td><td>


<a href="cpu.php?cpu=Intel+Core+i3-3120M+%40+2.50GHz&amp;id=1442#price">12.49
</a></td><td>


<a href="cpu.php?cpu=Intel+Core+i3-3120M+%40+2.50GHz&amp;id=1442#price">$129.00</a></td></tr><tr id="cpu1829" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-3130M+%40+2.60GHz&amp;id=1829">Intel Core i3-3130M @ 2.60GHz
</a></td><td>1,824</td><td>1969</td><td>NA</td><td>NA</td></tr><tr id="cpu1865" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-3210+%40+3.20GHz&amp;id=1865">Intel Core i3-3210 @ 3.20GHz
</a></td><td>2,061</td><td>1825</td><td>


<a href="cpu.php?cpu=Intel+Core+i3-3210+%40+3.20GHz&amp;id=1865#price">12.49
</a></td><td>


<a href="cpu.php?cpu=Intel+Core+i3-3210+%40+3.20GHz&amp;id=1865#price">$165.00</a></td></tr><tr id="cpu764" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-3217U+%40+1.80GHz&amp;id=764">Intel Core i3-3217U @ 1.80GHz
</a></td><td>1,185</td><td>2387</td><td>


<a href="cpu.php?cpu=Intel+Core+i3-3217U+%40+1.80GHz&amp;id=764#price">5.95
</a></td><td>


<a href="cpu.php?cpu=Intel+Core+i3-3217U+%40+1.80GHz&amp;id=764#price">$199.00*</a></td></tr><tr id="cpu2143" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-3217UE+%40+1.60GHz&amp;id=2143">Intel Core i3-3217UE @ 1.60GHz
</a></td><td>1,362</td><td>2254</td><td>NA</td><td>NA</td></tr><tr id="cpu1472" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-3220+%40+3.30GHz&amp;id=1472">Intel Core i3-3220 @ 3.30GHz
</a></td><td>2,163</td><td>1776</td><td>


<a href="cpu.php?cpu=Intel+Core+i3-3220+%40+3.30GHz&amp;id=1472#price">39.55
</a></td><td>


<a href="cpu.php?cpu=Intel+Core+i3-3220+%40+3.30GHz&amp;id=1472#price">$54.68</a></td></tr><tr id="cpu1473" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-3220T+%40+2.80GHz&amp;id=1473">Intel Core i3-3220T @ 2.80GHz
</a></td><td>1,954</td><td>1887</td><td>


<a href="cpu.php?cpu=Intel+Core+i3-3220T+%40+2.80GHz&amp;id=1473#price">30.07
</a></td><td>


<a href="cpu.php?cpu=Intel+Core+i3-3220T+%40+2.80GHz&amp;id=1473#price">$64.99</a></td></tr><tr id="cpu1474" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-3225+%40+3.30GHz&amp;id=1474">Intel Core i3-3225 @ 3.30GHz
</a></td><td>2,187</td><td>1767</td><td>


<a href="cpu.php?cpu=Intel+Core+i3-3225+%40+3.30GHz&amp;id=1474#price">10.42
</a></td><td>


<a href="cpu.php?cpu=Intel+Core+i3-3225+%40+3.30GHz&amp;id=1474#price">$210.00</a></td></tr><tr id="cpu1861" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-3227U+%40+1.90GHz&amp;id=1861">Intel Core i3-3227U @ 1.90GHz
</a></td><td>1,237</td><td>2352</td><td>NA</td><td>NA</td></tr><tr id="cpu1950" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-3229Y+%40+1.40GHz&amp;id=1950">Intel Core i3-3229Y @ 1.40GHz
</a></td><td>978</td><td>2572</td><td>NA</td><td>NA</td></tr><tr id="cpu765" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-3240+%40+3.40GHz&amp;id=765">Intel Core i3-3240 @ 3.40GHz
</a></td><td>2,275</td><td>1707</td><td>


<a href="cpu.php?cpu=Intel+Core+i3-3240+%40+3.40GHz&amp;id=765#price">53.53
</a></td><td>


<a href="cpu.php?cpu=Intel+Core+i3-3240+%40+3.40GHz&amp;id=765#price">$42.49</a></td></tr><tr id="cpu1793" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-3240T+%40+2.90GHz&amp;id=1793">Intel Core i3-3240T @ 2.90GHz
</a></td><td>1,985</td><td>1878</td><td>NA</td><td>NA</td></tr><tr id="cpu1934" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-3245+%40+3.40GHz&amp;id=1934">Intel Core i3-3245 @ 3.40GHz
</a></td><td>2,514</td><td>1609</td><td>


<a href="cpu.php?cpu=Intel+Core+i3-3245+%40+3.40GHz&amp;id=1934#price">20.13
</a></td><td>


<a href="cpu.php?cpu=Intel+Core+i3-3245+%40+3.40GHz&amp;id=1934#price">$124.88</a></td></tr><tr id="cpu2034" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-3250+%40+3.50GHz&amp;id=2034">Intel Core i3-3250 @ 3.50GHz
</a></td><td>2,331</td><td>1684</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-3250+%40+3.50GHz&amp;id=2034#price">42.41
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-3250+%40+3.50GHz&amp;id=2034#price">$54.97</a></td></tr><tr id="cpu2732" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-3250T+%40+3.00GHz&amp;id=2732">Intel Core i3-3250T @ 3.00GHz
</a></td><td>2,650</td><td>1559</td><td>NA</td><td>NA</td></tr><tr id="cpu2072" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-4000M+%40+2.40GHz&amp;id=2072">Intel Core i3-4000M @ 2.40GHz
</a></td><td>1,727</td><td>2019</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-4000M+%40+2.40GHz&amp;id=2072#price">29.72
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-4000M+%40+2.40GHz&amp;id=2072#price">$58.11</a></td></tr><tr id="cpu2193" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-4005U+%40+1.70GHz&amp;id=2193">Intel Core i3-4005U @ 1.70GHz
</a></td><td>1,633</td><td>2090</td><td>NA</td><td>NA</td></tr><tr id="cpu2012" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-4010U+%40+1.70GHz&amp;id=2012">Intel Core i3-4010U @ 1.70GHz
</a></td><td>1,633</td><td>2089</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-4010U+%40+1.70GHz&amp;id=2012#price">13.07
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-4010U+%40+1.70GHz&amp;id=2012#price">$124.95*</a></td></tr><tr id="cpu2106" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-4010Y+%40+1.30GHz&amp;id=2106">Intel Core i3-4010Y @ 1.30GHz
</a></td><td>1,310</td><td>2295</td><td>NA</td><td>NA</td></tr><tr id="cpu2257" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-4012Y+%40+1.50GHz&amp;id=2257">Intel Core i3-4012Y @ 1.50GHz
</a></td><td>1,305</td><td>2299</td><td>NA</td><td>NA</td></tr><tr id="cpu2128" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-4020Y+%40+1.50GHz&amp;id=2128">Intel Core i3-4020Y @ 1.50GHz
</a></td><td>1,437</td><td>2210</td><td>NA</td><td>NA</td></tr><tr id="cpu2321" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-4025U+%40+1.90GHz&amp;id=2321">Intel Core i3-4025U @ 1.90GHz
</a></td><td>1,918</td><td>1912</td><td>NA</td><td>NA</td></tr><tr id="cpu2277" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-4030U+%40+1.90GHz&amp;id=2277">Intel Core i3-4030U @ 1.90GHz
</a></td><td>1,878</td><td>1940</td><td>NA</td><td>NA</td></tr><tr id="cpu2434" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-4030Y+%40+1.60GHz&amp;id=2434">Intel Core i3-4030Y @ 1.60GHz
</a></td><td>1,654</td><td>2069</td><td>NA</td><td>NA</td></tr><tr id="cpu2410" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-4100M+%40+2.50GHz&amp;id=2410">Intel Core i3-4100M @ 2.50GHz
</a></td><td>2,449</td><td>1633</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-4100M+%40+2.50GHz&amp;id=2410#price">11.20
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-4100M+%40+2.50GHz&amp;id=2410#price">$218.57*</a></td></tr><tr id="cpu2453" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-4110M+%40+2.60GHz&amp;id=2453">Intel Core i3-4110M @ 2.60GHz
</a></td><td>2,580</td><td>1584</td><td>NA</td><td>NA</td></tr><tr id="cpu2569" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-4110U+%40+1.90GHz&amp;id=2569">Intel Core i3-4110U @ 1.90GHz
</a></td><td>1,853</td><td>1950</td><td>NA</td><td>NA</td></tr><tr id="cpu2769" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-4120U+%40+2.00GHz&amp;id=2769">Intel Core i3-4120U @ 2.00GHz
</a></td><td>1,948</td><td>1892</td><td>NA</td><td>NA</td></tr><tr id="cpu2015" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-4130+%40+3.40GHz&amp;id=2015">Intel Core i3-4130 @ 3.40GHz
</a></td><td>3,260</td><td>1351</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-4130+%40+3.40GHz&amp;id=2015#price">45.09
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-4130+%40+3.40GHz&amp;id=2015#price">$72.29</a></td></tr><tr id="cpu2035" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-4130T+%40+2.90GHz&amp;id=2035">Intel Core i3-4130T @ 2.90GHz
</a></td><td>2,874</td><td>1479</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-4130T+%40+2.90GHz&amp;id=2035#price">11.56
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-4130T+%40+2.90GHz&amp;id=2035#price">$248.56*</a></td></tr><tr id="cpu2252" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-4150+%40+3.50GHz&amp;id=2252">Intel Core i3-4150 @ 3.50GHz
</a></td><td>3,342</td><td>1325</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-4150+%40+3.50GHz&amp;id=2252#price">47.75
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-4150+%40+3.50GHz&amp;id=2252#price">$70.00</a></td></tr><tr id="cpu2296" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-4150T+%40+3.00GHz&amp;id=2296">Intel Core i3-4150T @ 3.00GHz
</a></td><td>2,846</td><td>1492</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-4150T+%40+3.00GHz&amp;id=2296#price">6.82
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-4150T+%40+3.00GHz&amp;id=2296#price">$417.42*</a></td></tr><tr id="cpu2443" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-4158U+%40+2.00GHz&amp;id=2443">Intel Core i3-4158U @ 2.00GHz
</a></td><td>1,718</td><td>2026</td><td>NA</td><td>NA</td></tr><tr id="cpu2317" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-4160+%40+3.60GHz&amp;id=2317">Intel Core i3-4160 @ 3.60GHz
</a></td><td>3,468</td><td>1298</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-4160+%40+3.60GHz&amp;id=2317#price">18.74
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-4160+%40+3.60GHz&amp;id=2317#price">$184.99</a></td></tr><tr id="cpu2380" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-4160T+%40+3.10GHz&amp;id=2380">Intel Core i3-4160T @ 3.10GHz
</a></td><td>3,105</td><td>1404</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-4160T+%40+3.10GHz&amp;id=2380#price">51.75
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-4160T+%40+3.10GHz&amp;id=2380#price">$59.99*</a></td></tr><tr id="cpu2522" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-4170+%40+3.70GHz&amp;id=2522">Intel Core i3-4170 @ 3.70GHz
</a></td><td>3,614</td><td>1266</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-4170+%40+3.70GHz&amp;id=2522#price">39.34
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-4170+%40+3.70GHz&amp;id=2522#price">$91.85</a></td></tr><tr id="cpu2624" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-4170T+%40+3.20GHz&amp;id=2624">Intel Core i3-4170T @ 3.20GHz
</a></td><td>3,137</td><td>1395</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-4170T+%40+3.20GHz&amp;id=2624#price">15.69
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-4170T+%40+3.20GHz&amp;id=2624#price">$199.95*</a></td></tr><tr id="cpu2025" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-4330+%40+3.50GHz&amp;id=2025">Intel Core i3-4330 @ 3.50GHz
</a></td><td>3,561</td><td>1280</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-4330+%40+3.50GHz&amp;id=2025#price">22.48
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-4330+%40+3.50GHz&amp;id=2025#price">$158.41</a></td></tr><tr id="cpu2161" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-4330T+%40+3.00GHz&amp;id=2161">Intel Core i3-4330T @ 3.00GHz
</a></td><td>3,098</td><td>1406</td><td>NA</td><td>NA</td></tr><tr id="cpu2139" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-4330TE+%40+2.40GHz&amp;id=2139">Intel Core i3-4330TE @ 2.40GHz
</a></td><td>2,500</td><td>1612</td><td>NA</td><td>NA</td></tr><tr id="cpu2029" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-4340+%40+3.60GHz&amp;id=2029">Intel Core i3-4340 @ 3.60GHz
</a></td><td>3,606</td><td>1269</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-4340+%40+3.60GHz&amp;id=2029#price">24.04
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-4340+%40+3.60GHz&amp;id=2029#price">$149.99</a></td></tr><tr id="cpu2283" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-4350+%40+3.60GHz&amp;id=2283">Intel Core i3-4350 @ 3.60GHz
</a></td><td>3,297</td><td>1339</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-4350+%40+3.60GHz&amp;id=2283#price">65.96
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-4350+%40+3.60GHz&amp;id=2283#price">$49.99*</a></td></tr><tr id="cpu2544" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-4350T+%40+3.10GHz&amp;id=2544">Intel Core i3-4350T @ 3.10GHz
</a></td><td>2,888</td><td>1474</td><td>NA</td><td>NA</td></tr><tr id="cpu2244" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-4360+%40+3.70GHz&amp;id=2244">Intel Core i3-4360 @ 3.70GHz
</a></td><td>3,657</td><td>1257</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-4360+%40+3.70GHz&amp;id=2244#price">13.55
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-4360+%40+3.70GHz&amp;id=2244#price">$269.95</a></td></tr><tr id="cpu2330" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-4360T+%40+3.20GHz&amp;id=2330">Intel Core i3-4360T @ 3.20GHz
</a></td><td>3,164</td><td>1382</td><td>NA</td><td>NA</td></tr><tr id="cpu2351" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-4370+%40+3.80GHz&amp;id=2351">Intel Core i3-4370 @ 3.80GHz
</a></td><td>3,682</td><td>1252</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-4370+%40+3.80GHz&amp;id=2351#price">12.31
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-4370+%40+3.80GHz&amp;id=2351#price">$299.00*</a></td></tr><tr id="cpu3117" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-4370T+%40+3.30GHz&amp;id=3117">Intel Core i3-4370T @ 3.30GHz
</a></td><td>3,250</td><td>1357</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-4370T+%40+3.30GHz&amp;id=3117#price">23.55
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-4370T+%40+3.30GHz&amp;id=3117#price">$138.00*</a></td></tr><tr id="cpu2174" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-4570T+%40+2.90GHz&amp;id=2174">Intel Core i3-4570T @ 2.90GHz
</a></td><td>3,244</td><td>1361</td><td>NA</td><td>NA</td></tr><tr id="cpu2484" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-5005U+%40+2.00GHz&amp;id=2484">Intel Core i3-5005U @ 2.00GHz
</a></td><td>2,018</td><td>1855</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-5005U+%40+2.00GHz&amp;id=2484#price">6.55
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-5005U+%40+2.00GHz&amp;id=2484#price">$308.00*</a></td></tr><tr id="cpu2467" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-5010U+%40+2.10GHz&amp;id=2467">Intel Core i3-5010U @ 2.10GHz
</a></td><td>2,121</td><td>1796</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-5010U+%40+2.10GHz&amp;id=2467#price">7.07
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-5010U+%40+2.10GHz&amp;id=2467#price">$299.86*</a></td></tr><tr id="cpu2551" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-5015U+%40+2.10GHz&amp;id=2551">Intel Core i3-5015U @ 2.10GHz
</a></td><td>2,097</td><td>1808</td><td>NA</td><td>NA</td></tr><tr id="cpu2597" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-5020U+%40+2.20GHz&amp;id=2597">Intel Core i3-5020U @ 2.20GHz
</a></td><td>2,179</td><td>1769</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-5020U+%40+2.20GHz&amp;id=2597#price">4.75
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-5020U+%40+2.20GHz&amp;id=2597#price">$459.00*</a></td></tr><tr id="cpu2602" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-5157U+%40+2.50GHz&amp;id=2602">Intel Core i3-5157U @ 2.50GHz
</a></td><td>2,588</td><td>1581</td><td>NA</td><td>NA</td></tr><tr id="cpu2912" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-6006U+%40+2.00GHz&amp;id=2912">Intel Core i3-6006U @ 2.00GHz
</a></td><td>2,279</td><td>1706</td><td>NA</td><td>NA</td></tr><tr id="cpu2708" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-6098P+%40+3.60GHz&amp;id=2708">Intel Core i3-6098P @ 3.60GHz
</a></td><td>4,112</td><td>1171</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-6098P+%40+3.60GHz&amp;id=2708#price">12.65
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-6098P+%40+3.60GHz&amp;id=2708#price">$325.00*</a></td></tr><tr id="cpu2617" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-6100+%40+3.70GHz&amp;id=2617">Intel Core i3-6100 @ 3.70GHz
</a></td><td>4,167</td><td>1157</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-6100+%40+3.70GHz&amp;id=2617#price">23.68
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-6100+%40+3.70GHz&amp;id=2617#price">$175.98</a></td></tr><tr id="cpu2789" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-6100E+%40+2.70GHz&amp;id=2789">Intel Core i3-6100E @ 2.70GHz
</a></td><td>3,315</td><td>1331</td><td>NA</td><td>NA</td></tr><tr id="cpu2645" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-6100H+%40+2.70GHz&amp;id=2645">Intel Core i3-6100H @ 2.70GHz
</a></td><td>3,014</td><td>1429</td><td>NA</td><td>NA</td></tr><tr id="cpu2639" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-6100T+%40+3.20GHz&amp;id=2639">Intel Core i3-6100T @ 3.20GHz
</a></td><td>3,569</td><td>1276</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-6100T+%40+3.20GHz&amp;id=2639#price">26.44
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-6100T+%40+3.20GHz&amp;id=2639#price">$134.99*</a></td></tr><tr id="cpu2673" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-6100TE+%40+2.70GHz&amp;id=2673">Intel Core i3-6100TE @ 2.70GHz
</a></td><td>3,280</td><td>1344</td><td>NA</td><td>NA</td></tr><tr id="cpu2623" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-6100U+%40+2.30GHz&amp;id=2623">Intel Core i3-6100U @ 2.30GHz
</a></td><td>2,610</td><td>1572</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-6100U+%40+2.30GHz&amp;id=2623#price">4.92
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-6100U+%40+2.30GHz&amp;id=2623#price">$529.99*</a></td></tr><tr id="cpu3528" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-6102E+%40+1.90GHz&amp;id=3528">Intel Core i3-6102E @ 1.90GHz
</a></td><td>2,349</td><td>1676</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-6102E+%40+1.90GHz&amp;id=3528#price">10.44
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-6102E+%40+1.90GHz&amp;id=3528#price">$225.00*</a></td></tr><tr id="cpu2871" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-6157U+%40+2.40GHz&amp;id=2871">Intel Core i3-6157U @ 2.40GHz
</a></td><td>2,752</td><td>1525</td><td>NA</td><td>NA</td></tr><tr id="cpu2621" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-6300+%40+3.80GHz&amp;id=2621">Intel Core i3-6300 @ 3.80GHz
</a></td><td>4,411</td><td>1118</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-6300+%40+3.80GHz&amp;id=2621#price">25.95
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-6300+%40+3.80GHz&amp;id=2621#price">$169.99</a></td></tr><tr id="cpu2626" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-6300T+%40+3.30GHz&amp;id=2626">Intel Core i3-6300T @ 3.30GHz
</a></td><td>4,040</td><td>1184</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-6300T+%40+3.30GHz&amp;id=2626#price">28.86
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-6300T+%40+3.30GHz&amp;id=2626#price">$139.99</a></td></tr><tr id="cpu2625" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-6320+%40+3.90GHz&amp;id=2625">Intel Core i3-6320 @ 3.90GHz
</a></td><td>4,317</td><td>1134</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-6320+%40+3.90GHz&amp;id=2625#price">28.81
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-6320+%40+3.90GHz&amp;id=2625#price">$149.84</a></td></tr><tr id="cpu3255" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-7020U+%40+2.30GHz&amp;id=3255">Intel Core i3-7020U @ 2.30GHz
</a></td><td>2,573</td><td>1589</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-7020U+%40+2.30GHz&amp;id=3255#price">9.16
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-7020U+%40+2.30GHz&amp;id=3255#price">$281.00*</a></td></tr><tr id="cpu2924" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-7100+%40+3.90GHz&amp;id=2924">Intel Core i3-7100 @ 3.90GHz
</a></td><td>4,306</td><td>1138</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-7100+%40+3.90GHz&amp;id=2924#price">23.03
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-7100+%40+3.90GHz&amp;id=2924#price">$187.00</a></td></tr><tr id="cpu3114" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-7100H+%40+3.00GHz&amp;id=3114">Intel Core i3-7100H @ 3.00GHz
</a></td><td>3,430</td><td>1304</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-7100H+%40+3.00GHz&amp;id=3114#price">15.25
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-7100H+%40+3.00GHz&amp;id=3114#price">$225.00*</a></td></tr><tr id="cpu2953" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-7100T+%40+3.40GHz&amp;id=2953">Intel Core i3-7100T @ 3.40GHz
</a></td><td>3,835</td><td>1218</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-7100T+%40+3.40GHz&amp;id=2953#price">31.96
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-7100T+%40+3.40GHz&amp;id=2953#price">$119.99*</a></td></tr><tr id="cpu2879" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-7100U+%40+2.40GHz&amp;id=2879">Intel Core i3-7100U @ 2.40GHz
</a></td><td>2,703</td><td>1544</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-7100U+%40+2.40GHz&amp;id=2879#price">5.85
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-7100U+%40+2.40GHz&amp;id=2879#price">$462.00*</a></td></tr><tr id="cpu3105" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-7101TE+%40+3.40GHz&amp;id=3105">Intel Core i3-7101TE @ 3.40GHz
</a></td><td>3,985</td><td>1197</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-7101TE+%40+3.40GHz&amp;id=3105#price">34.06
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-7101TE+%40+3.40GHz&amp;id=3105#price">$117.00*</a></td></tr><tr id="cpu3469" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-7102E+%40+2.10GHz&amp;id=3469">Intel Core i3-7102E @ 2.10GHz
</a></td><td>2,521</td><td>1602</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-7102E+%40+2.10GHz&amp;id=3469#price">11.21
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-7102E+%40+2.10GHz&amp;id=3469#price">$225.00*</a></td></tr><tr id="cpu3120" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-7130U+%40+2.70GHz&amp;id=3120">Intel Core i3-7130U @ 2.70GHz
</a></td><td>2,954</td><td>1449</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-7130U+%40+2.70GHz&amp;id=3120#price">6.42
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-7130U+%40+2.70GHz&amp;id=3120#price">$459.99*</a></td></tr><tr id="cpu3370" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-7167U+%40+2.80GHz&amp;id=3370">Intel Core i3-7167U @ 2.80GHz
</a></td><td>3,489</td><td>1294</td><td>NA</td><td>NA</td></tr><tr id="cpu2923" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-7300+%40+4.00GHz&amp;id=2923">Intel Core i3-7300 @ 4.00GHz
</a></td><td>4,761</td><td>1065</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-7300+%40+4.00GHz&amp;id=2923#price">24.31
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-7300+%40+4.00GHz&amp;id=2923#price">$195.85</a></td></tr><tr id="cpu3021" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-7300T+%40+3.50GHz&amp;id=3021">Intel Core i3-7300T @ 3.50GHz
</a></td><td>4,159</td><td>1161</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-7300T+%40+3.50GHz&amp;id=3021#price">22.90
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-7300T+%40+3.50GHz&amp;id=3021#price">$181.59*</a></td></tr><tr id="cpu2941" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-7320+%40+4.10GHz&amp;id=2941">Intel Core i3-7320 @ 4.10GHz
</a></td><td>4,856</td><td>1047</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-7320+%40+4.10GHz&amp;id=2941#price">27.00
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-7320+%40+4.10GHz&amp;id=2941#price">$179.87</a></td></tr><tr id="cpu2930" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-7350K+%40+4.20GHz&amp;id=2930">Intel Core i3-7350K @ 4.20GHz
</a></td><td>4,765</td><td>1063</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-7350K+%40+4.20GHz&amp;id=2930#price">19.86
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-7350K+%40+4.20GHz&amp;id=2930#price">$239.99</a></td></tr><tr id="cpu3103" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-8100+%40+3.60GHz&amp;id=3103">Intel Core i3-8100 @ 3.60GHz
</a></td><td>6,134</td><td>880</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-8100+%40+3.60GHz&amp;id=3103#price">27.92
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-8100+%40+3.60GHz&amp;id=3103#price">$219.68</a></td></tr><tr id="cpu3406" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-8100B+%40+3.60GHz&amp;id=3406">Intel Core i3-8100B @ 3.60GHz
</a></td><td>6,233</td><td>864</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-8100B+%40+3.60GHz&amp;id=3406#price">46.87
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-8100B+%40+3.60GHz&amp;id=3406#price">$133.00*</a></td></tr><tr id="cpu3304" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-8100T+%40+3.10GHz&amp;id=3304">Intel Core i3-8100T @ 3.10GHz
</a></td><td>5,298</td><td>985</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-8100T+%40+3.10GHz&amp;id=3304#price">37.68
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-8100T+%40+3.10GHz&amp;id=3304#price">$140.61*</a></td></tr><tr id="cpu3333" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-8109U+%40+3.00GHz&amp;id=3333">Intel Core i3-8109U @ 3.00GHz
</a></td><td>4,327</td><td>1133</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-8109U+%40+3.00GHz&amp;id=3333#price">8.65
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-8109U+%40+3.00GHz&amp;id=3333#price">$499.99*</a></td></tr><tr id="cpu3368" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-8121U+%40+2.20GHz&amp;id=3368">Intel Core i3-8121U @ 2.20GHz
</a></td><td>4,369</td><td>1125</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-8121U+%40+2.20GHz&amp;id=3368#price">15.07
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-8121U+%40+2.20GHz&amp;id=3368#price">$290.00*</a></td></tr><tr id="cpu3225" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-8130U+%40+2.20GHz&amp;id=3225">Intel Core i3-8130U @ 2.20GHz
</a></td><td>3,668</td><td>1253</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-8130U+%40+2.20GHz&amp;id=3225#price">13.05
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-8130U+%40+2.20GHz&amp;id=3225#price">$281.00*</a></td></tr><tr id="cpu3349" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-8145U+%40+2.10GHz&amp;id=3349">Intel Core i3-8145U @ 2.10GHz
</a></td><td>3,814</td><td>1226</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-8145U+%40+2.10GHz&amp;id=3349#price">13.57
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-8145U+%40+2.10GHz&amp;id=3349#price">$281.00*</a></td></tr><tr id="cpu3825" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-8145UE+%40+2.20GHz&amp;id=3825">Intel Core i3-8145UE @ 2.20GHz
</a></td><td>4,133</td><td>1167</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-8145UE+%40+2.20GHz&amp;id=3825#price">14.71
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-8145UE+%40+2.20GHz&amp;id=3825#price">$281.00*</a></td></tr><tr id="cpu3280" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-8300+%40+3.70GHz&amp;id=3280">Intel Core i3-8300 @ 3.70GHz
</a></td><td>6,341</td><td>852</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-8300+%40+3.70GHz&amp;id=3280#price">23.97
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-8300+%40+3.70GHz&amp;id=3280#price">$264.50*</a></td></tr><tr id="cpu3285" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-8300T+%40+3.20GHz&amp;id=3285">Intel Core i3-8300T @ 3.20GHz
</a></td><td>5,827</td><td>923</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-8300T+%40+3.20GHz&amp;id=3285#price">36.66
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-8300T+%40+3.20GHz&amp;id=3285#price">$158.95*</a></td></tr><tr id="cpu3102" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-8350K+%40+4.00GHz&amp;id=3102">Intel Core i3-8350K @ 4.00GHz
</a></td><td>6,897</td><td>784</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-8350K+%40+4.00GHz&amp;id=3102#price">16.46
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-8350K+%40+4.00GHz&amp;id=3102#price">$419.07</a></td></tr><tr id="cpu3479" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-9100+%40+3.60GHz&amp;id=3479">Intel Core i3-9100 @ 3.60GHz
</a></td><td>6,637</td><td>812</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-9100+%40+3.60GHz&amp;id=3479#price">39.93
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-9100+%40+3.60GHz&amp;id=3479#price">$166.20</a></td></tr><tr id="cpu3461" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-9100F+%40+3.60GHz&amp;id=3461">Intel Core i3-9100F @ 3.60GHz
</a></td><td>6,775</td><td>798</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-9100F+%40+3.60GHz&amp;id=3461#price">43.43
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-9100F+%40+3.60GHz&amp;id=3461#price">$156.00</a></td></tr><tr id="cpu3488" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-9100T+%40+3.10GHz&amp;id=3488">Intel Core i3-9100T @ 3.10GHz
</a></td><td>5,660</td><td>939</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-9100T+%40+3.10GHz&amp;id=3488#price">46.40
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-9100T+%40+3.10GHz&amp;id=3488#price">$122.00*</a></td></tr><tr id="cpu3893" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-9100TE+%40+2.20GHz&amp;id=3893">Intel Core i3-9100TE @ 2.20GHz
</a></td><td>4,501</td><td>1106</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-9100TE+%40+2.20GHz&amp;id=3893#price">36.89
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-9100TE+%40+2.20GHz&amp;id=3893#price">$122.00*</a></td></tr><tr id="cpu3510" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-9300+%40+3.70GHz&amp;id=3510">Intel Core i3-9300 @ 3.70GHz
</a></td><td>7,279</td><td>730</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-9300+%40+3.70GHz&amp;id=3510#price">37.53
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-9300+%40+3.70GHz&amp;id=3510#price">$193.95</a></td></tr><tr id="cpu3509" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-9300T+%40+3.20GHz&amp;id=3509">Intel Core i3-9300T @ 3.20GHz
</a></td><td>5,927</td><td>912</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-9300T+%40+3.20GHz&amp;id=3509#price">41.45
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-9300T+%40+3.20GHz&amp;id=3509#price">$143.00*</a></td></tr><tr id="cpu3539" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-9320+%40+3.70GHz&amp;id=3539">Intel Core i3-9320 @ 3.70GHz
</a></td><td>7,358</td><td>717</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-9320+%40+3.70GHz&amp;id=3539#price">33.49
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-9320+%40+3.70GHz&amp;id=3539#price">$219.72</a></td></tr><tr id="cpu3709" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-9350K+%40+4.00GHz&amp;id=3709">Intel Core i3-9350K @ 4.00GHz
</a></td><td>7,760</td><td>674</td><td>

<a href="cpu.php?cpu=Intel+Core+i3-9350K+%40+4.00GHz&amp;id=3709#price">26.46
</a></td><td>

<a href="cpu.php?cpu=Intel+Core+i3-9350K+%40+4.00GHz&amp;id=3709#price">$293.22*</a></td></tr><tr id="cpu3459" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-9350KF+%40+4.00GHz&amp;id=3459">Intel Core i3-9350KF @ 4.00GHz
</a></td><td>7,520</td><td>699</td><td>
<a href="cpu.php?cpu=Intel+Core+i3-9350KF+%40+4.00GHz&amp;id=3459#price">34.18
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i3-9350KF+%40+4.00GHz&amp;id=3459#price">$219.99*</a></td></tr><tr id="cpu3717" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-10100+%40+3.60GHz&amp;id=3717">Intel Core i3-10100 @ 3.60GHz
</a></td><td>8,825</td><td>595</td><td>
<a href="cpu.php?cpu=Intel+Core+i3-10100+%40+3.60GHz&amp;id=3717#price">52.24
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i3-10100+%40+3.60GHz&amp;id=3717#price">$168.95</a></td></tr><tr id="cpu3863" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-10100F+%40+3.60GHz&amp;id=3863">Intel Core i3-10100F @ 3.60GHz
</a></td><td>8,789</td><td>598</td><td>
<a href="cpu.php?cpu=Intel+Core+i3-10100F+%40+3.60GHz&amp;id=3863#price">93.51
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i3-10100F+%40+3.60GHz&amp;id=3863#price">$93.99</a></td></tr><tr id="cpu3796" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-10100T+%40+3.00GHz&amp;id=3796">Intel Core i3-10100T @ 3.00GHz
</a></td><td>7,469</td><td>703</td><td>
<a href="cpu.php?cpu=Intel+Core+i3-10100T+%40+3.00GHz&amp;id=3796#price">61.22
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i3-10100T+%40+3.00GHz&amp;id=3796#price">$122.00*</a></td></tr><tr id="cpu4259" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-10105+%40+3.70GHz&amp;id=4259">Intel Core i3-10105 @ 3.70GHz
</a></td><td>8,792</td><td>597</td><td>
<a href="cpu.php?cpu=Intel+Core+i3-10105+%40+3.70GHz&amp;id=4259#price">63.25
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i3-10105+%40+3.70GHz&amp;id=4259#price">$139.00</a></td></tr><tr id="cpu4175" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-10105F+%40+3.70GHz&amp;id=4175">Intel Core i3-10105F @ 3.70GHz
</a></td><td>9,118</td><td>576</td><td>
<a href="cpu.php?cpu=Intel+Core+i3-10105F+%40+3.70GHz&amp;id=4175#price">82.90
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i3-10105F+%40+3.70GHz&amp;id=4175#price">$109.99</a></td></tr><tr id="cpu4401" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-10105T+%40+3.00GHz&amp;id=4401">Intel Core i3-10105T @ 3.00GHz
</a></td><td>7,661</td><td>687</td><td>
<a href="cpu.php?cpu=Intel+Core+i3-10105T+%40+3.00GHz&amp;id=4401#price">62.79
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i3-10105T+%40+3.00GHz&amp;id=4401#price">$122.00*</a></td></tr><tr id="cpu3573" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-10110U+%40+2.10GHz&amp;id=3573">Intel Core i3-10110U @ 2.10GHz
</a></td><td>4,063</td><td>1178</td><td>
<a href="cpu.php?cpu=Intel+Core+i3-10110U+%40+2.10GHz&amp;id=3573#price">9.36
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i3-10110U+%40+2.10GHz&amp;id=3573#price">$434.17*</a></td></tr><tr id="cpu3707" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-10110Y+%40+1.00GHz&amp;id=3707">Intel Core i3-10110Y @ 1.00GHz
</a></td><td>3,444</td><td>1302</td><td>
<a href="cpu.php?cpu=Intel+Core+i3-10110Y+%40+1.00GHz&amp;id=3707#price">12.00
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i3-10110Y+%40+1.00GHz&amp;id=3707#price">$287.00*</a></td></tr><tr id="cpu3765" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-10300+%40+3.70GHz&amp;id=3765">Intel Core i3-10300 @ 3.70GHz
</a></td><td>9,344</td><td>561</td><td>
<a href="cpu.php?cpu=Intel+Core+i3-10300+%40+3.70GHz&amp;id=3765#price">46.72
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i3-10300+%40+3.70GHz&amp;id=3765#price">$199.99</a></td></tr><tr id="cpu3838" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-10300T+%40+3.00GHz&amp;id=3838">Intel Core i3-10300T @ 3.00GHz
</a></td><td>8,247</td><td>633</td><td>
<a href="cpu.php?cpu=Intel+Core+i3-10300T+%40+3.00GHz&amp;id=3838#price">57.67
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i3-10300T+%40+3.00GHz&amp;id=3838#price">$143.00*</a></td></tr><tr id="cpu4369" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-10305+%40+3.80GHz&amp;id=4369">Intel Core i3-10305 @ 3.80GHz
</a></td><td>9,689</td><td>542</td><td>
<a href="cpu.php?cpu=Intel+Core+i3-10305+%40+3.80GHz&amp;id=4369#price">44.10
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i3-10305+%40+3.80GHz&amp;id=4369#price">$219.72</a></td></tr><tr id="cpu4375" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-10305T+%40+3.00GHz&amp;id=4375">Intel Core i3-10305T @ 3.00GHz
</a></td><td>8,136</td><td>640</td><td>
<a href="cpu.php?cpu=Intel+Core+i3-10305T+%40+3.00GHz&amp;id=4375#price">56.90
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i3-10305T+%40+3.00GHz&amp;id=4375#price">$143.00*</a></td></tr><tr id="cpu3890" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-10320+%40+3.80GHz&amp;id=3890">Intel Core i3-10320 @ 3.80GHz
</a></td><td>10,127</td><td>521</td><td>
<a href="cpu.php?cpu=Intel+Core+i3-10320+%40+3.80GHz&amp;id=3890#price">42.20
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i3-10320+%40+3.80GHz&amp;id=3890#price">$239.99</a></td></tr><tr id="cpu3438" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i3-21050+%40+3.10GHz&amp;id=3438">Intel Core i3-21050 @ 3.10GHz
</a></td><td>2,193</td><td>1758</td><td>NA</td><td>NA</td></tr><tr id="cpu1659" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5+750S+%40+2.40GHz&amp;id=1659">Intel Core i5 750S @ 2.40GHz
</a></td><td>1,326</td><td>2282</td><td>
<a href="cpu.php?cpu=Intel+Core+i5+750S+%40+2.40GHz&amp;id=1659#price">6.31
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5+750S+%40+2.40GHz&amp;id=1659#price">$210.19</a></td></tr><tr id="cpu2007" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5+E+520+%40+2.40GHz&amp;id=2007">Intel Core i5 E 520 @ 2.40GHz
</a></td><td>1,619</td><td>2102</td><td>NA</td><td>NA</td></tr><tr id="cpu2873" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-7Y54+%40+1.20GHz&amp;id=2873">Intel Core i5-7Y54 @ 1.20GHz
</a></td><td>2,820</td><td>1502</td><td>NA</td><td>NA</td></tr><tr id="cpu2956" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-7Y57+%40+1.20GHz&amp;id=2956">Intel Core i5-7Y57 @ 1.20GHz
</a></td><td>2,996</td><td>1437</td><td>NA</td><td>NA</td></tr><tr id="cpu775" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-430M+%40+2.27GHz&amp;id=775">Intel Core i5-430M @ 2.27GHz
</a></td><td>1,199</td><td>2380</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-430M+%40+2.27GHz&amp;id=775#price">9.23
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-430M+%40+2.27GHz&amp;id=775#price">$129.95*</a></td></tr><tr id="cpu783" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-430UM+%40+1.20GHz&amp;id=783">Intel Core i5-430UM @ 1.20GHz
</a></td><td>836</td><td>2696</td><td>NA</td><td>NA</td></tr><tr id="cpu3" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-450M+%40+2.40GHz&amp;id=3">Intel Core i5-450M @ 2.40GHz
</a></td><td>1,216</td><td>2367</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-450M+%40+2.40GHz&amp;id=3#price">38.06
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-450M+%40+2.40GHz&amp;id=3#price">$31.95*</a></td></tr><tr id="cpu776" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-460M+%40+2.53GHz&amp;id=776">Intel Core i5-460M @ 2.53GHz
</a></td><td>1,291</td><td>2307</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-460M+%40+2.53GHz&amp;id=776#price">19.87
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-460M+%40+2.53GHz&amp;id=776#price">$64.95*</a></td></tr><tr id="cpu784" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-470UM+%40+1.33GHz&amp;id=784">Intel Core i5-470UM @ 1.33GHz
</a></td><td>755</td><td>2777</td><td>NA</td><td>NA</td></tr><tr id="cpu777" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-480M+%40+2.67GHz&amp;id=777">Intel Core i5-480M @ 2.67GHz
</a></td><td>1,299</td><td>2302</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-480M+%40+2.67GHz&amp;id=777#price">16.12
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-480M+%40+2.67GHz&amp;id=777#price">$80.60*</a></td></tr><tr id="cpu778" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-520M+%40+2.40GHz&amp;id=778">Intel Core i5-520M @ 2.40GHz
</a></td><td>1,680</td><td>2053</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-520M+%40+2.40GHz&amp;id=778#price">46.65
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-520M+%40+2.40GHz&amp;id=778#price">$36.02</a></td></tr><tr id="cpu785" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-520UM+%40+1.07GHz&amp;id=785">Intel Core i5-520UM @ 1.07GHz
</a></td><td>860</td><td>2673</td><td>NA</td><td>NA</td></tr><tr id="cpu779" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-540M+%40+2.53GHz&amp;id=779">Intel Core i5-540M @ 2.53GHz
</a></td><td>1,755</td><td>2004</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-540M+%40+2.53GHz&amp;id=779#price">35.82
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-540M+%40+2.53GHz&amp;id=779#price">$48.99*</a></td></tr><tr id="cpu786" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-540UM+%40+1.20GHz&amp;id=786">Intel Core i5-540UM @ 1.20GHz
</a></td><td>1,002</td><td>2550</td><td>NA</td><td>NA</td></tr><tr id="cpu780" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-560M+%40+2.67GHz&amp;id=780">Intel Core i5-560M @ 2.67GHz
</a></td><td>1,803</td><td>1979</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-560M+%40+2.67GHz&amp;id=780#price">22.55
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-560M+%40+2.67GHz&amp;id=780#price">$79.97*</a></td></tr><tr id="cpu787" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-560UM+%40+1.33GHz&amp;id=787">Intel Core i5-560UM @ 1.33GHz
</a></td><td>1,015</td><td>2535</td><td>NA</td><td>NA</td></tr><tr id="cpu781" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-580M+%40+2.67GHz&amp;id=781">Intel Core i5-580M @ 2.67GHz
</a></td><td>1,919</td><td>1909</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-580M+%40+2.67GHz&amp;id=781#price">19.20
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-580M+%40+2.67GHz&amp;id=781#price">$99.95*</a></td></tr><tr id="cpu767" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-650+%40+3.20GHz&amp;id=767">Intel Core i5-650 @ 3.20GHz
</a></td><td>2,214</td><td>1748</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-650+%40+3.20GHz&amp;id=767#price">61.52
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-650+%40+3.20GHz&amp;id=767#price">$35.99</a></td></tr><tr id="cpu774" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-655K+%40+3.20GHz&amp;id=774">Intel Core i5-655K @ 3.20GHz
</a></td><td>2,017</td><td>1857</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-655K+%40+3.20GHz&amp;id=774#price">25.87
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-655K+%40+3.20GHz&amp;id=774#price">$77.99</a></td></tr><tr id="cpu768" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-660+%40+3.33GHz&amp;id=768">Intel Core i5-660 @ 3.33GHz
</a></td><td>2,339</td><td>1681</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-660+%40+3.33GHz&amp;id=768#price">109.56
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-660+%40+3.33GHz&amp;id=768#price">$21.35*</a></td></tr><tr id="cpu769" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-661+%40+3.33GHz&amp;id=769">Intel Core i5-661 @ 3.33GHz
</a></td><td>2,427</td><td>1644</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-661+%40+3.33GHz&amp;id=769#price">12.12
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-661+%40+3.33GHz&amp;id=769#price">$200.19</a></td></tr><tr id="cpu770" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-670+%40+3.47GHz&amp;id=770">Intel Core i5-670 @ 3.47GHz
</a></td><td>2,483</td><td>1617</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-670+%40+3.47GHz&amp;id=770#price">6.15
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-670+%40+3.47GHz&amp;id=770#price">$403.50*</a></td></tr><tr id="cpu771" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-680+%40+3.60GHz&amp;id=771">Intel Core i5-680 @ 3.60GHz
</a></td><td>2,593</td><td>1580</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-680+%40+3.60GHz&amp;id=771#price">39.29
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-680+%40+3.60GHz&amp;id=771#price">$65.99</a></td></tr><tr id="cpu772" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-750+%40+2.67GHz&amp;id=772">Intel Core i5-750 @ 2.67GHz
</a></td><td>2,471</td><td>1623</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-750+%40+2.67GHz&amp;id=772#price">27.46
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-750+%40+2.67GHz&amp;id=772#price">$90.00</a></td></tr><tr id="cpu773" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-760+%40+2.80GHz&amp;id=773">Intel Core i5-760 @ 2.80GHz
</a></td><td>2,555</td><td>1593</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-760+%40+2.80GHz&amp;id=773#price">9.64
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-760+%40+2.80GHz&amp;id=773#price">$265.00</a></td></tr><tr id="cpu782" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-760S+%40+2.53GHz&amp;id=782">Intel Core i5-760S @ 2.53GHz
</a></td><td>5,440</td><td>965</td><td>NA</td><td>NA</td></tr><tr id="cpu3695" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-1030NG7+%40+1.10GHz&amp;id=3695">Intel Core i5-1030NG7 @ 1.10GHz
</a></td><td>6,112</td><td>884</td><td>NA</td><td>NA</td></tr><tr id="cpu3558" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-1035G1+%40+1.00GHz&amp;id=3558">Intel Core i5-1035G1 @ 1.00GHz
</a></td><td>7,870</td><td>664</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-1035G1+%40+1.00GHz&amp;id=3558#price">26.50
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-1035G1+%40+1.00GHz&amp;id=3558#price">$297.00*</a></td></tr><tr id="cpu3581" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-1035G4+%40+1.10GHz&amp;id=3581">Intel Core i5-1035G4 @ 1.10GHz
</a></td><td>8,286</td><td>627</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-1035G4+%40+1.10GHz&amp;id=3581#price">26.82
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-1035G4+%40+1.10GHz&amp;id=3581#price">$309.00*</a></td></tr><tr id="cpu3582" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-1035G7+%40+1.20GHz&amp;id=3582">Intel Core i5-1035G7 @ 1.20GHz
</a></td><td>8,426</td><td>616</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-1035G7+%40+1.20GHz&amp;id=3582#price">26.33
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-1035G7+%40+1.20GHz&amp;id=3582#price">$320.00*</a></td></tr><tr id="cpu3723" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-1038NG7+%40+2.00GHz&amp;id=3723">Intel Core i5-1038NG7 @ 2.00GHz
</a></td><td>9,785</td><td>537</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-1038NG7+%40+2.00GHz&amp;id=3723#price">30.58
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-1038NG7+%40+2.00GHz&amp;id=3723#price">$320.00*</a></td></tr><tr id="cpu4049" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-1130G7+%40+1.10GHz&amp;id=4049">Intel Core i5-1130G7 @ 1.10GHz
</a></td><td>10,522</td><td>500</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-1130G7+%40+1.10GHz&amp;id=4049#price">34.05
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-1130G7+%40+1.10GHz&amp;id=4049#price">$309.00*</a></td></tr><tr id="cpu3830" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-1135G7+%40+2.40GHz&amp;id=3830">Intel Core i5-1135G7 @ 2.40GHz
</a></td><td>10,065</td><td>524</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-1135G7+%40+2.40GHz&amp;id=3830#price">32.57
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-1135G7+%40+2.40GHz&amp;id=3830#price">$309.00*</a></td></tr><tr id="cpu4144" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-1140G7+%40+1.10GHz&amp;id=4144">Intel Core i5-1140G7 @ 1.10GHz
</a></td><td>10,560</td><td>499</td><td>NA</td><td>NA</td></tr><tr id="cpu3922" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-1145G7+%40+2.60GHz&amp;id=3922">Intel Core i5-1145G7 @ 2.60GHz
</a></td><td>10,896</td><td>484</td><td>NA</td><td>NA</td></tr><tr id="cpu4396" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-1145G7E+%40+2.60GHz&amp;id=4396">Intel Core i5-1145G7E @ 2.60GHz
</a></td><td>11,488</td><td>458</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-1145G7E+%40+2.60GHz&amp;id=4396#price">36.82
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-1145G7E+%40+2.60GHz&amp;id=4396#price">$312.00*</a></td></tr><tr id="cpu788" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-2300+%40+2.80GHz&amp;id=788">Intel Core i5-2300 @ 2.80GHz
</a></td><td>3,372</td><td>1319</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-2300+%40+2.80GHz&amp;id=788#price">112.43
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-2300+%40+2.80GHz&amp;id=788#price">$29.99*</a></td></tr><tr id="cpu789" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-2310+%40+2.90GHz&amp;id=789">Intel Core i5-2310 @ 2.90GHz
</a></td><td>3,538</td><td>1282</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-2310+%40+2.90GHz&amp;id=789#price">45.50
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-2310+%40+2.90GHz&amp;id=789#price">$77.77</a></td></tr><tr id="cpu790" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-2320+%40+3.00GHz&amp;id=790">Intel Core i5-2320 @ 3.00GHz
</a></td><td>3,629</td><td>1262</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-2320+%40+3.00GHz&amp;id=790#price">34.90
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-2320+%40+3.00GHz&amp;id=790#price">$103.99</a></td></tr><tr id="cpu791" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-2380P+%40+3.10GHz&amp;id=791">Intel Core i5-2380P @ 3.10GHz
</a></td><td>3,797</td><td>1228</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-2380P+%40+3.10GHz&amp;id=791#price">21.84
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-2380P+%40+3.10GHz&amp;id=791#price">$173.86</a></td></tr><tr id="cpu792" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-2390T+%40+2.70GHz&amp;id=792">Intel Core i5-2390T @ 2.70GHz
</a></td><td>2,364</td><td>1667</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-2390T+%40+2.70GHz&amp;id=792#price">23.66
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-2390T+%40+2.70GHz&amp;id=792#price">$99.90*</a></td></tr><tr id="cpu793" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-2400+%40+3.10GHz&amp;id=793">Intel Core i5-2400 @ 3.10GHz
</a></td><td>3,819</td><td>1222</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-2400+%40+3.10GHz&amp;id=793#price">64.87
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-2400+%40+3.10GHz&amp;id=793#price">$58.87</a></td></tr><tr id="cpu794" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-2400S+%40+2.50GHz&amp;id=794">Intel Core i5-2400S @ 2.50GHz
</a></td><td>3,138</td><td>1394</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-2400S+%40+2.50GHz&amp;id=794#price">18.24
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-2400S+%40+2.50GHz&amp;id=794#price">$172.00</a></td></tr><tr id="cpu795" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-2405S+%40+2.50GHz&amp;id=795">Intel Core i5-2405S @ 2.50GHz
</a></td><td>2,980</td><td>1442</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-2405S+%40+2.50GHz&amp;id=795#price">14.33
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-2405S+%40+2.50GHz&amp;id=795#price">$208.00*</a></td></tr><tr id="cpu796" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-2410M+%40+2.30GHz&amp;id=796">Intel Core i5-2410M @ 2.30GHz
</a></td><td>1,974</td><td>1880</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-2410M+%40+2.30GHz&amp;id=796#price">46.86
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-2410M+%40+2.30GHz&amp;id=796#price">$42.12*</a></td></tr><tr id="cpu797" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-2415M+%40+2.30GHz&amp;id=797">Intel Core i5-2415M @ 2.30GHz
</a></td><td>2,031</td><td>1845</td><td>NA</td><td>NA</td></tr><tr id="cpu798" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-2430M+%40+2.40GHz&amp;id=798">Intel Core i5-2430M @ 2.40GHz
</a></td><td>2,011</td><td>1861</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-2430M+%40+2.40GHz&amp;id=798#price">27.54
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-2430M+%40+2.40GHz&amp;id=798#price">$73.02*</a></td></tr><tr id="cpu799" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-2435M+%40+2.40GHz&amp;id=799">Intel Core i5-2435M @ 2.40GHz
</a></td><td>1,964</td><td>1882</td><td>NA</td><td>NA</td></tr><tr id="cpu800" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-2450M+%40+2.50GHz&amp;id=800">Intel Core i5-2450M @ 2.50GHz
</a></td><td>2,046</td><td>1834</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-2450M+%40+2.50GHz&amp;id=800#price">27.64
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-2450M+%40+2.50GHz&amp;id=800#price">$74.02</a></td></tr><tr id="cpu801" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-2450P+%40+3.20GHz&amp;id=801">Intel Core i5-2450P @ 3.20GHz
</a></td><td>3,974</td><td>1199</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-2450P+%40+3.20GHz&amp;id=801#price">21.96
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-2450P+%40+3.20GHz&amp;id=801#price">$180.99</a></td></tr><tr id="cpu802" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-2467M+%40+1.60GHz&amp;id=802">Intel Core i5-2467M @ 1.60GHz
</a></td><td>1,475</td><td>2190</td><td>NA</td><td>NA</td></tr><tr id="cpu803" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-2500+%40+3.30GHz&amp;id=803">Intel Core i5-2500 @ 3.30GHz
</a></td><td>4,082</td><td>1175</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-2500+%40+3.30GHz&amp;id=803#price">69.18
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-2500+%40+3.30GHz&amp;id=803#price">$59.00</a></td></tr><tr id="cpu804" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-2500K+%40+3.30GHz&amp;id=804">Intel Core i5-2500K @ 3.30GHz
</a></td><td>4,087</td><td>1174</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-2500K+%40+3.30GHz&amp;id=804#price">40.89
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-2500K+%40+3.30GHz&amp;id=804#price">$99.96</a></td></tr><tr id="cpu805" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-2500S+%40+2.70GHz&amp;id=805">Intel Core i5-2500S @ 2.70GHz
</a></td><td>3,415</td><td>1308</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-2500S+%40+2.70GHz&amp;id=805#price">61.70
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-2500S+%40+2.70GHz&amp;id=805#price">$55.34*</a></td></tr><tr id="cpu806" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-2500T+%40+2.30GHz&amp;id=806">Intel Core i5-2500T @ 2.30GHz
</a></td><td>2,852</td><td>1490</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-2500T+%40+2.30GHz&amp;id=806#price">31.70
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-2500T+%40+2.30GHz&amp;id=806#price">$89.99*</a></td></tr><tr id="cpu807" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-2510E+%40+2.50GHz&amp;id=807">Intel Core i5-2510E @ 2.50GHz
</a></td><td>1,889</td><td>1933</td><td>NA</td><td>NA</td></tr><tr id="cpu808" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-2515E+%40+2.50GHz&amp;id=808">Intel Core i5-2515E @ 2.50GHz
</a></td><td>1,882</td><td>1937</td><td>NA</td><td>NA</td></tr><tr id="cpu809" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-2520M+%40+2.50GHz&amp;id=809">Intel Core i5-2520M @ 2.50GHz
</a></td><td>2,238</td><td>1730</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-2520M+%40+2.50GHz&amp;id=809#price">53.16
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-2520M+%40+2.50GHz&amp;id=809#price">$42.10*</a></td></tr><tr id="cpu810" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-2537M+%40+1.40GHz&amp;id=810">Intel Core i5-2537M @ 1.40GHz
</a></td><td>1,007</td><td>2542</td><td>NA</td><td>NA</td></tr><tr id="cpu812" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-2540M+%40+2.60GHz&amp;id=812">Intel Core i5-2540M @ 2.60GHz
</a></td><td>2,296</td><td>1699</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-2540M+%40+2.60GHz&amp;id=812#price">47.81
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-2540M+%40+2.60GHz&amp;id=812#price">$48.02</a></td></tr><tr id="cpu813" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-2550K+%40+3.40GHz&amp;id=813">Intel Core i5-2550K @ 3.40GHz
</a></td><td>4,180</td><td>1154</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-2550K+%40+3.40GHz&amp;id=813#price">32.21
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-2550K+%40+3.40GHz&amp;id=813#price">$129.77</a></td></tr><tr id="cpu814" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-2557M+%40+1.70GHz&amp;id=814">Intel Core i5-2557M @ 1.70GHz
</a></td><td>1,725</td><td>2021</td><td>NA</td><td>NA</td></tr><tr id="cpu2282" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-2560M+%40+2.70GHz&amp;id=2282">Intel Core i5-2560M @ 2.70GHz
</a></td><td>2,131</td><td>1791</td><td>NA</td><td>NA</td></tr><tr id="cpu2242" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-3170K+%40+3.20GHz&amp;id=2242">Intel Core i5-3170K @ 3.20GHz
</a></td><td>8,882</td><td>591</td><td>NA</td><td>NA</td></tr><tr id="cpu815" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-3210M+%40+2.50GHz&amp;id=815">Intel Core i5-3210M @ 2.50GHz
</a></td><td>2,438</td><td>1639</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3210M+%40+2.50GHz&amp;id=815#price">39.31
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3210M+%40+2.50GHz&amp;id=815#price">$62.02</a></td></tr><tr id="cpu1849" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-3230M+%40+2.60GHz&amp;id=1849">Intel Core i5-3230M @ 2.60GHz
</a></td><td>2,516</td><td>1607</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3230M+%40+2.60GHz&amp;id=1849#price">25.16
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3230M+%40+2.60GHz&amp;id=1849#price">$99.99</a></td></tr><tr id="cpu816" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-3317U+%40+1.70GHz&amp;id=816">Intel Core i5-3317U @ 1.70GHz
</a></td><td>1,947</td><td>1894</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3317U+%40+1.70GHz&amp;id=816#price">8.65
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3317U+%40+1.70GHz&amp;id=816#price">$225.00*</a></td></tr><tr id="cpu817" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-3320M+%40+2.60GHz&amp;id=817">Intel Core i5-3320M @ 2.60GHz
</a></td><td>2,628</td><td>1569</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3320M+%40+2.60GHz&amp;id=817#price">62.57
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3320M+%40+2.60GHz&amp;id=817#price">$42.00</a></td></tr><tr id="cpu1475" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-3330+%40+3.00GHz&amp;id=1475">Intel Core i5-3330 @ 3.00GHz
</a></td><td>4,052</td><td>1182</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3330+%40+3.00GHz&amp;id=1475#price">34.72
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3330+%40+3.00GHz&amp;id=1475#price">$116.69</a></td></tr><tr id="cpu1794" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-3330S+%40+2.70GHz&amp;id=1794">Intel Core i5-3330S @ 2.70GHz
</a></td><td>3,859</td><td>1214</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3330S+%40+2.70GHz&amp;id=1794#price">70.32
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3330S+%40+2.70GHz&amp;id=1794#price">$54.88*</a></td></tr><tr id="cpu1811" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-3335S+%40+2.70GHz&amp;id=1811">Intel Core i5-3335S @ 2.70GHz
</a></td><td>3,754</td><td>1234</td><td>NA</td><td>NA</td></tr><tr id="cpu1850" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-3337U+%40+1.80GHz&amp;id=1850">Intel Core i5-3337U @ 1.80GHz
</a></td><td>2,039</td><td>1840</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3337U+%40+1.80GHz&amp;id=1850#price">9.06
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3337U+%40+1.80GHz&amp;id=1850#price">$225.00*</a></td></tr><tr id="cpu1984" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-3339Y+%40+1.50GHz&amp;id=1984">Intel Core i5-3339Y @ 1.50GHz
</a></td><td>1,402</td><td>2235</td><td>NA</td><td>NA</td></tr><tr id="cpu2071" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-3340+%40+3.10GHz&amp;id=2071">Intel Core i5-3340 @ 3.10GHz
</a></td><td>4,149</td><td>1163</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3340+%40+3.10GHz&amp;id=2071#price">46.62
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3340+%40+3.10GHz&amp;id=2071#price">$88.99*</a></td></tr><tr id="cpu1889" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-3340M+%40+2.70GHz&amp;id=1889">Intel Core i5-3340M @ 2.70GHz
</a></td><td>2,649</td><td>1560</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3340M+%40+2.70GHz&amp;id=1889#price">37.88
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3340M+%40+2.70GHz&amp;id=1889#price">$69.95*</a></td></tr><tr id="cpu2090" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-3340S+%40+2.80GHz&amp;id=2090">Intel Core i5-3340S @ 2.80GHz
</a></td><td>4,055</td><td>1180</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3340S+%40+2.80GHz&amp;id=2090#price">12.70
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3340S+%40+2.80GHz&amp;id=2090#price">$319.19</a></td></tr><tr id="cpu1476" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-3350P+%40+3.10GHz&amp;id=1476">Intel Core i5-3350P @ 3.10GHz
</a></td><td>4,229</td><td>1148</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3350P+%40+3.10GHz&amp;id=1476#price">17.60
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3350P+%40+3.10GHz&amp;id=1476#price">$240.19</a></td></tr><tr id="cpu818" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-3360M+%40+2.80GHz&amp;id=818">Intel Core i5-3360M @ 2.80GHz
</a></td><td>2,870</td><td>1483</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3360M+%40+2.80GHz&amp;id=818#price">36.78
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3360M+%40+2.80GHz&amp;id=818#price">$78.02</a></td></tr><tr id="cpu1973" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-3380M+%40+2.90GHz&amp;id=1973">Intel Core i5-3380M @ 2.90GHz
</a></td><td>3,006</td><td>1433</td><td>NA</td><td>NA</td></tr><tr id="cpu819" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-3427U+%40+1.80GHz&amp;id=819">Intel Core i5-3427U @ 1.80GHz
</a></td><td>2,292</td><td>1701</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3427U+%40+1.80GHz&amp;id=819#price">5.46
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3427U+%40+1.80GHz&amp;id=819#price">$420.05*</a></td></tr><tr id="cpu1828" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-3437U+%40+1.90GHz&amp;id=1828">Intel Core i5-3437U @ 1.90GHz
</a></td><td>2,259</td><td>1716</td><td>NA</td><td>NA</td></tr><tr id="cpu2050" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-3439Y+%40+1.50GHz&amp;id=2050">Intel Core i5-3439Y @ 1.50GHz
</a></td><td>1,907</td><td>1917</td><td>NA</td><td>NA</td></tr><tr id="cpu820" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-3450+%40+3.10GHz&amp;id=820">Intel Core i5-3450 @ 3.10GHz
</a></td><td>4,473</td><td>1111</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3450+%40+3.10GHz&amp;id=820#price">47.13
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3450+%40+3.10GHz&amp;id=820#price">$94.92</a></td></tr><tr id="cpu821" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-3450S+%40+2.80GHz&amp;id=821">Intel Core i5-3450S @ 2.80GHz
</a></td><td>4,266</td><td>1143</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3450S+%40+2.80GHz&amp;id=821#price">44.91
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3450S+%40+2.80GHz&amp;id=821#price">$95.00</a></td></tr><tr id="cpu822" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-3470+%40+3.20GHz&amp;id=822">Intel Core i5-3470 @ 3.20GHz
</a></td><td>4,637</td><td>1081</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3470+%40+3.20GHz&amp;id=822#price">23.19
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3470+%40+3.20GHz&amp;id=822#price">$200.00</a></td></tr><tr id="cpu823" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-3470S+%40+2.90GHz&amp;id=823">Intel Core i5-3470S @ 2.90GHz
</a></td><td>4,306</td><td>1136</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3470S+%40+2.90GHz&amp;id=823#price">20.51
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3470S+%40+2.90GHz&amp;id=823#price">$210.00</a></td></tr><tr id="cpu824" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-3470T+%40+2.90GHz&amp;id=824">Intel Core i5-3470T @ 2.90GHz
</a></td><td>2,942</td><td>1457</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3470T+%40+2.90GHz&amp;id=824#price">10.90
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3470T+%40+2.90GHz&amp;id=824#price">$269.95*</a></td></tr><tr id="cpu1775" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-3475S+%40+2.90GHz&amp;id=1775">Intel Core i5-3475S @ 2.90GHz
</a></td><td>4,116</td><td>1170</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3475S+%40+2.90GHz&amp;id=1775#price">28.68
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3475S+%40+2.90GHz&amp;id=1775#price">$143.50*</a></td></tr><tr id="cpu825" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-3550+%40+3.30GHz&amp;id=825">Intel Core i5-3550 @ 3.30GHz
</a></td><td>4,760</td><td>1066</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3550+%40+3.30GHz&amp;id=825#price">25.33
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3550+%40+3.30GHz&amp;id=825#price">$187.91</a></td></tr><tr id="cpu826" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-3550S+%40+3.00GHz&amp;id=826">Intel Core i5-3550S @ 3.00GHz
</a></td><td>4,494</td><td>1107</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3550S+%40+3.00GHz&amp;id=826#price">14.05
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3550S+%40+3.00GHz&amp;id=826#price">$319.95*</a></td></tr><tr id="cpu827" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-3570+%40+3.40GHz&amp;id=827">Intel Core i5-3570 @ 3.40GHz
</a></td><td>4,874</td><td>1045</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3570+%40+3.40GHz&amp;id=827#price">88.64
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3570+%40+3.40GHz&amp;id=827#price">$54.99</a></td></tr><tr id="cpu828" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-3570K+%40+3.40GHz&amp;id=828">Intel Core i5-3570K @ 3.40GHz
</a></td><td>4,913</td><td>1039</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3570K+%40+3.40GHz&amp;id=828#price">71.22
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3570K+%40+3.40GHz&amp;id=828#price">$68.98</a></td></tr><tr id="cpu829" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-3570S+%40+3.10GHz&amp;id=829">Intel Core i5-3570S @ 3.10GHz
</a></td><td>4,579</td><td>1091</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3570S+%40+3.10GHz&amp;id=829#price">65.43
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-3570S+%40+3.10GHz&amp;id=829#price">$69.99*</a></td></tr><tr id="cpu1477" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-3570T+%40+2.30GHz&amp;id=1477">Intel Core i5-3570T @ 2.30GHz
</a></td><td>4,168</td><td>1156</td><td>NA</td><td>NA</td></tr><tr id="cpu1859" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-3610ME+%40+2.70GHz&amp;id=1859">Intel Core i5-3610ME @ 2.70GHz
</a></td><td>2,623</td><td>1570</td><td>NA</td><td>NA</td></tr><tr id="cpu2142" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4200H+%40+2.80GHz&amp;id=2142">Intel Core i5-4200H @ 2.80GHz
</a></td><td>3,086</td><td>1412</td><td>NA</td><td>NA</td></tr><tr id="cpu2016" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4200M+%40+2.50GHz&amp;id=2016">Intel Core i5-4200M @ 2.50GHz
</a></td><td>2,791</td><td>1511</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4200M+%40+2.50GHz&amp;id=2016#price">31.38
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4200M+%40+2.50GHz&amp;id=2016#price">$88.95*</a></td></tr><tr id="cpu1947" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4200U+%40+1.60GHz&amp;id=1947">Intel Core i5-4200U @ 1.60GHz
</a></td><td>2,190</td><td>1766</td><td>NA</td><td>NA</td></tr><tr id="cpu2101" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4200Y+%40+1.40GHz&amp;id=2101">Intel Core i5-4200Y @ 1.40GHz
</a></td><td>1,558</td><td>2139</td><td>NA</td><td>NA</td></tr><tr id="cpu2162" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4202Y+%40+1.60GHz&amp;id=2162">Intel Core i5-4202Y @ 1.60GHz
</a></td><td>1,670</td><td>2062</td><td>NA</td><td>NA</td></tr><tr id="cpu2348" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4210H+%40+2.90GHz&amp;id=2348">Intel Core i5-4210H @ 2.90GHz
</a></td><td>2,947</td><td>1453</td><td>NA</td><td>NA</td></tr><tr id="cpu2245" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4210M+%40+2.60GHz&amp;id=2245">Intel Core i5-4210M @ 2.60GHz
</a></td><td>2,934</td><td>1463</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4210M+%40+2.60GHz&amp;id=2245#price">9.47
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4210M+%40+2.60GHz&amp;id=2245#price">$309.95*</a></td></tr><tr id="cpu2259" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4210U+%40+1.70GHz&amp;id=2259">Intel Core i5-4210U @ 1.70GHz
</a></td><td>2,290</td><td>1702</td><td>NA</td><td>NA</td></tr><tr id="cpu2032" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4210Y+%40+1.50GHz&amp;id=2032">Intel Core i5-4210Y @ 1.50GHz
</a></td><td>1,527</td><td>2158</td><td>NA</td><td>NA</td></tr><tr id="cpu2532" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4220Y+%40+1.60GHz&amp;id=2532">Intel Core i5-4220Y @ 1.60GHz
</a></td><td>1,591</td><td>2126</td><td>NA</td><td>NA</td></tr><tr id="cpu3171" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4230U+%40+1.90GHz&amp;id=3171">Intel Core i5-4230U @ 1.90GHz
</a></td><td>1,853</td><td>1949</td><td>NA</td><td>NA</td></tr><tr id="cpu1944" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4250U+%40+1.30GHz&amp;id=1944">Intel Core i5-4250U @ 1.30GHz
</a></td><td>2,193</td><td>1759</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4250U+%40+1.30GHz&amp;id=1944#price">6.28
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4250U+%40+1.30GHz&amp;id=1944#price">$349.00*</a></td></tr><tr id="cpu2069" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4258U+%40+2.40GHz&amp;id=2069">Intel Core i5-4258U @ 2.40GHz
</a></td><td>2,482</td><td>1618</td><td>NA</td><td>NA</td></tr><tr id="cpu2238" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4260U+%40+1.40GHz&amp;id=2238">Intel Core i5-4260U @ 1.40GHz
</a></td><td>2,420</td><td>1646</td><td>NA</td><td>NA</td></tr><tr id="cpu2312" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4278U+%40+2.60GHz&amp;id=2312">Intel Core i5-4278U @ 2.60GHz
</a></td><td>2,820</td><td>1501</td><td>NA</td><td>NA</td></tr><tr id="cpu2074" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4288U+%40+2.60GHz&amp;id=2074">Intel Core i5-4288U @ 2.60GHz
</a></td><td>2,554</td><td>1594</td><td>NA</td><td>NA</td></tr><tr id="cpu2095" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4300M+%40+2.60GHz&amp;id=2095">Intel Core i5-4300M @ 2.60GHz
</a></td><td>3,008</td><td>1431</td><td>NA</td><td>NA</td></tr><tr id="cpu2054" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4300U+%40+1.90GHz&amp;id=2054">Intel Core i5-4300U @ 1.90GHz
</a></td><td>2,496</td><td>1613</td><td>NA</td><td>NA</td></tr><tr id="cpu2089" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4300Y+%40+1.60GHz&amp;id=2089">Intel Core i5-4300Y @ 1.60GHz
</a></td><td>1,443</td><td>2206</td><td>NA</td><td>NA</td></tr><tr id="cpu2144" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4302Y+%40+1.60GHz&amp;id=2144">Intel Core i5-4302Y @ 1.60GHz
</a></td><td>1,817</td><td>1973</td><td>NA</td><td>NA</td></tr><tr id="cpu2428" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4308U+%40+2.80GHz&amp;id=2428">Intel Core i5-4308U @ 2.80GHz
</a></td><td>3,003</td><td>1436</td><td>NA</td><td>NA</td></tr><tr id="cpu2235" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4310M+%40+2.70GHz&amp;id=2235">Intel Core i5-4310M @ 2.70GHz
</a></td><td>3,161</td><td>1385</td><td>NA</td><td>NA</td></tr><tr id="cpu2207" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4310U+%40+2.00GHz&amp;id=2207">Intel Core i5-4310U @ 2.00GHz
</a></td><td>2,458</td><td>1628</td><td>NA</td><td>NA</td></tr><tr id="cpu2055" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4330M+%40+2.80GHz&amp;id=2055">Intel Core i5-4330M @ 2.80GHz
</a></td><td>3,208</td><td>1371</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4330M+%40+2.80GHz&amp;id=2055#price">11.66
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4330M+%40+2.80GHz&amp;id=2055#price">$274.99*</a></td></tr><tr id="cpu2274" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4340M+%40+2.90GHz&amp;id=2274">Intel Core i5-4340M @ 2.90GHz
</a></td><td>3,464</td><td>1299</td><td>NA</td><td>NA</td></tr><tr id="cpu2010" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4350U+%40+1.40GHz&amp;id=2010">Intel Core i5-4350U @ 1.40GHz
</a></td><td>2,305</td><td>1697</td><td>NA</td><td>NA</td></tr><tr id="cpu2188" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4400E+%40+2.70GHz&amp;id=2188">Intel Core i5-4400E @ 2.70GHz
</a></td><td>3,251</td><td>1356</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4400E+%40+2.70GHz&amp;id=2188#price">12.22
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4400E+%40+2.70GHz&amp;id=2188#price">$266.00*</a></td></tr><tr id="cpu2697" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4402E+%40+1.60GHz&amp;id=2697">Intel Core i5-4402E @ 1.60GHz
</a></td><td>2,681</td><td>1552</td><td>NA</td><td>NA</td></tr><tr id="cpu3138" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4422E+%40+1.80GHz&amp;id=3138">Intel Core i5-4422E @ 1.80GHz
</a></td><td>1,907</td><td>1918</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4422E+%40+1.80GHz&amp;id=3138#price">7.17
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4422E+%40+1.80GHz&amp;id=3138#price">$266.00*</a></td></tr><tr id="cpu1924" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4430+%40+3.00GHz&amp;id=1924">Intel Core i5-4430 @ 3.00GHz
</a></td><td>4,637</td><td>1082</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4430+%40+3.00GHz&amp;id=1924#price">29.94
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4430+%40+3.00GHz&amp;id=1924#price">$154.86</a></td></tr><tr id="cpu2111" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4430S+%40+2.70GHz&amp;id=2111">Intel Core i5-4430S @ 2.70GHz
</a></td><td>4,008</td><td>1192</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4430S+%40+2.70GHz&amp;id=2111#price">43.57
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4430S+%40+2.70GHz&amp;id=2111#price">$91.99*</a></td></tr><tr id="cpu2017" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4440+%40+3.10GHz&amp;id=2017">Intel Core i5-4440 @ 3.10GHz
</a></td><td>4,688</td><td>1076</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4440+%40+3.10GHz&amp;id=2017#price">59.35
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4440+%40+3.10GHz&amp;id=2017#price">$79.00</a></td></tr><tr id="cpu2119" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4440S+%40+2.80GHz&amp;id=2119">Intel Core i5-4440S @ 2.80GHz
</a></td><td>4,198</td><td>1149</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4440S+%40+2.80GHz&amp;id=2119#price">9.07
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4440S+%40+2.80GHz&amp;id=2119#price">$462.97*</a></td></tr><tr id="cpu2230" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4460+%40+3.20GHz&amp;id=2230">Intel Core i5-4460 @ 3.20GHz
</a></td><td>4,797</td><td>1057</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4460+%40+3.20GHz&amp;id=2230#price">49.97
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4460+%40+3.20GHz&amp;id=2230#price">$95.99</a></td></tr><tr id="cpu2232" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4460S+%40+2.90GHz&amp;id=2232">Intel Core i5-4460S @ 2.90GHz
</a></td><td>4,490</td><td>1109</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4460S+%40+2.90GHz&amp;id=2232#price">6.80
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4460S+%40+2.90GHz&amp;id=2232#price">$659.99*</a></td></tr><tr id="cpu2370" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4460T+%40+1.90GHz&amp;id=2370">Intel Core i5-4460T @ 1.90GHz
</a></td><td>3,574</td><td>1275</td><td>NA</td><td>NA</td></tr><tr id="cpu3840" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4470S+%40+3.00GHz&amp;id=3840">Intel Core i5-4470S @ 3.00GHz
</a></td><td>4,742</td><td>1070</td><td>NA</td><td>NA</td></tr><tr id="cpu1896" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4570+%40+3.20GHz&amp;id=1896">Intel Core i5-4570 @ 3.20GHz
</a></td><td>5,153</td><td>1006</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4570+%40+3.20GHz&amp;id=1896#price">55.02
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4570+%40+3.20GHz&amp;id=1896#price">$93.65</a></td></tr><tr id="cpu2065" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4570R+%40+2.70GHz&amp;id=2065">Intel Core i5-4570R @ 2.70GHz
</a></td><td>4,823</td><td>1055</td><td>NA</td><td>NA</td></tr><tr id="cpu1925" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4570S+%40+2.90GHz&amp;id=1925">Intel Core i5-4570S @ 2.90GHz
</a></td><td>4,896</td><td>1043</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4570S+%40+2.90GHz&amp;id=1925#price">20.39
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4570S+%40+2.90GHz&amp;id=1925#price">$240.05*</a></td></tr><tr id="cpu2041" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4570T+%40+2.90GHz&amp;id=2041">Intel Core i5-4570T @ 2.90GHz
</a></td><td>3,231</td><td>1365</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4570T+%40+2.90GHz&amp;id=2041#price">22.59
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4570T+%40+2.90GHz&amp;id=2041#price">$142.99</a></td></tr><tr id="cpu2338" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4570TE+%40+2.70GHz&amp;id=2338">Intel Core i5-4570TE @ 2.70GHz
</a></td><td>3,084</td><td>1413</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4570TE+%40+2.70GHz&amp;id=2338#price">8.97
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4570TE+%40+2.70GHz&amp;id=2338#price">$343.70</a></td></tr><tr id="cpu2234" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4590+%40+3.30GHz&amp;id=2234">Intel Core i5-4590 @ 3.30GHz
</a></td><td>5,318</td><td>979</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4590+%40+3.30GHz&amp;id=2234#price">66.48
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4590+%40+3.30GHz&amp;id=2234#price">$79.99</a></td></tr><tr id="cpu2227" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4590S+%40+3.00GHz&amp;id=2227">Intel Core i5-4590S @ 3.00GHz
</a></td><td>5,106</td><td>1017</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4590S+%40+3.00GHz&amp;id=2227#price">19.64
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4590S+%40+3.00GHz&amp;id=2227#price">$260.00</a></td></tr><tr id="cpu2276" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4590T+%40+2.00GHz&amp;id=2276">Intel Core i5-4590T @ 2.00GHz
</a></td><td>4,030</td><td>1188</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4590T+%40+2.00GHz&amp;id=2276#price">19.20
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4590T+%40+2.00GHz&amp;id=2276#price">$209.95*</a></td></tr><tr id="cpu1933" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4670+%40+3.40GHz&amp;id=1933">Intel Core i5-4670 @ 3.40GHz
</a></td><td>5,402</td><td>970</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4670+%40+3.40GHz&amp;id=1933#price">17.23
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4670+%40+3.40GHz&amp;id=1933#price">$313.56*</a></td></tr><tr id="cpu1921" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4670K+%40+3.40GHz&amp;id=1921">Intel Core i5-4670K @ 3.40GHz
</a></td><td>5,513</td><td>954</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4670K+%40+3.40GHz&amp;id=1921#price">24.35
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4670K+%40+3.40GHz&amp;id=1921#price">$226.37</a></td></tr><tr id="cpu2452" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4670K+CPT+%40+3.40GHz&amp;id=2452">Intel Core i5-4670K CPT @ 3.40GHz
</a></td><td>5,034</td><td>1024</td><td>NA</td><td>NA</td></tr><tr id="cpu3294" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4670R+%40+3.00GHz&amp;id=3294">Intel Core i5-4670R @ 3.00GHz
</a></td><td>5,233</td><td>998</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4670R+%40+3.00GHz&amp;id=3294#price">18.96
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4670R+%40+3.00GHz&amp;id=3294#price">$276.00*</a></td></tr><tr id="cpu2004" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4670S+%40+3.10GHz&amp;id=2004">Intel Core i5-4670S @ 3.10GHz
</a></td><td>5,160</td><td>1004</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4670S+%40+3.10GHz&amp;id=2004#price">24.22
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4670S+%40+3.10GHz&amp;id=2004#price">$213.00*</a></td></tr><tr id="cpu1966" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4670T+%40+2.30GHz&amp;id=1966">Intel Core i5-4670T @ 2.30GHz
</a></td><td>4,333</td><td>1132</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4670T+%40+2.30GHz&amp;id=1966#price">16.73
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4670T+%40+2.30GHz&amp;id=1966#price">$259.02*</a></td></tr><tr id="cpu2236" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4690+%40+3.50GHz&amp;id=2236">Intel Core i5-4690 @ 3.50GHz
</a></td><td>5,583</td><td>951</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4690+%40+3.50GHz&amp;id=2236#price">27.22
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4690+%40+3.50GHz&amp;id=2236#price">$205.11</a></td></tr><tr id="cpu2284" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4690K+%40+3.50GHz&amp;id=2284">Intel Core i5-4690K @ 3.50GHz
</a></td><td>5,603</td><td>948</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4690K+%40+3.50GHz&amp;id=2284#price">61.73
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4690K+%40+3.50GHz&amp;id=2284#price">$90.78</a></td></tr><tr id="cpu2241" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4690S+%40+3.20GHz&amp;id=2241">Intel Core i5-4690S @ 3.20GHz
</a></td><td>5,455</td><td>963</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4690S+%40+3.20GHz&amp;id=2241#price">15.19
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-4690S+%40+3.20GHz&amp;id=2241#price">$359.21*</a></td></tr><tr id="cpu2437" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-4690T+%40+2.50GHz&amp;id=2437">Intel Core i5-4690T @ 2.50GHz
</a></td><td>4,492</td><td>1108</td><td>NA</td><td>NA</td></tr><tr id="cpu2440" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-5200U+%40+2.20GHz&amp;id=2440">Intel Core i5-5200U @ 2.20GHz
</a></td><td>2,513</td><td>1610</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-5200U+%40+2.20GHz&amp;id=2440#price">8.94
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-5200U+%40+2.20GHz&amp;id=2440#price">$281.00*</a></td></tr><tr id="cpu2478" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-5250U+%40+1.60GHz&amp;id=2478">Intel Core i5-5250U @ 1.60GHz
</a></td><td>2,495</td><td>1614</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-5250U+%40+1.60GHz&amp;id=2478#price">4.71
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-5250U+%40+1.60GHz&amp;id=2478#price">$529.99*</a></td></tr><tr id="cpu2504" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-5257U+%40+2.70GHz&amp;id=2504">Intel Core i5-5257U @ 2.70GHz
</a></td><td>3,050</td><td>1424</td><td>NA</td><td>NA</td></tr><tr id="cpu2575" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-5287U+%40+2.90GHz&amp;id=2575">Intel Core i5-5287U @ 2.90GHz
</a></td><td>3,323</td><td>1330</td><td>NA</td><td>NA</td></tr><tr id="cpu2459" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-5300U+%40+2.30GHz&amp;id=2459">Intel Core i5-5300U @ 2.30GHz
</a></td><td>2,726</td><td>1533</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-5300U+%40+2.30GHz&amp;id=2459#price">9.40
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-5300U+%40+2.30GHz&amp;id=2459#price">$289.99*</a></td></tr><tr id="cpu2530" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-5350U+%40+1.80GHz&amp;id=2530">Intel Core i5-5350U @ 1.80GHz
</a></td><td>2,748</td><td>1528</td><td>NA</td><td>NA</td></tr><tr id="cpu2683" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-5575R+%40+2.80GHz&amp;id=2683">Intel Core i5-5575R @ 2.80GHz
</a></td><td>5,197</td><td>1000</td><td>NA</td><td>NA</td></tr><tr id="cpu2563" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-5675C+%40+3.10GHz&amp;id=2563">Intel Core i5-5675C @ 3.10GHz
</a></td><td>5,673</td><td>937</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-5675C+%40+3.10GHz&amp;id=2563#price">21.86
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-5675C+%40+3.10GHz&amp;id=2563#price">$259.51</a></td></tr><tr id="cpu2813" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-5675R+%40+3.10GHz&amp;id=2813">Intel Core i5-5675R @ 3.10GHz
</a></td><td>5,761</td><td>928</td><td>NA</td><td>NA</td></tr><tr id="cpu2854" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-6198DU+%40+2.30GHz&amp;id=2854">Intel Core i5-6198DU @ 2.30GHz
</a></td><td>3,163</td><td>1383</td><td>NA</td><td>NA</td></tr><tr id="cpu2556" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-6200U+%40+2.30GHz&amp;id=2556">Intel Core i5-6200U @ 2.30GHz
</a></td><td>3,027</td><td>1427</td><td>NA</td><td>NA</td></tr><tr id="cpu2671" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-6260U+%40+1.80GHz&amp;id=2671">Intel Core i5-6260U @ 1.80GHz
</a></td><td>3,154</td><td>1388</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-6260U+%40+1.80GHz&amp;id=2671#price">6.32
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-6260U+%40+1.80GHz&amp;id=2671#price">$499.00*</a></td></tr><tr id="cpu2757" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-6267U+%40+2.90GHz&amp;id=2757">Intel Core i5-6267U @ 2.90GHz
</a></td><td>3,395</td><td>1313</td><td>NA</td><td>NA</td></tr><tr id="cpu3109" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-6287U+%40+3.10GHz&amp;id=3109">Intel Core i5-6287U @ 3.10GHz
</a></td><td>3,775</td><td>1231</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-6287U+%40+3.10GHz&amp;id=3109#price">12.42
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-6287U+%40+3.10GHz&amp;id=3109#price">$304.00*</a></td></tr><tr id="cpu2632" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-6300HQ+%40+2.30GHz&amp;id=2632">Intel Core i5-6300HQ @ 2.30GHz
</a></td><td>4,676</td><td>1077</td><td>NA</td><td>NA</td></tr><tr id="cpu2609" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-6300U+%40+2.40GHz&amp;id=2609">Intel Core i5-6300U @ 2.40GHz
</a></td><td>3,259</td><td>1352</td><td>NA</td><td>NA</td></tr><tr id="cpu2932" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-6360U+%40+2.00GHz&amp;id=2932">Intel Core i5-6360U @ 2.00GHz
</a></td><td>3,346</td><td>1324</td><td>NA</td><td>NA</td></tr><tr id="cpu2578" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-6400+%40+2.70GHz&amp;id=2578">Intel Core i5-6400 @ 2.70GHz
</a></td><td>5,151</td><td>1009</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-6400+%40+2.70GHz&amp;id=2578#price">39.63
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-6400+%40+2.70GHz&amp;id=2578#price">$129.99</a></td></tr><tr id="cpu2668" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-6400T+%40+2.20GHz&amp;id=2668">Intel Core i5-6400T @ 2.20GHz
</a></td><td>4,278</td><td>1142</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-6400T+%40+2.20GHz&amp;id=2668#price">26.74
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-6400T+%40+2.20GHz&amp;id=2668#price">$159.99*</a></td></tr><tr id="cpu2754" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-6402P+%40+2.80GHz&amp;id=2754">Intel Core i5-6402P @ 2.80GHz
</a></td><td>5,510</td><td>957</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-6402P+%40+2.80GHz&amp;id=2754#price">29.00
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-6402P+%40+2.80GHz&amp;id=2754#price">$189.99*</a></td></tr><tr id="cpu2868" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-6440EQ+%40+2.70GHz&amp;id=2868">Intel Core i5-6440EQ @ 2.70GHz
</a></td><td>5,368</td><td>974</td><td>NA</td><td>NA</td></tr><tr id="cpu2691" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-6440HQ+%40+2.60GHz&amp;id=2691">Intel Core i5-6440HQ @ 2.60GHz
</a></td><td>5,148</td><td>1010</td><td>NA</td><td>NA</td></tr><tr id="cpu3544" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-6442EQ+%40+1.90GHz&amp;id=3544">Intel Core i5-6442EQ @ 1.90GHz
</a></td><td>4,519</td><td>1101</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-6442EQ+%40+1.90GHz&amp;id=3544#price">18.08
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-6442EQ+%40+1.90GHz&amp;id=3544#price">$250.00*</a></td></tr><tr id="cpu2599" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-6500+%40+3.20GHz&amp;id=2599">Intel Core i5-6500 @ 3.20GHz
</a></td><td>5,641</td><td>943</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-6500+%40+3.20GHz&amp;id=2599#price">37.61
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-6500+%40+3.20GHz&amp;id=2599#price">$149.99</a></td></tr><tr id="cpu2627" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-6500T+%40+2.50GHz&amp;id=2627">Intel Core i5-6500T @ 2.50GHz
</a></td><td>4,787</td><td>1058</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-6500T+%40+2.50GHz&amp;id=2627#price">21.61
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-6500T+%40+2.50GHz&amp;id=2627#price">$221.52*</a></td></tr><tr id="cpu2680" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-6500TE+%40+2.30GHz&amp;id=2680">Intel Core i5-6500TE @ 2.30GHz
</a></td><td>5,044</td><td>1023</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-6500TE+%40+2.30GHz&amp;id=2680#price">21.87
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-6500TE+%40+2.30GHz&amp;id=2680#price">$230.61*</a></td></tr><tr id="cpu2594" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-6600+%40+3.30GHz&amp;id=2594">Intel Core i5-6600 @ 3.30GHz
</a></td><td>6,097</td><td>887</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-6600+%40+3.30GHz&amp;id=2594#price">34.25
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-6600+%40+3.30GHz&amp;id=2594#price">$178.00</a></td></tr><tr id="cpu2570" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-6600K+%40+3.50GHz&amp;id=2570">Intel Core i5-6600K @ 3.50GHz
</a></td><td>6,286</td><td>860</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-6600K+%40+3.50GHz&amp;id=2570#price">32.27
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-6600K+%40+3.50GHz&amp;id=2570#price">$194.79</a></td></tr><tr id="cpu2613" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-6600T+%40+2.70GHz&amp;id=2613">Intel Core i5-6600T @ 2.70GHz
</a></td><td>5,643</td><td>942</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-6600T+%40+2.70GHz&amp;id=2613#price">19.46
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-6600T+%40+2.70GHz&amp;id=2613#price">$289.95</a></td></tr><tr id="cpu2865" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-7200U+%40+2.50GHz&amp;id=2865">Intel Core i5-7200U @ 2.50GHz
</a></td><td>3,404</td><td>1312</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-7200U+%40+2.50GHz&amp;id=2865#price">6.82
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-7200U+%40+2.50GHz&amp;id=2865#price">$499.00*</a></td></tr><tr id="cpu2993" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-7260U+%40+2.20GHz&amp;id=2993">Intel Core i5-7260U @ 2.20GHz
</a></td><td>3,942</td><td>1206</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-7260U+%40+2.20GHz&amp;id=2993#price">8.39
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-7260U+%40+2.20GHz&amp;id=2993#price">$469.99*</a></td></tr><tr id="cpu3051" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-7267U+%40+3.10GHz&amp;id=3051">Intel Core i5-7267U @ 3.10GHz
</a></td><td>4,053</td><td>1181</td><td>NA</td><td>NA</td></tr><tr id="cpu3272" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-7287U+%40+3.30GHz&amp;id=3272">Intel Core i5-7287U @ 3.30GHz
</a></td><td>4,149</td><td>1164</td><td>NA</td><td>NA</td></tr><tr id="cpu2922" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-7300HQ+%40+2.50GHz&amp;id=2922">Intel Core i5-7300HQ @ 2.50GHz
</a></td><td>5,124</td><td>1012</td><td>NA</td><td>NA</td></tr><tr id="cpu2955" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-7300U+%40+2.60GHz&amp;id=2955">Intel Core i5-7300U @ 2.60GHz
</a></td><td>3,746</td><td>1238</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-7300U+%40+2.60GHz&amp;id=2955#price">5.97
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-7300U+%40+2.60GHz&amp;id=2955#price">$627.00*</a></td></tr><tr id="cpu3036" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-7360U+%40+2.30GHz&amp;id=3036">Intel Core i5-7360U @ 2.30GHz
</a></td><td>4,192</td><td>1151</td><td>NA</td><td>NA</td></tr><tr id="cpu2929" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-7400+%40+3.00GHz&amp;id=2929">Intel Core i5-7400 @ 3.00GHz
</a></td><td>5,516</td><td>953</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-7400+%40+3.00GHz&amp;id=2929#price">29.03
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-7400+%40+3.00GHz&amp;id=2929#price">$190.00</a></td></tr><tr id="cpu2889" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-7400T+%40+2.40GHz&amp;id=2889">Intel Core i5-7400T @ 2.40GHz
</a></td><td>4,737</td><td>1071</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-7400T+%40+2.40GHz&amp;id=2889#price">26.36
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-7400T+%40+2.40GHz&amp;id=2889#price">$179.73</a></td></tr><tr id="cpu4013" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-7440EQ+%40+2.90GHz&amp;id=4013">Intel Core i5-7440EQ @ 2.90GHz
</a></td><td>5,711</td><td>933</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-7440EQ+%40+2.90GHz&amp;id=4013#price">22.84
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-7440EQ+%40+2.90GHz&amp;id=4013#price">$250.00*</a></td></tr><tr id="cpu2962" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-7440HQ+%40+2.80GHz&amp;id=2962">Intel Core i5-7440HQ @ 2.80GHz
</a></td><td>5,590</td><td>949</td><td>NA</td><td>NA</td></tr><tr id="cpu3392" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-7442EQ+%40+2.10GHz&amp;id=3392">Intel Core i5-7442EQ @ 2.10GHz
</a></td><td>4,834</td><td>1054</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-7442EQ+%40+2.10GHz&amp;id=3392#price">19.34
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-7442EQ+%40+2.10GHz&amp;id=3392#price">$250.00*</a></td></tr><tr id="cpu2910" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-7500+%40+3.40GHz&amp;id=2910">Intel Core i5-7500 @ 3.40GHz
</a></td><td>6,061</td><td>894</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-7500+%40+3.40GHz&amp;id=2910#price">36.30
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-7500+%40+3.40GHz&amp;id=2910#price">$166.96</a></td></tr><tr id="cpu2917" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-7500T+%40+2.70GHz&amp;id=2917">Intel Core i5-7500T @ 2.70GHz
</a></td><td>5,362</td><td>975</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-7500T+%40+2.70GHz&amp;id=2917#price">28.24
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-7500T+%40+2.70GHz&amp;id=2917#price">$189.88</a></td></tr><tr id="cpu2920" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-7600+%40+3.50GHz&amp;id=2920">Intel Core i5-7600 @ 3.50GHz
</a></td><td>6,657</td><td>810</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-7600+%40+3.50GHz&amp;id=2920#price">34.72
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-7600+%40+3.50GHz&amp;id=2920#price">$191.76</a></td></tr><tr id="cpu2919" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-7600K+%40+3.80GHz&amp;id=2919">Intel Core i5-7600K @ 3.80GHz
</a></td><td>6,856</td><td>790</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-7600K+%40+3.80GHz&amp;id=2919#price">34.30
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-7600K+%40+3.80GHz&amp;id=2919#price">$199.88</a></td></tr><tr id="cpu2928" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-7600T+%40+2.80GHz&amp;id=2928">Intel Core i5-7600T @ 2.80GHz
</a></td><td>6,166</td><td>875</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-7600T+%40+2.80GHz&amp;id=2928#price">30.85
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-7600T+%40+2.80GHz&amp;id=2928#price">$199.85*</a></td></tr><tr id="cpu3045" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-7640X+%40+4.00GHz&amp;id=3045">Intel Core i5-7640X @ 4.00GHz
</a></td><td>6,636</td><td>813</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-7640X+%40+4.00GHz&amp;id=3045#price">29.44
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-7640X+%40+4.00GHz&amp;id=3045#price">$225.40</a></td></tr><tr id="cpu3372" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-8200Y+%40+1.30GHz&amp;id=3372">Intel Core i5-8200Y @ 1.30GHz
</a></td><td>2,308</td><td>1694</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8200Y+%40+1.30GHz&amp;id=3372#price">7.93
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8200Y+%40+1.30GHz&amp;id=3372#price">$291.00*</a></td></tr><tr id="cpu3402" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-8210Y+%40+1.60GHz&amp;id=3402">Intel Core i5-8210Y @ 1.60GHz
</a></td><td>2,876</td><td>1478</td><td>NA</td><td>NA</td></tr><tr id="cpu3042" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-8250U+%40+1.60GHz&amp;id=3042">Intel Core i5-8250U @ 1.60GHz
</a></td><td>5,953</td><td>903</td><td>NA</td><td>NA</td></tr><tr id="cpu3605" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-8257U+%40+1.40GHz&amp;id=3605">Intel Core i5-8257U @ 1.40GHz
</a></td><td>7,668</td><td>685</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8257U+%40+1.40GHz&amp;id=3605#price">23.96
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8257U+%40+1.40GHz&amp;id=3605#price">$320.00*</a></td></tr><tr id="cpu3299" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-8259U+%40+2.30GHz&amp;id=3299">Intel Core i5-8259U @ 2.30GHz
</a></td><td>8,129</td><td>642</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8259U+%40+2.30GHz&amp;id=3299#price">15.63
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8259U+%40+2.30GHz&amp;id=3299#price">$519.99*</a></td></tr><tr id="cpu3724" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-8260U+%40+1.60GHz&amp;id=3724">Intel Core i5-8260U @ 1.60GHz
</a></td><td>7,869</td><td>665</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8260U+%40+1.60GHz&amp;id=3724#price">17.89
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8260U+%40+1.60GHz&amp;id=3724#price">$439.99*</a></td></tr><tr id="cpu3323" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-8265U+%40+1.60GHz&amp;id=3323">Intel Core i5-8265U @ 1.60GHz
</a></td><td>6,127</td><td>882</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8265U+%40+1.60GHz&amp;id=3323#price">12.26
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8265U+%40+1.60GHz&amp;id=3323#price">$499.88*</a></td></tr><tr id="cpu3449" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-8265UC+%40+1.60GHz&amp;id=3449">Intel Core i5-8265UC @ 1.60GHz
</a></td><td>5,988</td><td>900</td><td>NA</td><td>NA</td></tr><tr id="cpu4262" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-8269U+%40+2.60GHz&amp;id=4262">Intel Core i5-8269U @ 2.60GHz
</a></td><td>8,055</td><td>649</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8269U+%40+2.60GHz&amp;id=4262#price">25.17
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8269U+%40+2.60GHz&amp;id=4262#price">$320.00*</a></td></tr><tr id="cpu3552" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-8279U+%40+2.40GHz&amp;id=3552">Intel Core i5-8279U @ 2.40GHz
</a></td><td>8,018</td><td>654</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8279U+%40+2.40GHz&amp;id=3552#price">25.06
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8279U+%40+2.40GHz&amp;id=3552#price">$320.00*</a></td></tr><tr id="cpu3254" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-8300H+%40+2.30GHz&amp;id=3254">Intel Core i5-8300H @ 2.30GHz
</a></td><td>7,538</td><td>696</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8300H+%40+2.30GHz&amp;id=3254#price">30.15
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8300H+%40+2.30GHz&amp;id=3254#price">$250.00*</a></td></tr><tr id="cpu3291" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-8305G+%40+2.80GHz&amp;id=3291">Intel Core i5-8305G @ 2.80GHz
</a></td><td>7,073</td><td>752</td><td>NA</td><td>NA</td></tr><tr id="cpu3150" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-8350U+%40+1.70GHz&amp;id=3150">Intel Core i5-8350U @ 1.70GHz
</a></td><td>6,296</td><td>859</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8350U+%40+1.70GHz&amp;id=3150#price">21.20
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8350U+%40+1.70GHz&amp;id=3150#price">$297.00*</a></td></tr><tr id="cpu3447" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-8365U+%40+1.60GHz&amp;id=3447">Intel Core i5-8365U @ 1.60GHz
</a></td><td>6,407</td><td>842</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8365U+%40+1.60GHz&amp;id=3447#price">11.89
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8365U+%40+1.60GHz&amp;id=3447#price">$539.07*</a></td></tr><tr id="cpu3594" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-8365UE+%40+1.60GHz&amp;id=3594">Intel Core i5-8365UE @ 1.60GHz
</a></td><td>5,408</td><td>969</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8365UE+%40+1.60GHz&amp;id=3594#price">18.21
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8365UE+%40+1.60GHz&amp;id=3594#price">$297.00*</a></td></tr><tr id="cpu3097" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-8400+%40+2.80GHz&amp;id=3097">Intel Core i5-8400 @ 2.80GHz
</a></td><td>9,216</td><td>571</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8400+%40+2.80GHz&amp;id=3097#price">39.73
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8400+%40+2.80GHz&amp;id=3097#price">$231.99</a></td></tr><tr id="cpu3286" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-8400H+%40+2.50GHz&amp;id=3286">Intel Core i5-8400H @ 2.50GHz
</a></td><td>8,219</td><td>635</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8400H+%40+2.50GHz&amp;id=3286#price">32.87
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8400H+%40+2.50GHz&amp;id=3286#price">$250.00*</a></td></tr><tr id="cpu3260" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-8400T+%40+1.70GHz&amp;id=3260">Intel Core i5-8400T @ 1.70GHz
</a></td><td>7,317</td><td>722</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8400T+%40+1.70GHz&amp;id=3260#price">30.51
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8400T+%40+1.70GHz&amp;id=3260#price">$239.84*</a></td></tr><tr id="cpu3223" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-8500+%40+3.00GHz&amp;id=3223">Intel Core i5-8500 @ 3.00GHz
</a></td><td>9,613</td><td>547</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8500+%40+3.00GHz&amp;id=3223#price">50.59
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8500+%40+3.00GHz&amp;id=3223#price">$190.00</a></td></tr><tr id="cpu3382" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-8500B+%40+3.00GHz&amp;id=3382">Intel Core i5-8500B @ 3.00GHz
</a></td><td>9,576</td><td>548</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8500B+%40+3.00GHz&amp;id=3382#price">49.88
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8500B+%40+3.00GHz&amp;id=3382#price">$192.00*</a></td></tr><tr id="cpu3231" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-8500T+%40+2.10GHz&amp;id=3231">Intel Core i5-8500T @ 2.10GHz
</a></td><td>7,678</td><td>684</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8500T+%40+2.10GHz&amp;id=3231#price">31.02
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8500T+%40+2.10GHz&amp;id=3231#price">$247.53*</a></td></tr><tr id="cpu3251" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-8600+%40+3.10GHz&amp;id=3251">Intel Core i5-8600 @ 3.10GHz
</a></td><td>9,915</td><td>532</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8600+%40+3.10GHz&amp;id=3251#price">38.30
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8600+%40+3.10GHz&amp;id=3251#price">$258.87</a></td></tr><tr id="cpu3100" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-8600K+%40+3.60GHz&amp;id=3100">Intel Core i5-8600K @ 3.60GHz
</a></td><td>10,143</td><td>519</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8600K+%40+3.60GHz&amp;id=3100#price">39.18
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8600K+%40+3.60GHz&amp;id=3100#price">$258.88</a></td></tr><tr id="cpu3241" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-8600T+%40+2.30GHz&amp;id=3241">Intel Core i5-8600T @ 2.30GHz
</a></td><td>8,029</td><td>652</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8600T+%40+2.30GHz&amp;id=3241#price">40.15
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-8600T+%40+2.30GHz&amp;id=3241#price">$199.99*</a></td></tr><tr id="cpu3448" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-9300H+%40+2.40GHz&amp;id=3448">Intel Core i5-9300H @ 2.40GHz
</a></td><td>7,852</td><td>666</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-9300H+%40+2.40GHz&amp;id=3448#price">31.41
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-9300H+%40+2.40GHz&amp;id=3448#price">$250.00*</a></td></tr><tr id="cpu3706" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-9300HF+%40+2.40GHz&amp;id=3706">Intel Core i5-9300HF @ 2.40GHz
</a></td><td>7,633</td><td>689</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-9300HF+%40+2.40GHz&amp;id=3706#price">30.53
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-9300HF+%40+2.40GHz&amp;id=3706#price">$250.00*</a></td></tr><tr id="cpu3414" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-9400+%40+2.90GHz&amp;id=3414">Intel Core i5-9400 @ 2.90GHz
</a></td><td>9,504</td><td>552</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-9400+%40+2.90GHz&amp;id=3414#price">44.62
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-9400+%40+2.90GHz&amp;id=3414#price">$212.99</a></td></tr><tr id="cpu3397" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-9400F+%40+2.90GHz&amp;id=3397">Intel Core i5-9400F @ 2.90GHz
</a></td><td>9,549</td><td>550</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-9400F+%40+2.90GHz&amp;id=3397#price">56.89
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-9400F+%40+2.90GHz&amp;id=3397#price">$167.85</a></td></tr><tr id="cpu3508" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-9400H+%40+2.50GHz&amp;id=3508">Intel Core i5-9400H @ 2.50GHz
</a></td><td>8,267</td><td>629</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-9400H+%40+2.50GHz&amp;id=3508#price">33.07
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-9400H+%40+2.50GHz&amp;id=3508#price">$250.00*</a></td></tr><tr id="cpu3513" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-9400T+%40+1.80GHz&amp;id=3513">Intel Core i5-9400T @ 1.80GHz
</a></td><td>7,714</td><td>680</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-9400T+%40+1.80GHz&amp;id=3513#price">42.38
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-9400T+%40+1.80GHz&amp;id=3513#price">$182.00*</a></td></tr><tr id="cpu3444" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-9500+%40+3.00GHz&amp;id=3444">Intel Core i5-9500 @ 3.00GHz
</a></td><td>9,727</td><td>539</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-9500+%40+3.00GHz&amp;id=3444#price">39.56
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-9500+%40+3.00GHz&amp;id=3444#price">$245.88</a></td></tr><tr id="cpu3511" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-9500F+%40+3.00GHz&amp;id=3511">Intel Core i5-9500F @ 3.00GHz
</a></td><td>10,299</td><td>512</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-9500F+%40+3.00GHz&amp;id=3511#price">44.78
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-9500F+%40+3.00GHz&amp;id=3511#price">$229.99</a></td></tr><tr id="cpu3454" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-9500T+%40+2.20GHz&amp;id=3454">Intel Core i5-9500T @ 2.20GHz
</a></td><td>8,207</td><td>637</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-9500T+%40+2.20GHz&amp;id=3454#price">42.75
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-9500T+%40+2.20GHz&amp;id=3454#price">$192.00*</a></td></tr><tr id="cpu3736" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-9500TE+%40+2.20GHz&amp;id=3736">Intel Core i5-9500TE @ 2.20GHz
</a></td><td>9,212</td><td>573</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-9500TE+%40+2.20GHz&amp;id=3736#price">47.98
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-9500TE+%40+2.20GHz&amp;id=3736#price">$192.00*</a></td></tr><tr id="cpu3554" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-9600+%40+3.10GHz&amp;id=3554">Intel Core i5-9600 @ 3.10GHz
</a></td><td>10,626</td><td>497</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-9600+%40+3.10GHz&amp;id=3554#price">41.35
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-9600+%40+3.10GHz&amp;id=3554#price">$256.99</a></td></tr><tr id="cpu3337" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-9600K+%40+3.70GHz&amp;id=3337">Intel Core i5-9600K @ 3.70GHz
</a></td><td>10,810</td><td>490</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-9600K+%40+3.70GHz&amp;id=3337#price">50.28
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-9600K+%40+3.70GHz&amp;id=3337#price">$214.99</a></td></tr><tr id="cpu3443" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-9600KF+%40+3.70GHz&amp;id=3443">Intel Core i5-9600KF @ 3.70GHz
</a></td><td>10,844</td><td>487</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-9600KF+%40+3.70GHz&amp;id=3443#price">52.62
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-9600KF+%40+3.70GHz&amp;id=3443#price">$206.07</a></td></tr><tr id="cpu3602" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-9600T+%40+2.30GHz&amp;id=3602">Intel Core i5-9600T @ 2.30GHz
</a></td><td>9,167</td><td>575</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-9600T+%40+2.30GHz&amp;id=3602#price">43.04
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-9600T+%40+2.30GHz&amp;id=3602#price">$213.00*</a></td></tr><tr id="cpu3867" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-10200H+%40+2.40GHz&amp;id=3867">Intel Core i5-10200H @ 2.40GHz
</a></td><td>8,441</td><td>614</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-10200H+%40+2.40GHz&amp;id=3867#price">33.76
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-10200H+%40+2.40GHz&amp;id=3867#price">$250.00*</a></td></tr><tr id="cpu3542" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-10210U+%40+1.60GHz&amp;id=3542">Intel Core i5-10210U @ 1.60GHz
</a></td><td>6,756</td><td>802</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-10210U+%40+1.60GHz&amp;id=3542#price">9.62
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-10210U+%40+1.60GHz&amp;id=3542#price">$702.62*</a></td></tr><tr id="cpu3643" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-10210Y+%40+1.00GHz&amp;id=3643">Intel Core i5-10210Y @ 1.00GHz
</a></td><td>4,836</td><td>1052</td><td>NA</td><td>NA</td></tr><tr id="cpu3646" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-10300H+%40+2.50GHz&amp;id=3646">Intel Core i5-10300H @ 2.50GHz
</a></td><td>8,774</td><td>601</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-10300H+%40+2.50GHz&amp;id=3646#price">35.09
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-10300H+%40+2.50GHz&amp;id=3646#price">$250.00*</a></td></tr><tr id="cpu3698" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-10310U+%40+1.70GHz&amp;id=3698">Intel Core i5-10310U @ 1.70GHz
</a></td><td>6,874</td><td>787</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-10310U+%40+1.70GHz&amp;id=3698#price">23.14
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-10310U+%40+1.70GHz&amp;id=3698#price">$297.00*</a></td></tr><tr id="cpu3737" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-10400+%40+2.90GHz&amp;id=3737">Intel Core i5-10400 @ 2.90GHz
</a></td><td>12,387</td><td>421</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-10400+%40+2.90GHz&amp;id=3737#price">60.42
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-10400+%40+2.90GHz&amp;id=3737#price">$204.99</a></td></tr><tr id="cpu3767" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-10400F+%40+2.90GHz&amp;id=3767">Intel Core i5-10400F @ 2.90GHz
</a></td><td>12,468</td><td>417</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-10400F+%40+2.90GHz&amp;id=3767#price">70.47
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-10400F+%40+2.90GHz&amp;id=3767#price">$176.91</a></td></tr><tr id="cpu3775" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-10400H+%40+2.60GHz&amp;id=3775">Intel Core i5-10400H @ 2.60GHz
</a></td><td>8,885</td><td>590</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-10400H+%40+2.60GHz&amp;id=3775#price">35.54
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-10400H+%40+2.60GHz&amp;id=3775#price">$250.00*</a></td></tr><tr id="cpu3826" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-10400T+%40+2.00GHz&amp;id=3826">Intel Core i5-10400T @ 2.00GHz
</a></td><td>10,111</td><td>522</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-10400T+%40+2.00GHz&amp;id=3826#price">55.56
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-10400T+%40+2.00GHz&amp;id=3826#price">$182.00*</a></td></tr><tr id="cpu3749" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-10500+%40+3.10GHz&amp;id=3749">Intel Core i5-10500 @ 3.10GHz
</a></td><td>13,243</td><td>395</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-10500+%40+3.10GHz&amp;id=3749#price">50.89
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-10500+%40+3.10GHz&amp;id=3749#price">$260.21</a></td></tr><tr id="cpu4158" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-10500H+%40+2.50GHz&amp;id=4158">Intel Core i5-10500H @ 2.50GHz
</a></td><td>12,186</td><td>428</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-10500H+%40+2.50GHz&amp;id=4158#price">48.75
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-10500H+%40+2.50GHz&amp;id=4158#price">$250.00*</a></td></tr><tr id="cpu3768" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-10500T+%40+2.30GHz&amp;id=3768">Intel Core i5-10500T @ 2.30GHz
</a></td><td>10,686</td><td>495</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-10500T+%40+2.30GHz&amp;id=3768#price">55.66
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-10500T+%40+2.30GHz&amp;id=3768#price">$192.00*</a></td></tr><tr id="cpu4372" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-10505+%40+3.20GHz&amp;id=4372">Intel Core i5-10505 @ 3.20GHz
</a></td><td>11,853</td><td>443</td><td>NA</td><td>NA</td></tr><tr id="cpu3750" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-10600+%40+3.30GHz&amp;id=3750">Intel Core i5-10600 @ 3.30GHz
</a></td><td>13,972</td><td>369</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-10600+%40+3.30GHz&amp;id=3750#price">52.41
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-10600+%40+3.30GHz&amp;id=3750#price">$266.57</a></td></tr><tr id="cpu3735" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-10600K+%40+4.10GHz&amp;id=3735">Intel Core i5-10600K @ 4.10GHz
</a></td><td>14,565</td><td>344</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-10600K+%40+4.10GHz&amp;id=3735#price">79.59
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-10600K+%40+4.10GHz&amp;id=3735#price">$183.00</a></td></tr><tr id="cpu3810" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-10600KF+%40+4.10GHz&amp;id=3810">Intel Core i5-10600KF @ 4.10GHz
</a></td><td>14,578</td><td>342</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-10600KF+%40+4.10GHz&amp;id=3810#price">73.35
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-10600KF+%40+4.10GHz&amp;id=3810#price">$198.74</a></td></tr><tr id="cpu3834" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-10600T+%40+2.40GHz&amp;id=3834">Intel Core i5-10600T @ 2.40GHz
</a></td><td>11,871</td><td>441</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-10600T+%40+2.40GHz&amp;id=3834#price">55.73
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-10600T+%40+2.40GHz&amp;id=3834#price">$213.00*</a></td></tr><tr id="cpu4477" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-11260H+%40+2.60GHz&amp;id=4477">Intel Core i5-11260H @ 2.60GHz
</a></td><td>11,623</td><td>452</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-11260H+%40+2.60GHz&amp;id=4477#price">46.49
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-11260H+%40+2.60GHz&amp;id=4477#price">$250.00*</a></td></tr><tr id="cpu4279" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-11300H+%40+3.10GHz&amp;id=4279">Intel Core i5-11300H @ 3.10GHz
</a></td><td>11,452</td><td>460</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-11300H+%40+3.10GHz&amp;id=4279#price">37.06
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-11300H+%40+3.10GHz&amp;id=4279#price">$309.00*</a></td></tr><tr id="cpu4233" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-11400+%40+2.60GHz&amp;id=4233">Intel Core i5-11400 @ 2.60GHz
</a></td><td>17,517</td><td>264</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-11400+%40+2.60GHz&amp;id=4233#price">67.39
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-11400+%40+2.60GHz&amp;id=4233#price">$259.95*</a></td></tr><tr id="cpu4226" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-11400F+%40+2.60GHz&amp;id=4226">Intel Core i5-11400F @ 2.60GHz
</a></td><td>17,836</td><td>255</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-11400F+%40+2.60GHz&amp;id=4226#price">62.37
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-11400F+%40+2.60GHz&amp;id=4226#price">$285.99</a></td></tr><tr id="cpu4457" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-11400H+%40+2.70GHz&amp;id=4457">Intel Core i5-11400H @ 2.70GHz
</a></td><td>14,574</td><td>343</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-11400H+%40+2.70GHz&amp;id=4457#price">58.30
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-11400H+%40+2.70GHz&amp;id=4457#price">$250.00*</a></td></tr><tr id="cpu4406" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-11400T+%40+1.30GHz&amp;id=4406">Intel Core i5-11400T @ 1.30GHz
</a></td><td>13,367</td><td>391</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-11400T+%40+1.30GHz&amp;id=4406#price">73.44
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-11400T+%40+1.30GHz&amp;id=4406#price">$182.00*</a></td></tr><tr id="cpu4238" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-11500+%40+2.70GHz&amp;id=4238">Intel Core i5-11500 @ 2.70GHz
</a></td><td>17,967</td><td>251</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-11500+%40+2.70GHz&amp;id=4238#price">51.98
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-11500+%40+2.70GHz&amp;id=4238#price">$345.64</a></td></tr><tr id="cpu4399" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-11500H+%40+2.90GHz&amp;id=4399">Intel Core i5-11500H @ 2.90GHz
</a></td><td>17,468</td><td>265</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-11500H+%40+2.90GHz&amp;id=4399#price">69.87
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-11500H+%40+2.90GHz&amp;id=4399#price">$250.00*</a></td></tr><tr id="cpu4306" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-11600+%40+2.80GHz&amp;id=4306">Intel Core i5-11600 @ 2.80GHz
</a></td><td>18,099</td><td>247</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-11600+%40+2.80GHz&amp;id=4306#price">61.15
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-11600+%40+2.80GHz&amp;id=4306#price">$295.99</a></td></tr><tr id="cpu4236" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-11600K+%40+3.90GHz&amp;id=4236">Intel Core i5-11600K @ 3.90GHz
</a></td><td>20,019</td><td>202</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-11600K+%40+3.90GHz&amp;id=4236#price">71.63
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-11600K+%40+3.90GHz&amp;id=4236#price">$279.49</a></td></tr><tr id="cpu4261" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-11600KF+%40+3.90GHz&amp;id=4261">Intel Core i5-11600KF @ 3.90GHz
</a></td><td>20,087</td><td>201</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-11600KF+%40+3.90GHz&amp;id=4261#price">67.86
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-11600KF+%40+3.90GHz&amp;id=4261#price">$295.99</a></td></tr><tr id="cpu1958" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-24050S+%40+2.50GHz&amp;id=1958">Intel Core i5-24050S @ 2.50GHz
</a></td><td>3,061</td><td>1420</td><td>NA</td><td>NA</td></tr><tr id="cpu3809" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i5-L16G7+%40+1.40GHz&amp;id=3809">Intel Core i5-L16G7 @ 1.40GHz
</a></td><td>3,418</td><td>1307</td><td>
<a href="cpu.php?cpu=Intel+Core+i5-L16G7+%40+1.40GHz&amp;id=3809#price">12.16
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i5-L16G7+%40+1.40GHz&amp;id=3809#price">$281.00*</a></td></tr><tr id="cpu2880" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-7Y75+%40+1.30GHz&amp;id=2880">Intel Core i7-7Y75 @ 1.30GHz
</a></td><td>2,620</td><td>1571</td><td>NA</td><td>NA</td></tr><tr id="cpu845" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-610E+%40+2.53GHz&amp;id=845">Intel Core i7-610E @ 2.53GHz
</a></td><td>1,818</td><td>1972</td><td>NA</td><td>NA</td></tr><tr id="cpu847" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-620LM+%40+2.00GHz&amp;id=847">Intel Core i7-620LM @ 2.00GHz
</a></td><td>1,408</td><td>2230</td><td>NA</td><td>NA</td></tr><tr id="cpu849" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-620M+%40+2.67GHz&amp;id=849">Intel Core i7-620M @ 2.67GHz
</a></td><td>1,998</td><td>1868</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-620M+%40+2.67GHz&amp;id=849#price">5.63
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-620M+%40+2.67GHz&amp;id=849#price">$355.00*</a></td></tr><tr id="cpu857" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-620UM+%40+1.07GHz&amp;id=857">Intel Core i7-620UM @ 1.07GHz
</a></td><td>964</td><td>2586</td><td>NA</td><td>NA</td></tr><tr id="cpu848" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-640LM+%40+2.13GHz&amp;id=848">Intel Core i7-640LM @ 2.13GHz
</a></td><td>1,680</td><td>2055</td><td>NA</td><td>NA</td></tr><tr id="cpu850" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-640M+%40+2.80GHz&amp;id=850">Intel Core i7-640M @ 2.80GHz
</a></td><td>2,036</td><td>1842</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-640M+%40+2.80GHz&amp;id=850#price">10.72
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-640M+%40+2.80GHz&amp;id=850#price">$189.95</a></td></tr><tr id="cpu858" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-640UM+%40+1.20GHz&amp;id=858">Intel Core i7-640UM @ 1.20GHz
</a></td><td>1,090</td><td>2471</td><td>NA</td><td>NA</td></tr><tr id="cpu859" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-660UM+%40+1.33GHz&amp;id=859">Intel Core i7-660UM @ 1.33GHz
</a></td><td>1,272</td><td>2323</td><td>NA</td><td>NA</td></tr><tr id="cpu860" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-680UM+%40+1.47GHz&amp;id=860">Intel Core i7-680UM @ 1.47GHz
</a></td><td>1,046</td><td>2511</td><td>NA</td><td>NA</td></tr><tr id="cpu851" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-720QM+%40+1.60GHz&amp;id=851">Intel Core i7-720QM @ 1.60GHz
</a></td><td>1,649</td><td>2077</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-720QM+%40+1.60GHz&amp;id=851#price">16.50
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-720QM+%40+1.60GHz&amp;id=851#price">$99.95</a></td></tr><tr id="cpu852" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-740QM+%40+1.73GHz&amp;id=852">Intel Core i7-740QM @ 1.73GHz
</a></td><td>1,754</td><td>2007</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-740QM+%40+1.73GHz&amp;id=852#price">17.54
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-740QM+%40+1.73GHz&amp;id=852#price">$99.95*</a></td></tr><tr id="cpu853" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-820QM+%40+1.73GHz&amp;id=853">Intel Core i7-820QM @ 1.73GHz
</a></td><td>1,737</td><td>2013</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-820QM+%40+1.73GHz&amp;id=853#price">13.46
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-820QM+%40+1.73GHz&amp;id=853#price">$129.00*</a></td></tr><tr id="cpu854" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-840QM+%40+1.87GHz&amp;id=854">Intel Core i7-840QM @ 1.87GHz
</a></td><td>1,905</td><td>1920</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-840QM+%40+1.87GHz&amp;id=854#price">6.57
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-840QM+%40+1.87GHz&amp;id=854#price">$289.97*</a></td></tr><tr id="cpu6" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-860+%40+2.80GHz&amp;id=6">Intel Core i7-860 @ 2.80GHz
</a></td><td>2,861</td><td>1486</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-860+%40+2.80GHz&amp;id=6#price">65.04
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-860+%40+2.80GHz&amp;id=6#price">$43.99*</a></td></tr><tr id="cpu855" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-860S+%40+2.53GHz&amp;id=855">Intel Core i7-860S @ 2.53GHz
</a></td><td>2,725</td><td>1535</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-860S+%40+2.53GHz&amp;id=855#price">10.90
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-860S+%40+2.53GHz&amp;id=855#price">$250.00</a></td></tr><tr id="cpu832" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-870+%40+2.93GHz&amp;id=832">Intel Core i7-870 @ 2.93GHz
</a></td><td>3,056</td><td>1423</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-870+%40+2.93GHz&amp;id=832#price">53.63
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-870+%40+2.93GHz&amp;id=832#price">$56.99</a></td></tr><tr id="cpu856" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-870S+%40+2.67GHz&amp;id=856">Intel Core i7-870S @ 2.67GHz
</a></td><td>2,786</td><td>1514</td><td>NA</td><td>NA</td></tr><tr id="cpu846" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-875K+%40+2.93GHz&amp;id=846">Intel Core i7-875K @ 2.93GHz
</a></td><td>3,078</td><td>1415</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-875K+%40+2.93GHz&amp;id=846#price">8.23
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-875K+%40+2.93GHz&amp;id=846#price">$373.99</a></td></tr><tr id="cpu833" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-880+%40+3.07GHz&amp;id=833">Intel Core i7-880 @ 3.07GHz
</a></td><td>2,803</td><td>1507</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-880+%40+3.07GHz&amp;id=833#price">8.27
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-880+%40+3.07GHz&amp;id=833#price">$338.97</a></td></tr><tr id="cpu834" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-920+%40+2.67GHz&amp;id=834">Intel Core i7-920 @ 2.67GHz
</a></td><td>2,711</td><td>1540</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-920+%40+2.67GHz&amp;id=834#price">11.58
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-920+%40+2.67GHz&amp;id=834#price">$234.02</a></td></tr><tr id="cpu864" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-920XM+%40+2.00GHz&amp;id=864">Intel Core i7-920XM @ 2.00GHz
</a></td><td>2,044</td><td>1836</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-920XM+%40+2.00GHz&amp;id=864#price">5.12
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-920XM+%40+2.00GHz&amp;id=864#price">$398.95*</a></td></tr><tr id="cpu835" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-930+%40+2.80GHz&amp;id=835">Intel Core i7-930 @ 2.80GHz
</a></td><td>2,868</td><td>1485</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-930+%40+2.80GHz&amp;id=835#price">75.48
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-930+%40+2.80GHz&amp;id=835#price">$38.00</a></td></tr><tr id="cpu836" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-940+%40+2.93GHz&amp;id=836">Intel Core i7-940 @ 2.93GHz
</a></td><td>3,075</td><td>1416</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-940+%40+2.93GHz&amp;id=836#price">55.92
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-940+%40+2.93GHz&amp;id=836#price">$54.98</a></td></tr><tr id="cpu865" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-940XM+%40+2.13GHz&amp;id=865">Intel Core i7-940XM @ 2.13GHz
</a></td><td>2,367</td><td>1663</td><td>NA</td><td>NA</td></tr><tr id="cpu837" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-950+%40+3.07GHz&amp;id=837">Intel Core i7-950 @ 3.07GHz
</a></td><td>3,106</td><td>1403</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-950+%40+3.07GHz&amp;id=837#price">11.50
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-950+%40+3.07GHz&amp;id=837#price">$270.00*</a></td></tr><tr id="cpu838" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-960+%40+3.20GHz&amp;id=838">Intel Core i7-960 @ 3.20GHz
</a></td><td>3,255</td><td>1354</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-960+%40+3.20GHz&amp;id=838#price">24.20
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-960+%40+3.20GHz&amp;id=838#price">$134.48</a></td></tr><tr id="cpu839" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-965+%40+3.20GHz&amp;id=839">Intel Core i7-965 @ 3.20GHz
</a></td><td>3,288</td><td>1342</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-965+%40+3.20GHz&amp;id=839#price">36.14
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-965+%40+3.20GHz&amp;id=839#price">$90.99</a></td></tr><tr id="cpu840" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-970+%40+3.20GHz&amp;id=840">Intel Core i7-970 @ 3.20GHz
</a></td><td>6,747</td><td>804</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-970+%40+3.20GHz&amp;id=840#price">12.98
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-970+%40+3.20GHz&amp;id=840#price">$520.00</a></td></tr><tr id="cpu841" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-975+%40+3.33GHz&amp;id=841">Intel Core i7-975 @ 3.33GHz
</a></td><td>3,311</td><td>1332</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-975+%40+3.33GHz&amp;id=841#price">25.47
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-975+%40+3.33GHz&amp;id=841#price">$129.99</a></td></tr><tr id="cpu842" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-980+%40+3.33GHz&amp;id=842">Intel Core i7-980 @ 3.33GHz
</a></td><td>7,023</td><td>761</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-980+%40+3.33GHz&amp;id=842#price">4.68
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-980+%40+3.33GHz&amp;id=842#price">$1,500.19</a></td></tr><tr id="cpu866" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-980X+%40+3.33GHz&amp;id=866">Intel Core i7-980X @ 3.33GHz
</a></td><td>6,745</td><td>805</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-980X+%40+3.33GHz&amp;id=866#price">44.97
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-980X+%40+3.33GHz&amp;id=866#price">$149.98</a></td></tr><tr id="cpu2425" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-985+%40+3.47GHz&amp;id=2425">Intel Core i7-985 @ 3.47GHz
</a></td><td>3,928</td><td>1207</td><td>NA</td><td>NA</td></tr><tr id="cpu867" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-990X+%40+3.47GHz&amp;id=867">Intel Core i7-990X @ 3.47GHz
</a></td><td>7,262</td><td>731</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-990X+%40+3.47GHz&amp;id=867#price">4.84
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-990X+%40+3.47GHz&amp;id=867#price">$1,500.19</a></td></tr><tr id="cpu1664" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-995X+%40+3.60GHz&amp;id=1664">Intel Core i7-995X @ 3.60GHz
</a></td><td>7,079</td><td>751</td><td>NA</td><td>NA</td></tr><tr id="cpu3727" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-1060NG7+%40+1.20GHz&amp;id=3727">Intel Core i7-1060NG7 @ 1.20GHz
</a></td><td>7,316</td><td>723</td><td>NA</td><td>NA</td></tr><tr id="cpu3466" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-1065G7+%40+1.30GHz&amp;id=3466">Intel Core i7-1065G7 @ 1.30GHz
</a></td><td>8,842</td><td>593</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-1065G7+%40+1.30GHz&amp;id=3466#price">20.76
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-1065G7+%40+1.30GHz&amp;id=3466#price">$426.00*</a></td></tr><tr id="cpu3729" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-1068NG7+%40+2.30GHz&amp;id=3729">Intel Core i7-1068NG7 @ 2.30GHz
</a></td><td>10,387</td><td>507</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-1068NG7+%40+2.30GHz&amp;id=3729#price">24.38
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-1068NG7+%40+2.30GHz&amp;id=3729#price">$426.00*</a></td></tr><tr id="cpu3911" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-1160G7+%40+1.20GHz&amp;id=3911">Intel Core i7-1160G7 @ 1.20GHz
</a></td><td>10,981</td><td>478</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-1160G7+%40+1.20GHz&amp;id=3911#price">25.78
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-1160G7+%40+1.20GHz&amp;id=3911#price">$426.00*</a></td></tr><tr id="cpu3814" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-1165G7+%40+2.80GHz&amp;id=3814">Intel Core i7-1165G7 @ 2.80GHz
</a></td><td>10,629</td><td>496</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-1165G7+%40+2.80GHz&amp;id=3814#price">24.95
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-1165G7+%40+2.80GHz&amp;id=3814#price">$426.00*</a></td></tr><tr id="cpu3793" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-1185G7+%40+3.00GHz&amp;id=3793">Intel Core i7-1185G7 @ 3.00GHz
</a></td><td>10,949</td><td>480</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-1185G7+%40+3.00GHz&amp;id=3793#price">25.70
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-1185G7+%40+3.00GHz&amp;id=3793#price">$426.00*</a></td></tr><tr id="cpu4298" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-1185G7E+%40+2.80GHz&amp;id=4298">Intel Core i7-1185G7E @ 2.80GHz
</a></td><td>11,645</td><td>450</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-1185G7E+%40+2.80GHz&amp;id=4298#price">27.02
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-1185G7E+%40+2.80GHz&amp;id=4298#price">$431.00*</a></td></tr><tr id="cpu4305" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-1185GRE+%40+2.80GHz&amp;id=4305">Intel Core i7-1185GRE @ 2.80GHz
</a></td><td>6,107</td><td>885</td><td>NA</td><td>NA</td></tr><tr id="cpu1" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-2600+%40+3.40GHz&amp;id=1">Intel Core i7-2600 @ 3.40GHz
</a></td><td>5,325</td><td>978</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-2600+%40+3.40GHz&amp;id=1#price">36.00
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-2600+%40+3.40GHz&amp;id=1#price">$147.91</a></td></tr><tr id="cpu868" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-2600K+%40+3.40GHz&amp;id=868">Intel Core i7-2600K @ 3.40GHz
</a></td><td>5,457</td><td>962</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-2600K+%40+3.40GHz&amp;id=868#price">33.65
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-2600K+%40+3.40GHz&amp;id=868#price">$162.16</a></td></tr><tr id="cpu869" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-2600S+%40+2.80GHz&amp;id=869">Intel Core i7-2600S @ 2.80GHz
</a></td><td>4,368</td><td>1126</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-2600S+%40+2.80GHz&amp;id=869#price">15.22
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-2600S+%40+2.80GHz&amp;id=869#price">$287.00</a></td></tr><tr id="cpu870" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-2610UE+%40+1.50GHz&amp;id=870">Intel Core i7-2610UE @ 1.50GHz
</a></td><td>1,409</td><td>2228</td><td>NA</td><td>NA</td></tr><tr id="cpu871" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-2617M+%40+1.50GHz&amp;id=871">Intel Core i7-2617M @ 1.50GHz
</a></td><td>1,687</td><td>2050</td><td>NA</td><td>NA</td></tr><tr id="cpu872" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-2620M+%40+2.70GHz&amp;id=872">Intel Core i7-2620M @ 2.70GHz
</a></td><td>2,409</td><td>1648</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-2620M+%40+2.70GHz&amp;id=872#price">15.07
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-2620M+%40+2.70GHz&amp;id=872#price">$159.81</a></td></tr><tr id="cpu873" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-2630QM+%40+2.00GHz&amp;id=873">Intel Core i7-2630QM @ 2.00GHz
</a></td><td>3,535</td><td>1284</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-2630QM+%40+2.00GHz&amp;id=873#price">37.60
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-2630QM+%40+2.00GHz&amp;id=873#price">$94.02*</a></td></tr><tr id="cpu2013" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-2630UM+%40+1.60GHz&amp;id=2013">Intel Core i7-2630UM @ 1.60GHz
</a></td><td>400</td><td>3125</td><td>NA</td><td>NA</td></tr><tr id="cpu874" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-2635QM+%40+2.00GHz&amp;id=874">Intel Core i7-2635QM @ 2.00GHz
</a></td><td>3,370</td><td>1320</td><td>NA</td><td>NA</td></tr><tr id="cpu875" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-2637M+%40+1.70GHz&amp;id=875">Intel Core i7-2637M @ 1.70GHz
</a></td><td>1,927</td><td>1904</td><td>NA</td><td>NA</td></tr><tr id="cpu876" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-2640M+%40+2.80GHz&amp;id=876">Intel Core i7-2640M @ 2.80GHz
</a></td><td>2,449</td><td>1634</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-2640M+%40+2.80GHz&amp;id=876#price">20.41
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-2640M+%40+2.80GHz&amp;id=876#price">$119.95</a></td></tr><tr id="cpu877" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-2655LE+%40+2.20GHz&amp;id=877">Intel Core i7-2655LE @ 2.20GHz
</a></td><td>1,999</td><td>1867</td><td>NA</td><td>NA</td></tr><tr id="cpu878" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-2670QM+%40+2.20GHz&amp;id=878">Intel Core i7-2670QM @ 2.20GHz
</a></td><td>3,814</td><td>1225</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-2670QM+%40+2.20GHz&amp;id=878#price">29.56
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-2670QM+%40+2.20GHz&amp;id=878#price">$129.00</a></td></tr><tr id="cpu879" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-2675QM+%40+2.20GHz&amp;id=879">Intel Core i7-2675QM @ 2.20GHz
</a></td><td>3,274</td><td>1348</td><td>NA</td><td>NA</td></tr><tr id="cpu880" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-2677M+%40+1.80GHz&amp;id=880">Intel Core i7-2677M @ 1.80GHz
</a></td><td>1,993</td><td>1873</td><td>NA</td><td>NA</td></tr><tr id="cpu881" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-2700K+%40+3.50GHz&amp;id=881">Intel Core i7-2700K @ 3.50GHz
</a></td><td>5,630</td><td>944</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-2700K+%40+3.50GHz&amp;id=881#price">25.25
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-2700K+%40+3.50GHz&amp;id=881#price">$223.00</a></td></tr><tr id="cpu882" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-2710QE+%40+2.10GHz&amp;id=882">Intel Core i7-2710QE @ 2.10GHz
</a></td><td>3,704</td><td>1247</td><td>NA</td><td>NA</td></tr><tr id="cpu1478" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-2715QE+%40+2.10GHz&amp;id=1478">Intel Core i7-2715QE @ 2.10GHz
</a></td><td>3,221</td><td>1367</td><td>NA</td><td>NA</td></tr><tr id="cpu883" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-2720QM+%40+2.20GHz&amp;id=883">Intel Core i7-2720QM @ 2.20GHz
</a></td><td>4,010</td><td>1191</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-2720QM+%40+2.20GHz&amp;id=883#price">22.28
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-2720QM+%40+2.20GHz&amp;id=883#price">$179.95*</a></td></tr><tr id="cpu884" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-2760QM+%40+2.40GHz&amp;id=884">Intel Core i7-2760QM @ 2.40GHz
</a></td><td>4,427</td><td>1116</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-2760QM+%40+2.40GHz&amp;id=884#price">32.08
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-2760QM+%40+2.40GHz&amp;id=884#price">$138.02</a></td></tr><tr id="cpu885" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-2820QM+%40+2.30GHz&amp;id=885">Intel Core i7-2820QM @ 2.30GHz
</a></td><td>4,306</td><td>1137</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-2820QM+%40+2.30GHz&amp;id=885#price">25.63
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-2820QM+%40+2.30GHz&amp;id=885#price">$168.02*</a></td></tr><tr id="cpu1479" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-2840QM+%40+2.40GHz&amp;id=1479">Intel Core i7-2840QM @ 2.40GHz
</a></td><td>3,842</td><td>1217</td><td>NA</td><td>NA</td></tr><tr id="cpu886" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-2860QM+%40+2.50GHz&amp;id=886">Intel Core i7-2860QM @ 2.50GHz
</a></td><td>4,552</td><td>1093</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-2860QM+%40+2.50GHz&amp;id=886#price">25.01
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-2860QM+%40+2.50GHz&amp;id=886#price">$182.01*</a></td></tr><tr id="cpu887" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-2920XM+%40+2.50GHz&amp;id=887">Intel Core i7-2920XM @ 2.50GHz
</a></td><td>4,398</td><td>1119</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-2920XM+%40+2.50GHz&amp;id=887#price">36.65
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-2920XM+%40+2.50GHz&amp;id=887#price">$120.00*</a></td></tr><tr id="cpu888" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-2960XM+%40+2.70GHz&amp;id=888">Intel Core i7-2960XM @ 2.70GHz
</a></td><td>4,344</td><td>1130</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-2960XM+%40+2.70GHz&amp;id=888#price">10.60
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-2960XM+%40+2.70GHz&amp;id=888#price">$409.95*</a></td></tr><tr id="cpu889" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-3517U+%40+1.90GHz&amp;id=889">Intel Core i7-3517U @ 1.90GHz
</a></td><td>2,176</td><td>1771</td><td>NA</td><td>NA</td></tr><tr id="cpu1435" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-3517UE+%40+1.70GHz&amp;id=1435">Intel Core i7-3517UE @ 1.70GHz
</a></td><td>2,141</td><td>1788</td><td>NA</td><td>NA</td></tr><tr id="cpu890" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-3520M+%40+2.90GHz&amp;id=890">Intel Core i7-3520M @ 2.90GHz
</a></td><td>2,869</td><td>1484</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-3520M+%40+2.90GHz&amp;id=890#price">23.51
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-3520M+%40+2.90GHz&amp;id=890#price">$122.02*</a></td></tr><tr id="cpu1845" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-3537U+%40+2.00GHz&amp;id=1845">Intel Core i7-3537U @ 2.00GHz
</a></td><td>2,393</td><td>1653</td><td>NA</td><td>NA</td></tr><tr id="cpu1857" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-3540M+%40+3.00GHz&amp;id=1857">Intel Core i7-3540M @ 3.00GHz
</a></td><td>2,856</td><td>1488</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-3540M+%40+3.00GHz&amp;id=1857#price">22.31
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-3540M+%40+3.00GHz&amp;id=1857#price">$128.02</a></td></tr><tr id="cpu1895" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-3555LE+%40+2.50GHz&amp;id=1895">Intel Core i7-3555LE @ 2.50GHz
</a></td><td>1,880</td><td>1938</td><td>NA</td><td>NA</td></tr><tr id="cpu1792" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-3610QE+%40+2.30GHz&amp;id=1792">Intel Core i7-3610QE @ 2.30GHz
</a></td><td>4,767</td><td>1061</td><td>NA</td><td>NA</td></tr><tr id="cpu891" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-3610QM+%40+2.30GHz&amp;id=891">Intel Core i7-3610QM @ 2.30GHz
</a></td><td>5,110</td><td>1016</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-3610QM+%40+2.30GHz&amp;id=891#price">12.77
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-3610QM+%40+2.30GHz&amp;id=891#price">$399.99*</a></td></tr><tr id="cpu1666" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-3612QE+%40+2.10GHz&amp;id=1666">Intel Core i7-3612QE @ 2.10GHz
</a></td><td>4,783</td><td>1060</td><td>NA</td><td>NA</td></tr><tr id="cpu892" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-3612QM+%40+2.10GHz&amp;id=892">Intel Core i7-3612QM @ 2.10GHz
</a></td><td>4,471</td><td>1112</td><td>NA</td><td>NA</td></tr><tr id="cpu1888" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-3615QE+%40+2.30GHz&amp;id=1888">Intel Core i7-3615QE @ 2.30GHz
</a></td><td>5,308</td><td>982</td><td>NA</td><td>NA</td></tr><tr id="cpu893" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-3615QM+%40+2.30GHz&amp;id=893">Intel Core i7-3615QM @ 2.30GHz
</a></td><td>5,124</td><td>1013</td><td>NA</td><td>NA</td></tr><tr id="cpu1444" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-3630QM+%40+2.40GHz&amp;id=1444">Intel Core i7-3630QM @ 2.40GHz
</a></td><td>5,104</td><td>1018</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-3630QM+%40+2.40GHz&amp;id=1444#price">22.29
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-3630QM+%40+2.40GHz&amp;id=1444#price">$229.00*</a></td></tr><tr id="cpu1480" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-3632QM+%40+2.20GHz&amp;id=1480">Intel Core i7-3632QM @ 2.20GHz
</a></td><td>4,579</td><td>1090</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-3632QM+%40+2.20GHz&amp;id=1480#price">25.72
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-3632QM+%40+2.20GHz&amp;id=1480#price">$178.02</a></td></tr><tr id="cpu1784" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-3635QM+%40+2.40GHz&amp;id=1784">Intel Core i7-3635QM @ 2.40GHz
</a></td><td>4,705</td><td>1073</td><td>NA</td><td>NA</td></tr><tr id="cpu894" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-3667U+%40+2.00GHz&amp;id=894">Intel Core i7-3667U @ 2.00GHz
</a></td><td>2,520</td><td>1603</td><td>NA</td><td>NA</td></tr><tr id="cpu1840" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-3687U+%40+2.10GHz&amp;id=1840">Intel Core i7-3687U @ 2.10GHz
</a></td><td>2,636</td><td>1564</td><td>NA</td><td>NA</td></tr><tr id="cpu2037" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-3689Y+%40+1.50GHz&amp;id=2037">Intel Core i7-3689Y @ 1.50GHz
</a></td><td>1,642</td><td>2081</td><td>NA</td><td>NA</td></tr><tr id="cpu895" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-3720QM+%40+2.60GHz&amp;id=895">Intel Core i7-3720QM @ 2.60GHz
</a></td><td>5,615</td><td>947</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-3720QM+%40+2.60GHz&amp;id=895#price">15.91
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-3720QM+%40+2.60GHz&amp;id=895#price">$353.00*</a></td></tr><tr id="cpu1481" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-3740QM+%40+2.70GHz&amp;id=1481">Intel Core i7-3740QM @ 2.70GHz
</a></td><td>5,672</td><td>938</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-3740QM+%40+2.70GHz&amp;id=1481#price">26.02
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-3740QM+%40+2.70GHz&amp;id=1481#price">$218.02*</a></td></tr><tr id="cpu896" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-3770+%40+3.40GHz&amp;id=896">Intel Core i7-3770 @ 3.40GHz
</a></td><td>6,371</td><td>848</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-3770+%40+3.40GHz&amp;id=896#price">56.39
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-3770+%40+3.40GHz&amp;id=896#price">$112.98</a></td></tr><tr id="cpu2" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-3770K+%40+3.50GHz&amp;id=2">Intel Core i7-3770K @ 3.50GHz
</a></td><td>6,428</td><td>838</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-3770K+%40+3.50GHz&amp;id=2#price">28.75
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-3770K+%40+3.50GHz&amp;id=2#price">$223.61</a></td></tr><tr id="cpu897" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-3770S+%40+3.10GHz&amp;id=897">Intel Core i7-3770S @ 3.10GHz
</a></td><td>6,199</td><td>870</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-3770S+%40+3.10GHz&amp;id=897#price">48.48
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-3770S+%40+3.10GHz&amp;id=897#price">$127.88</a></td></tr><tr id="cpu898" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-3770T+%40+2.50GHz&amp;id=898">Intel Core i7-3770T @ 2.50GHz
</a></td><td>5,587</td><td>950</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-3770T+%40+2.50GHz&amp;id=898#price">30.65
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-3770T+%40+2.50GHz&amp;id=898#price">$182.28</a></td></tr><tr id="cpu8" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-3820+%40+3.60GHz&amp;id=8">Intel Core i7-3820 @ 3.60GHz
</a></td><td>5,756</td><td>930</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-3820+%40+3.60GHz&amp;id=8#price">48.02
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-3820+%40+3.60GHz&amp;id=8#price">$119.86</a></td></tr><tr id="cpu899" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-3820QM+%40+2.70GHz&amp;id=899">Intel Core i7-3820QM @ 2.70GHz
</a></td><td>5,677</td><td>936</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-3820QM+%40+2.70GHz&amp;id=899#price">20.64
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-3820QM+%40+2.70GHz&amp;id=899#price">$275.00*</a></td></tr><tr id="cpu900" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-3840QM+%40+2.80GHz&amp;id=900">Intel Core i7-3840QM @ 2.80GHz
</a></td><td>5,943</td><td>907</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-3840QM+%40+2.80GHz&amp;id=900#price">10.83
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-3840QM+%40+2.80GHz&amp;id=900#price">$548.87*</a></td></tr><tr id="cpu901" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-3920XM+%40+2.90GHz&amp;id=901">Intel Core i7-3920XM @ 2.90GHz
</a></td><td>5,757</td><td>929</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-3920XM+%40+2.90GHz&amp;id=901#price">5.25
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-3920XM+%40+2.90GHz&amp;id=901#price">$1,096.00*</a></td></tr><tr id="cpu902" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-3930K+%40+3.20GHz&amp;id=902">Intel Core i7-3930K @ 3.20GHz
</a></td><td>8,125</td><td>643</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-3930K+%40+3.20GHz&amp;id=902#price">17.66
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-3930K+%40+3.20GHz&amp;id=902#price">$460.00</a></td></tr><tr id="cpu1482" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-3940XM+%40+3.00GHz&amp;id=1482">Intel Core i7-3940XM @ 3.00GHz
</a></td><td>5,697</td><td>934</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-3940XM+%40+3.00GHz&amp;id=1482#price">16.56
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-3940XM+%40+3.00GHz&amp;id=1482#price">$344.04</a></td></tr><tr id="cpu903" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-3960X+%40+3.30GHz&amp;id=903">Intel Core i7-3960X @ 3.30GHz
</a></td><td>8,612</td><td>606</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-3960X+%40+3.30GHz&amp;id=903#price">4.66
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-3960X+%40+3.30GHz&amp;id=903#price">$1,850.00</a></td></tr><tr id="cpu1799" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-3970X+%40+3.50GHz&amp;id=1799">Intel Core i7-3970X @ 3.50GHz
</a></td><td>8,262</td><td>631</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-3970X+%40+3.50GHz&amp;id=1799#price">43.49
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-3970X+%40+3.50GHz&amp;id=1799#price">$189.99</a></td></tr><tr id="cpu1937" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4500U+%40+1.80GHz&amp;id=1937">Intel Core i7-4500U @ 1.80GHz
</a></td><td>2,532</td><td>1598</td><td>NA</td><td>NA</td></tr><tr id="cpu2248" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4510U+%40+2.00GHz&amp;id=2248">Intel Core i7-4510U @ 2.00GHz
</a></td><td>2,584</td><td>1582</td><td>NA</td><td>NA</td></tr><tr id="cpu2168" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4550U+%40+1.50GHz&amp;id=2168">Intel Core i7-4550U @ 1.50GHz
</a></td><td>2,354</td><td>1673</td><td>NA</td><td>NA</td></tr><tr id="cpu2094" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4558U+%40+2.80GHz&amp;id=2094">Intel Core i7-4558U @ 2.80GHz
</a></td><td>2,941</td><td>1458</td><td>NA</td><td>NA</td></tr><tr id="cpu2719" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4560U+%40+1.60GHz&amp;id=2719">Intel Core i7-4560U @ 1.60GHz
</a></td><td>2,950</td><td>1450</td><td>NA</td><td>NA</td></tr><tr id="cpu2345" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4578U+%40+3.00GHz&amp;id=2345">Intel Core i7-4578U @ 3.00GHz
</a></td><td>3,188</td><td>1374</td><td>NA</td><td>NA</td></tr><tr id="cpu2056" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4600M+%40+2.90GHz&amp;id=2056">Intel Core i7-4600M @ 2.90GHz
</a></td><td>3,258</td><td>1353</td><td>NA</td><td>NA</td></tr><tr id="cpu2033" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4600U+%40+2.10GHz&amp;id=2033">Intel Core i7-4600U @ 2.10GHz
</a></td><td>2,702</td><td>1545</td><td>NA</td><td>NA</td></tr><tr id="cpu2261" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4610M+%40+3.00GHz&amp;id=2261">Intel Core i7-4610M @ 3.00GHz
</a></td><td>3,128</td><td>1398</td><td>NA</td><td>NA</td></tr><tr id="cpu2092" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4610Y+%40+1.70GHz&amp;id=2092">Intel Core i7-4610Y @ 1.70GHz
</a></td><td>2,446</td><td>1637</td><td>NA</td><td>NA</td></tr><tr id="cpu1955" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4650U+%40+1.70GHz&amp;id=1955">Intel Core i7-4650U @ 1.70GHz
</a></td><td>2,328</td><td>1686</td><td>NA</td><td>NA</td></tr><tr id="cpu1897" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4700EQ+%40+2.40GHz&amp;id=1897">Intel Core i7-4700EQ @ 2.40GHz
</a></td><td>4,941</td><td>1035</td><td>NA</td><td>NA</td></tr><tr id="cpu1949" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4700HQ+%40+2.40GHz&amp;id=1949">Intel Core i7-4700HQ @ 2.40GHz
</a></td><td>5,481</td><td>960</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4700HQ+%40+2.40GHz&amp;id=1949#price">14.31
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4700HQ+%40+2.40GHz&amp;id=1949#price">$383.00*</a></td></tr><tr id="cpu1923" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4700MQ+%40+2.40GHz&amp;id=1923">Intel Core i7-4700MQ @ 2.40GHz
</a></td><td>5,311</td><td>980</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4700MQ+%40+2.40GHz&amp;id=1923#price">28.25
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4700MQ+%40+2.40GHz&amp;id=1923#price">$188.02*</a></td></tr><tr id="cpu2046" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4702HQ+%40+2.20GHz&amp;id=2046">Intel Core i7-4702HQ @ 2.20GHz
</a></td><td>5,160</td><td>1003</td><td>NA</td><td>NA</td></tr><tr id="cpu1939" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4702MQ+%40+2.20GHz&amp;id=1939">Intel Core i7-4702MQ @ 2.20GHz
</a></td><td>5,084</td><td>1019</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4702MQ+%40+2.20GHz&amp;id=1939#price">14.44
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4702MQ+%40+2.20GHz&amp;id=1939#price">$352.05*</a></td></tr><tr id="cpu2243" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4710HQ+%40+2.50GHz&amp;id=2243">Intel Core i7-4710HQ @ 2.50GHz
</a></td><td>5,451</td><td>964</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4710HQ+%40+2.50GHz&amp;id=2243#price">14.42
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4710HQ+%40+2.50GHz&amp;id=2243#price">$378.00*</a></td></tr><tr id="cpu2219" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4710MQ+%40+2.50GHz&amp;id=2219">Intel Core i7-4710MQ @ 2.50GHz
</a></td><td>5,802</td><td>924</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4710MQ+%40+2.50GHz&amp;id=2219#price">21.37
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4710MQ+%40+2.50GHz&amp;id=2219#price">$271.57*</a></td></tr><tr id="cpu2281" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4712HQ+%40+2.30GHz&amp;id=2281">Intel Core i7-4712HQ @ 2.30GHz
</a></td><td>4,994</td><td>1029</td><td>NA</td><td>NA</td></tr><tr id="cpu2228" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4712MQ+%40+2.30GHz&amp;id=2228">Intel Core i7-4712MQ @ 2.30GHz
</a></td><td>5,151</td><td>1008</td><td>NA</td><td>NA</td></tr><tr id="cpu2448" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4720HQ+%40+2.60GHz&amp;id=2448">Intel Core i7-4720HQ @ 2.60GHz
</a></td><td>5,725</td><td>931</td><td>NA</td><td>NA</td></tr><tr id="cpu2562" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4722HQ+%40+2.40GHz&amp;id=2562">Intel Core i7-4722HQ @ 2.40GHz
</a></td><td>5,620</td><td>946</td><td>NA</td><td>NA</td></tr><tr id="cpu1957" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4750HQ+%40+2.00GHz&amp;id=1957">Intel Core i7-4750HQ @ 2.00GHz
</a></td><td>5,650</td><td>940</td><td>NA</td><td>NA</td></tr><tr id="cpu2378" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4760HQ+%40+2.10GHz&amp;id=2378">Intel Core i7-4760HQ @ 2.10GHz
</a></td><td>6,300</td><td>857</td><td>NA</td><td>NA</td></tr><tr id="cpu2067" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4765T+%40+2.00GHz&amp;id=2067">Intel Core i7-4765T @ 2.00GHz
</a></td><td>4,937</td><td>1036</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4765T+%40+2.00GHz&amp;id=2067#price">9.89
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4765T+%40+2.00GHz&amp;id=2067#price">$498.95</a></td></tr><tr id="cpu1907" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4770+%40+3.40GHz&amp;id=1907">Intel Core i7-4770 @ 3.40GHz
</a></td><td>7,038</td><td>757</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4770+%40+3.40GHz&amp;id=1907#price">47.88
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4770+%40+3.40GHz&amp;id=1907#price">$146.99</a></td></tr><tr id="cpu2399" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4770HQ+%40+2.20GHz&amp;id=2399">Intel Core i7-4770HQ @ 2.20GHz
</a></td><td>6,139</td><td>877</td><td>NA</td><td>NA</td></tr><tr id="cpu1919" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4770K+%40+3.50GHz&amp;id=1919">Intel Core i7-4770K @ 3.50GHz
</a></td><td>7,083</td><td>750</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4770K+%40+3.50GHz&amp;id=1919#price">10.57
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4770K+%40+3.50GHz&amp;id=1919#price">$669.99*</a></td></tr><tr id="cpu2137" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4770R+%40+3.20GHz&amp;id=2137">Intel Core i7-4770R @ 3.20GHz
</a></td><td>6,464</td><td>832</td><td>NA</td><td>NA</td></tr><tr id="cpu1884" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4770S+%40+3.10GHz&amp;id=1884">Intel Core i7-4770S @ 3.10GHz
</a></td><td>6,740</td><td>806</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4770S+%40+3.10GHz&amp;id=1884#price">7.49
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4770S+%40+3.10GHz&amp;id=1884#price">$900.00</a></td></tr><tr id="cpu2006" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4770T+%40+2.50GHz&amp;id=2006">Intel Core i7-4770T @ 2.50GHz
</a></td><td>6,038</td><td>896</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4770T+%40+2.50GHz&amp;id=2006#price">7.81
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4770T+%40+2.50GHz&amp;id=2006#price">$772.71</a></td></tr><tr id="cpu2561" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4770TE+%40+2.30GHz&amp;id=2561">Intel Core i7-4770TE @ 2.30GHz
</a></td><td>4,257</td><td>1145</td><td>NA</td><td>NA</td></tr><tr id="cpu2027" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4771+%40+3.50GHz&amp;id=2027">Intel Core i7-4771 @ 3.50GHz
</a></td><td>7,008</td><td>767</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4771+%40+3.50GHz&amp;id=2027#price">28.07
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4771+%40+3.50GHz&amp;id=2027#price">$249.70</a></td></tr><tr id="cpu2260" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4785T+%40+2.20GHz&amp;id=2260">Intel Core i7-4785T @ 2.20GHz
</a></td><td>5,396</td><td>971</td><td>NA</td><td>NA</td></tr><tr id="cpu2226" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4790+%40+3.60GHz&amp;id=2226">Intel Core i7-4790 @ 3.60GHz
</a></td><td>7,214</td><td>736</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4790+%40+3.60GHz&amp;id=2226#price">40.08
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4790+%40+3.60GHz&amp;id=2226#price">$179.99</a></td></tr><tr id="cpu2275" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4790K+%40+4.00GHz&amp;id=2275">Intel Core i7-4790K @ 4.00GHz
</a></td><td>8,056</td><td>648</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4790K+%40+4.00GHz&amp;id=2275#price">31.59
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4790K+%40+4.00GHz&amp;id=2275#price">$255.00</a></td></tr><tr id="cpu2258" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4790S+%40+3.20GHz&amp;id=2258">Intel Core i7-4790S @ 3.20GHz
</a></td><td>6,956</td><td>774</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4790S+%40+3.20GHz&amp;id=2258#price">19.15
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4790S+%40+3.20GHz&amp;id=2258#price">$363.23</a></td></tr><tr id="cpu2253" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4790T+%40+2.70GHz&amp;id=2253">Intel Core i7-4790T @ 2.70GHz
</a></td><td>6,347</td><td>851</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4790T+%40+2.70GHz&amp;id=2253#price">31.75
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4790T+%40+2.70GHz&amp;id=2253#price">$199.88*</a></td></tr><tr id="cpu1927" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4800MQ+%40+2.70GHz&amp;id=1927">Intel Core i7-4800MQ @ 2.70GHz
</a></td><td>5,866</td><td>920</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4800MQ+%40+2.70GHz&amp;id=1927#price">30.22
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4800MQ+%40+2.70GHz&amp;id=1927#price">$194.10*</a></td></tr><tr id="cpu2196" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4810MQ+%40+2.80GHz&amp;id=2196">Intel Core i7-4810MQ @ 2.80GHz
</a></td><td>6,100</td><td>886</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4810MQ+%40+2.80GHz&amp;id=2196#price">33.90
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4810MQ+%40+2.80GHz&amp;id=2196#price">$179.95</a></td></tr><tr id="cpu2030" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4820K+%40+3.70GHz&amp;id=2030">Intel Core i7-4820K @ 3.70GHz
</a></td><td>6,486</td><td>829</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4820K+%40+3.70GHz&amp;id=2030#price">43.24
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4820K+%40+3.70GHz&amp;id=2030#price">$149.99</a></td></tr><tr id="cpu2070" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4850HQ+%40+2.30GHz&amp;id=2070">Intel Core i7-4850HQ @ 2.30GHz
</a></td><td>6,136</td><td>878</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4850HQ+%40+2.30GHz&amp;id=2070#price">14.14
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4850HQ+%40+2.30GHz&amp;id=2070#price">$434.00*</a></td></tr><tr id="cpu2661" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4860EQ+%40+1.80GHz&amp;id=2661">Intel Core i7-4860EQ @ 1.80GHz
</a></td><td>5,280</td><td>988</td><td>NA</td><td>NA</td></tr><tr id="cpu2319" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4860HQ+%40+2.40GHz&amp;id=2319">Intel Core i7-4860HQ @ 2.40GHz
</a></td><td>6,084</td><td>890</td><td>NA</td><td>NA</td></tr><tr id="cpu2314" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4870HQ+%40+2.50GHz&amp;id=2314">Intel Core i7-4870HQ @ 2.50GHz
</a></td><td>6,366</td><td>849</td><td>NA</td><td>NA</td></tr><tr id="cpu1938" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4900MQ+%40+2.80GHz&amp;id=1938">Intel Core i7-4900MQ @ 2.80GHz
</a></td><td>6,001</td><td>899</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4900MQ+%40+2.80GHz&amp;id=1938#price">10.23
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4900MQ+%40+2.80GHz&amp;id=1938#price">$586.67*</a></td></tr><tr id="cpu2220" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4910MQ+%40+2.90GHz&amp;id=2220">Intel Core i7-4910MQ @ 2.90GHz
</a></td><td>6,248</td><td>863</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4910MQ+%40+2.90GHz&amp;id=2220#price">13.58
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4910MQ+%40+2.90GHz&amp;id=2220#price">$459.95*</a></td></tr><tr id="cpu2023" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4930K+%40+3.40GHz&amp;id=2023">Intel Core i7-4930K @ 3.40GHz
</a></td><td>9,296</td><td>565</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4930K+%40+3.40GHz&amp;id=2023#price">51.65
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4930K+%40+3.40GHz&amp;id=2023#price">$179.99</a></td></tr><tr id="cpu1985" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4930MX+%40+3.00GHz&amp;id=1985">Intel Core i7-4930MX @ 3.00GHz
</a></td><td>6,753</td><td>803</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4930MX+%40+3.00GHz&amp;id=1985#price">6.16
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4930MX+%40+3.00GHz&amp;id=1985#price">$1,096.00*</a></td></tr><tr id="cpu2186" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4940MX+%40+3.10GHz&amp;id=2186">Intel Core i7-4940MX @ 3.10GHz
</a></td><td>7,047</td><td>756</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4940MX+%40+3.10GHz&amp;id=2186#price">10.07
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4940MX+%40+3.10GHz&amp;id=2186#price">$699.95*</a></td></tr><tr id="cpu2087" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4960HQ+%40+2.60GHz&amp;id=2087">Intel Core i7-4960HQ @ 2.60GHz
</a></td><td>6,476</td><td>831</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4960HQ+%40+2.60GHz&amp;id=2087#price">10.40
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4960HQ+%40+2.60GHz&amp;id=2087#price">$623.00*</a></td></tr><tr id="cpu2026" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4960X+%40+3.60GHz&amp;id=2026">Intel Core i7-4960X @ 3.60GHz
</a></td><td>9,943</td><td>531</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4960X+%40+3.60GHz&amp;id=2026#price">5.37
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-4960X+%40+3.60GHz&amp;id=2026#price">$1,850.00</a></td></tr><tr id="cpu2327" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-4980HQ+%40+2.80GHz&amp;id=2327">Intel Core i7-4980HQ @ 2.80GHz
</a></td><td>6,655</td><td>811</td><td>NA</td><td>NA</td></tr><tr id="cpu2470" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-5500U+%40+2.40GHz&amp;id=2470">Intel Core i7-5500U @ 2.40GHz
</a></td><td>2,725</td><td>1536</td><td>NA</td><td>NA</td></tr><tr id="cpu2749" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-5550U+%40+2.00GHz&amp;id=2749">Intel Core i7-5550U @ 2.00GHz
</a></td><td>2,908</td><td>1467</td><td>NA</td><td>NA</td></tr><tr id="cpu2502" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-5557U+%40+3.10GHz&amp;id=2502">Intel Core i7-5557U @ 3.10GHz
</a></td><td>3,305</td><td>1334</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-5557U+%40+3.10GHz&amp;id=2502#price">5.45
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-5557U+%40+3.10GHz&amp;id=2502#price">$605.99*</a></td></tr><tr id="cpu2456" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-5600U+%40+2.60GHz&amp;id=2456">Intel Core i7-5600U @ 2.60GHz
</a></td><td>2,963</td><td>1448</td><td>NA</td><td>NA</td></tr><tr id="cpu2503" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-5650U+%40+2.20GHz&amp;id=2503">Intel Core i7-5650U @ 2.20GHz
</a></td><td>3,153</td><td>1389</td><td>NA</td><td>NA</td></tr><tr id="cpu2635" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-5675C+%40+3.10GHz&amp;id=2635">Intel Core i7-5675C @ 3.10GHz
</a></td><td>6,089</td><td>888</td><td>NA</td><td>NA</td></tr><tr id="cpu2573" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-5700EQ+%40+2.60GHz&amp;id=2573">Intel Core i7-5700EQ @ 2.60GHz
</a></td><td>5,905</td><td>914</td><td>NA</td><td>NA</td></tr><tr id="cpu2533" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-5700HQ+%40+2.70GHz&amp;id=2533">Intel Core i7-5700HQ @ 2.70GHz
</a></td><td>5,946</td><td>906</td><td>NA</td><td>NA</td></tr><tr id="cpu2539" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-5775C+%40+3.30GHz&amp;id=2539">Intel Core i7-5775C @ 3.30GHz
</a></td><td>7,794</td><td>671</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-5775C+%40+3.30GHz&amp;id=2539#price">13.34
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-5775C+%40+3.30GHz&amp;id=2539#price">$584.22</a></td></tr><tr id="cpu2767" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-5775R+%40+3.30GHz&amp;id=2767">Intel Core i7-5775R @ 3.30GHz
</a></td><td>7,373</td><td>715</td><td>NA</td><td>NA</td></tr><tr id="cpu2340" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-5820K+%40+3.30GHz&amp;id=2340">Intel Core i7-5820K @ 3.30GHz
</a></td><td>9,813</td><td>535</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-5820K+%40+3.30GHz&amp;id=2340#price">24.53
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-5820K+%40+3.30GHz&amp;id=2340#price">$400.00</a></td></tr><tr id="cpu3357" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-5850EQ+%40+2.70GHz&amp;id=3357">Intel Core i7-5850EQ @ 2.70GHz
</a></td><td>7,036</td><td>759</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-5850EQ+%40+2.70GHz&amp;id=3357#price">16.17
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-5850EQ+%40+2.70GHz&amp;id=3357#price">$435.00*</a></td></tr><tr id="cpu2681" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-5850HQ+%40+2.70GHz&amp;id=2681">Intel Core i7-5850HQ @ 2.70GHz
</a></td><td>6,866</td><td>788</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-5850HQ+%40+2.70GHz&amp;id=2681#price">15.82
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-5850HQ+%40+2.70GHz&amp;id=2681#price">$434.00*</a></td></tr><tr id="cpu2336" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-5930K+%40+3.50GHz&amp;id=2336">Intel Core i7-5930K @ 3.50GHz
</a></td><td>10,275</td><td>514</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-5930K+%40+3.50GHz&amp;id=2336#price">14.88
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-5930K+%40+3.50GHz&amp;id=2336#price">$690.30</a></td></tr><tr id="cpu2543" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-5950HQ+%40+2.90GHz&amp;id=2543">Intel Core i7-5950HQ @ 2.90GHz
</a></td><td>7,759</td><td>675</td><td>NA</td><td>NA</td></tr><tr id="cpu2332" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-5960X+%40+3.00GHz&amp;id=2332">Intel Core i7-5960X @ 3.00GHz
</a></td><td>12,679</td><td>412</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-5960X+%40+3.00GHz&amp;id=2332#price">36.22
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-5960X+%40+3.00GHz&amp;id=2332#price">$350.00</a></td></tr><tr id="cpu2887" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-6498DU+%40+2.50GHz&amp;id=2887">Intel Core i7-6498DU @ 2.50GHz
</a></td><td>3,293</td><td>1340</td><td>NA</td><td>NA</td></tr><tr id="cpu2607" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-6500U+%40+2.50GHz&amp;id=2607">Intel Core i7-6500U @ 2.50GHz
</a></td><td>3,279</td><td>1345</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-6500U+%40+2.50GHz&amp;id=2607#price">8.34
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-6500U+%40+2.50GHz&amp;id=2607#price">$393.00*</a></td></tr><tr id="cpu2710" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-6560U+%40+2.20GHz&amp;id=2710">Intel Core i7-6560U @ 2.20GHz
</a></td><td>3,390</td><td>1315</td><td>NA</td><td>NA</td></tr><tr id="cpu2713" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-6567U+%40+3.30GHz&amp;id=2713">Intel Core i7-6567U @ 3.30GHz
</a></td><td>3,817</td><td>1224</td><td>NA</td><td>NA</td></tr><tr id="cpu2608" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-6600U+%40+2.60GHz&amp;id=2608">Intel Core i7-6600U @ 2.60GHz
</a></td><td>3,518</td><td>1290</td><td>NA</td><td>NA</td></tr><tr id="cpu2654" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-6650U+%40+2.20GHz&amp;id=2654">Intel Core i7-6650U @ 2.20GHz
</a></td><td>3,613</td><td>1267</td><td>NA</td><td>NA</td></tr><tr id="cpu3303" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-6660U+%40+2.40GHz&amp;id=3303">Intel Core i7-6660U @ 2.40GHz
</a></td><td>3,879</td><td>1211</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-6660U+%40+2.40GHz&amp;id=3303#price">9.35
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-6660U+%40+2.40GHz&amp;id=3303#price">$415.00*</a></td></tr><tr id="cpu2598" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-6700+%40+3.40GHz&amp;id=2598">Intel Core i7-6700 @ 3.40GHz
</a></td><td>8,057</td><td>647</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-6700+%40+3.40GHz&amp;id=2598#price">23.84
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-6700+%40+3.40GHz&amp;id=2598#price">$338.00</a></td></tr><tr id="cpu2586" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-6700HQ+%40+2.60GHz&amp;id=2586">Intel Core i7-6700HQ @ 2.60GHz
</a></td><td>6,541</td><td>823</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-6700HQ+%40+2.60GHz&amp;id=2586#price">17.30
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-6700HQ+%40+2.60GHz&amp;id=2586#price">$378.00*</a></td></tr><tr id="cpu2565" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-6700K+%40+4.00GHz&amp;id=2565">Intel Core i7-6700K @ 4.00GHz
</a></td><td>8,968</td><td>587</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-6700K+%40+4.00GHz&amp;id=2565#price">35.45
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-6700K+%40+4.00GHz&amp;id=2565#price">$252.99</a></td></tr><tr id="cpu2614" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-6700T+%40+2.80GHz&amp;id=2614">Intel Core i7-6700T @ 2.80GHz
</a></td><td>7,281</td><td>728</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-6700T+%40+2.80GHz&amp;id=2614#price">3.64
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-6700T+%40+2.80GHz&amp;id=2614#price">$1,999.00*</a></td></tr><tr id="cpu2815" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-6700TE+%40+2.40GHz&amp;id=2815">Intel Core i7-6700TE @ 2.40GHz
</a></td><td>6,879</td><td>786</td><td>NA</td><td>NA</td></tr><tr id="cpu2759" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-6770HQ+%40+2.60GHz&amp;id=2759">Intel Core i7-6770HQ @ 2.60GHz
</a></td><td>7,237</td><td>732</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-6770HQ+%40+2.60GHz&amp;id=2759#price">11.69
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-6770HQ+%40+2.60GHz&amp;id=2759#price">$619.00*</a></td></tr><tr id="cpu2785" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-6800K+%40+3.40GHz&amp;id=2785">Intel Core i7-6800K @ 3.40GHz
</a></td><td>10,585</td><td>498</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-6800K+%40+3.40GHz&amp;id=2785#price">42.49
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-6800K+%40+3.40GHz&amp;id=2785#price">$249.08</a></td></tr><tr id="cpu2819" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-6820EQ+%40+2.80GHz&amp;id=2819">Intel Core i7-6820EQ @ 2.80GHz
</a></td><td>6,924</td><td>780</td><td>NA</td><td>NA</td></tr><tr id="cpu2616" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-6820HK+%40+2.70GHz&amp;id=2616">Intel Core i7-6820HK @ 2.70GHz
</a></td><td>7,021</td><td>763</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-6820HK+%40+2.70GHz&amp;id=2616#price">18.57
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-6820HK+%40+2.70GHz&amp;id=2616#price">$378.00*</a></td></tr><tr id="cpu2659" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-6820HQ+%40+2.70GHz&amp;id=2659">Intel Core i7-6820HQ @ 2.70GHz
</a></td><td>6,909</td><td>783</td><td>NA</td><td>NA</td></tr><tr id="cpu2709" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-6822EQ+%40+2.00GHz&amp;id=2709">Intel Core i7-6822EQ @ 2.00GHz
</a></td><td>5,241</td><td>997</td><td>NA</td><td>NA</td></tr><tr id="cpu2800" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-6850K+%40+3.60GHz&amp;id=2800">Intel Core i7-6850K @ 3.60GHz
</a></td><td>11,286</td><td>466</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-6850K+%40+3.60GHz&amp;id=2800#price">32.35
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-6850K+%40+3.60GHz&amp;id=2800#price">$348.89</a></td></tr><tr id="cpu2794" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-6900K+%40+3.20GHz&amp;id=2794">Intel Core i7-6900K @ 3.20GHz
</a></td><td>13,961</td><td>370</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-6900K+%40+3.20GHz&amp;id=2794#price">34.99
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-6900K+%40+3.20GHz&amp;id=2794#price">$398.99</a></td></tr><tr id="cpu2699" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-6920HQ+%40+2.90GHz&amp;id=2699">Intel Core i7-6920HQ @ 2.90GHz
</a></td><td>7,350</td><td>719</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-6920HQ+%40+2.90GHz&amp;id=2699#price">12.94
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-6920HQ+%40+2.90GHz&amp;id=2699#price">$568.00*</a></td></tr><tr id="cpu2792" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-6950X+%40+3.00GHz&amp;id=2792">Intel Core i7-6950X @ 3.00GHz
</a></td><td>17,055</td><td>275</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-6950X+%40+3.00GHz&amp;id=2792#price">44.90
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-6950X+%40+3.00GHz&amp;id=2792#price">$379.87</a></td></tr><tr id="cpu2863" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-7500U+%40+2.70GHz&amp;id=2863">Intel Core i7-7500U @ 2.70GHz
</a></td><td>3,650</td><td>1259</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-7500U+%40+2.70GHz&amp;id=2863#price">6.77
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-7500U+%40+2.70GHz&amp;id=2863#price">$539.00*</a></td></tr><tr id="cpu2974" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-7560U+%40+2.40GHz&amp;id=2974">Intel Core i7-7560U @ 2.40GHz
</a></td><td>3,798</td><td>1227</td><td>NA</td><td>NA</td></tr><tr id="cpu2990" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-7567U+%40+3.50GHz&amp;id=2990">Intel Core i7-7567U @ 3.50GHz
</a></td><td>4,265</td><td>1144</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-7567U+%40+3.50GHz&amp;id=2990#price">5.81
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-7567U+%40+3.50GHz&amp;id=2990#price">$733.99*</a></td></tr><tr id="cpu2936" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-7600U+%40+2.80GHz&amp;id=2936">Intel Core i7-7600U @ 2.80GHz
</a></td><td>3,631</td><td>1261</td><td>NA</td><td>NA</td></tr><tr id="cpu3016" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-7660U+%40+2.50GHz&amp;id=3016">Intel Core i7-7660U @ 2.50GHz
</a></td><td>4,176</td><td>1155</td><td>NA</td><td>NA</td></tr><tr id="cpu2905" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-7700+%40+3.60GHz&amp;id=2905">Intel Core i7-7700 @ 3.60GHz
</a></td><td>8,616</td><td>605</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-7700+%40+3.60GHz&amp;id=2905#price">27.89
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-7700+%40+3.60GHz&amp;id=2905#price">$308.96</a></td></tr><tr id="cpu2906" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-7700HQ+%40+2.80GHz&amp;id=2906">Intel Core i7-7700HQ @ 2.80GHz
</a></td><td>6,940</td><td>776</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-7700HQ+%40+2.80GHz&amp;id=2906#price">18.36
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-7700HQ+%40+2.80GHz&amp;id=2906#price">$378.00*</a></td></tr><tr id="cpu2874" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-7700K+%40+4.20GHz&amp;id=2874">Intel Core i7-7700K @ 4.20GHz
</a></td><td>9,709</td><td>540</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-7700K+%40+4.20GHz&amp;id=2874#price">23.12
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-7700K+%40+4.20GHz&amp;id=2874#price">$420.00</a></td></tr><tr id="cpu2951" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-7700T+%40+2.90GHz&amp;id=2951">Intel Core i7-7700T @ 2.90GHz
</a></td><td>7,837</td><td>667</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-7700T+%40+2.90GHz&amp;id=2951#price">19.59
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-7700T+%40+2.90GHz&amp;id=2951#price">$399.99</a></td></tr><tr id="cpu3041" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-7740X+%40+4.30GHz&amp;id=3041">Intel Core i7-7740X @ 4.30GHz
</a></td><td>9,809</td><td>536</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-7740X+%40+4.30GHz&amp;id=3041#price">44.60
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-7740X+%40+4.30GHz&amp;id=3041#price">$219.95</a></td></tr><tr id="cpu3037" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-7800X+%40+3.50GHz&amp;id=3037">Intel Core i7-7800X @ 3.50GHz
</a></td><td>12,798</td><td>408</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-7800X+%40+3.50GHz&amp;id=3037#price">43.03
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-7800X+%40+3.50GHz&amp;id=3037#price">$297.45</a></td></tr><tr id="cpu3470" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-7820EQ+%40+3.00GHz&amp;id=3470">Intel Core i7-7820EQ @ 3.00GHz
</a></td><td>7,453</td><td>706</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-7820EQ+%40+3.00GHz&amp;id=3470#price">19.72
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-7820EQ+%40+3.00GHz&amp;id=3470#price">$378.00*</a></td></tr><tr id="cpu2938" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-7820HK+%40+2.90GHz&amp;id=2938">Intel Core i7-7820HK @ 2.90GHz
</a></td><td>7,767</td><td>673</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-7820HK+%40+2.90GHz&amp;id=2938#price">20.55
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-7820HK+%40+2.90GHz&amp;id=2938#price">$378.00*</a></td></tr><tr id="cpu2952" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-7820HQ+%40+2.90GHz&amp;id=2952">Intel Core i7-7820HQ @ 2.90GHz
</a></td><td>7,144</td><td>746</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-7820HQ+%40+2.90GHz&amp;id=2952#price">18.90
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-7820HQ+%40+2.90GHz&amp;id=2952#price">$378.00*</a></td></tr><tr id="cpu3038" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-7820X+%40+3.60GHz&amp;id=3038">Intel Core i7-7820X @ 3.60GHz
</a></td><td>17,339</td><td>266</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-7820X+%40+3.60GHz&amp;id=3038#price">49.54
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-7820X+%40+3.60GHz&amp;id=3038#price">$349.99</a></td></tr><tr id="cpu3056" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-7900X+%40+3.30GHz&amp;id=3056">Intel Core i7-7900X @ 3.30GHz
</a></td><td>19,358</td><td>220</td><td>NA</td><td>NA</td></tr><tr id="cpu3007" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-7920HQ+%40+3.10GHz&amp;id=3007">Intel Core i7-7920HQ @ 3.10GHz
</a></td><td>7,683</td><td>682</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-7920HQ+%40+3.10GHz&amp;id=3007#price">13.53
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-7920HQ+%40+3.10GHz&amp;id=3007#price">$568.00*</a></td></tr><tr id="cpu3279" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-8086K+%40+4.00GHz&amp;id=3279">Intel Core i7-8086K @ 4.00GHz
</a></td><td>14,663</td><td>337</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-8086K+%40+4.00GHz&amp;id=3279#price">27.73
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-8086K+%40+4.00GHz&amp;id=3279#price">$528.73</a></td></tr><tr id="cpu3338" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-8500Y+%40+1.50GHz&amp;id=3338">Intel Core i7-8500Y @ 1.50GHz
</a></td><td>2,888</td><td>1475</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-8500Y+%40+1.50GHz&amp;id=3338#price">7.35
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-8500Y+%40+1.50GHz&amp;id=3338#price">$393.00*</a></td></tr><tr id="cpu3064" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-8550U+%40+1.80GHz&amp;id=3064">Intel Core i7-8550U @ 1.80GHz
</a></td><td>5,934</td><td>910</td><td>NA</td><td>NA</td></tr><tr id="cpu3641" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-8557U+%40+1.70GHz&amp;id=3641">Intel Core i7-8557U @ 1.70GHz
</a></td><td>8,429</td><td>615</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-8557U+%40+1.70GHz&amp;id=3641#price">19.56
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-8557U+%40+1.70GHz&amp;id=3641#price">$431.00*</a></td></tr><tr id="cpu3302" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-8559U+%40+2.70GHz&amp;id=3302">Intel Core i7-8559U @ 2.70GHz
</a></td><td>8,797</td><td>596</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-8559U+%40+2.70GHz&amp;id=3302#price">14.26
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-8559U+%40+2.70GHz&amp;id=3302#price">$617.00*</a></td></tr><tr id="cpu3308" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-8565U+%40+1.80GHz&amp;id=3308">Intel Core i7-8565U @ 1.80GHz
</a></td><td>6,373</td><td>847</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-8565U+%40+1.80GHz&amp;id=3308#price">10.36
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-8565U+%40+1.80GHz&amp;id=3308#price">$615.00*</a></td></tr><tr id="cpu3705" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-8565UC+%40+1.80GHz&amp;id=3705">Intel Core i7-8565UC @ 1.80GHz
</a></td><td>6,187</td><td>871</td><td>NA</td><td>NA</td></tr><tr id="cpu3672" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-8569U+%40+2.80GHz&amp;id=3672">Intel Core i7-8569U @ 2.80GHz
</a></td><td>8,717</td><td>603</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-8569U+%40+2.80GHz&amp;id=3672#price">20.23
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-8569U+%40+2.80GHz&amp;id=3672#price">$431.00*</a></td></tr><tr id="cpu3070" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-8650U+%40+1.90GHz&amp;id=3070">Intel Core i7-8650U @ 1.90GHz
</a></td><td>6,455</td><td>834</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-8650U+%40+1.90GHz&amp;id=3070#price">6.15
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-8650U+%40+1.90GHz&amp;id=3070#price">$1,049.00*</a></td></tr><tr id="cpu3434" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-8665U+%40+1.90GHz&amp;id=3434">Intel Core i7-8665U @ 1.90GHz
</a></td><td>6,548</td><td>822</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-8665U+%40+1.90GHz&amp;id=3434#price">9.29
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-8665U+%40+1.90GHz&amp;id=3434#price">$704.49*</a></td></tr><tr id="cpu3611" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-8665UE+%40+1.70GHz&amp;id=3611">Intel Core i7-8665UE @ 1.70GHz
</a></td><td>6,587</td><td>818</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-8665UE+%40+1.70GHz&amp;id=3611#price">16.10
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-8665UE+%40+1.70GHz&amp;id=3611#price">$409.00*</a></td></tr><tr id="cpu3099" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-8700+%40+3.20GHz&amp;id=3099">Intel Core i7-8700 @ 3.20GHz
</a></td><td>13,081</td><td>398</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-8700+%40+3.20GHz&amp;id=3099#price">44.38
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-8700+%40+3.20GHz&amp;id=3099#price">$294.75</a></td></tr><tr id="cpu3388" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-8700B+%40+3.20GHz&amp;id=3388">Intel Core i7-8700B @ 3.20GHz
</a></td><td>12,754</td><td>410</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-8700B+%40+3.20GHz&amp;id=3388#price">42.09
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-8700B+%40+3.20GHz&amp;id=3388#price">$303.00*</a></td></tr><tr id="cpu3098" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-8700K+%40+3.70GHz&amp;id=3098">Intel Core i7-8700K @ 3.70GHz
</a></td><td>13,891</td><td>374</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-8700K+%40+3.70GHz&amp;id=3098#price">41.50
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-8700K+%40+3.70GHz&amp;id=3098#price">$334.75</a></td></tr><tr id="cpu3213" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-8700T+%40+2.40GHz&amp;id=3213">Intel Core i7-8700T @ 2.40GHz
</a></td><td>10,782</td><td>491</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-8700T+%40+2.40GHz&amp;id=3213#price">37.35
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-8700T+%40+2.40GHz&amp;id=3213#price">$288.65</a></td></tr><tr id="cpu3201" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-8705G+%40+3.10GHz&amp;id=3201">Intel Core i7-8705G @ 3.10GHz
</a></td><td>7,903</td><td>663</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-8705G+%40+3.10GHz&amp;id=3201#price">5.15
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-8705G+%40+3.10GHz&amp;id=3201#price">$1,535.11*</a></td></tr><tr id="cpu3288" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-8706G+%40+3.10GHz&amp;id=3288">Intel Core i7-8706G @ 3.10GHz
</a></td><td>8,136</td><td>641</td><td>NA</td><td>NA</td></tr><tr id="cpu3355" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-8709G+%40+3.10GHz&amp;id=3355">Intel Core i7-8709G @ 3.10GHz
</a></td><td>7,921</td><td>659</td><td>NA</td><td>NA</td></tr><tr id="cpu3237" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-8750H+%40+2.20GHz&amp;id=3237">Intel Core i7-8750H @ 2.20GHz
</a></td><td>10,131</td><td>520</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-8750H+%40+2.20GHz&amp;id=3237#price">25.65
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-8750H+%40+2.20GHz&amp;id=3237#price">$395.00*</a></td></tr><tr id="cpu3209" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-8809G+%40+3.10GHz&amp;id=3209">Intel Core i7-8809G @ 3.10GHz
</a></td><td>8,776</td><td>600</td><td>NA</td><td>NA</td></tr><tr id="cpu3247" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-8850H+%40+2.60GHz&amp;id=3247">Intel Core i7-8850H @ 2.60GHz
</a></td><td>10,458</td><td>504</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-8850H+%40+2.60GHz&amp;id=3247#price">26.48
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-8850H+%40+2.60GHz&amp;id=3247#price">$395.00*</a></td></tr><tr id="cpu3477" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-9700+%40+3.00GHz&amp;id=3477">Intel Core i7-9700 @ 3.00GHz
</a></td><td>13,466</td><td>385</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-9700+%40+3.00GHz&amp;id=3477#price">46.43
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-9700+%40+3.00GHz&amp;id=3477#price">$289.99</a></td></tr><tr id="cpu3875" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-9700E+%40+2.60GHz&amp;id=3875">Intel Core i7-9700E @ 2.60GHz
</a></td><td>11,869</td><td>442</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-9700E+%40+2.60GHz&amp;id=3875#price">36.75
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-9700E+%40+2.60GHz&amp;id=3875#price">$323.00*</a></td></tr><tr id="cpu3465" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-9700F+%40+3.00GHz&amp;id=3465">Intel Core i7-9700F @ 3.00GHz
</a></td><td>13,497</td><td>383</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-9700F+%40+3.00GHz&amp;id=3465#price">52.32
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-9700F+%40+3.00GHz&amp;id=3465#price">$257.97</a></td></tr><tr id="cpu3335" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-9700K+%40+3.60GHz&amp;id=3335">Intel Core i7-9700K @ 3.60GHz
</a></td><td>14,550</td><td>345</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-9700K+%40+3.60GHz&amp;id=3335#price">55.96
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-9700K+%40+3.60GHz&amp;id=3335#price">$259.99</a></td></tr><tr id="cpu3428" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-9700KF+%40+3.60GHz&amp;id=3428">Intel Core i7-9700KF @ 3.60GHz
</a></td><td>14,625</td><td>340</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-9700KF+%40+3.60GHz&amp;id=3428#price">42.34
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-9700KF+%40+3.60GHz&amp;id=3428#price">$345.44</a></td></tr><tr id="cpu3506" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-9700T+%40+2.00GHz&amp;id=3506">Intel Core i7-9700T @ 2.00GHz
</a></td><td>10,712</td><td>494</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-9700T+%40+2.00GHz&amp;id=3506#price">33.16
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-9700T+%40+2.00GHz&amp;id=3506#price">$323.00*</a></td></tr><tr id="cpu3619" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-9700TE+%40+1.80GHz&amp;id=3619">Intel Core i7-9700TE @ 1.80GHz
</a></td><td>10,722</td><td>493</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-9700TE+%40+1.80GHz&amp;id=3619#price">33.19
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-9700TE+%40+1.80GHz&amp;id=3619#price">$323.00*</a></td></tr><tr id="cpu3425" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-9750H+%40+2.60GHz&amp;id=3425">Intel Core i7-9750H @ 2.60GHz
</a></td><td>11,293</td><td>465</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-9750H+%40+2.60GHz&amp;id=3425#price">11.76
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-9750H+%40+2.60GHz&amp;id=3425#price">$960.00*</a></td></tr><tr id="cpu3653" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-9750HF+%40+2.60GHz&amp;id=3653">Intel Core i7-9750HF @ 2.60GHz
</a></td><td>11,591</td><td>454</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-9750HF+%40+2.60GHz&amp;id=3653#price">29.34
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-9750HF+%40+2.60GHz&amp;id=3653#price">$395.00*</a></td></tr><tr id="cpu3374" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-9800X+%40+3.80GHz&amp;id=3374">Intel Core i7-9800X @ 3.80GHz
</a></td><td>18,376</td><td>241</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-9800X+%40+3.80GHz&amp;id=3374#price">36.75
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-9800X+%40+3.80GHz&amp;id=3374#price">$499.99</a></td></tr><tr id="cpu3478" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-9850H+%40+2.60GHz&amp;id=3478">Intel Core i7-9850H @ 2.60GHz
</a></td><td>11,639</td><td>451</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-9850H+%40+2.60GHz&amp;id=3478#price">8.91
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-9850H+%40+2.60GHz&amp;id=3478#price">$1,305.76*</a></td></tr><tr id="cpu3621" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-9850HL+%40+1.90GHz&amp;id=3621">Intel Core i7-9850HL @ 1.90GHz
</a></td><td>9,112</td><td>577</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-9850HL+%40+1.90GHz&amp;id=3621#price">23.07
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-9850HL+%40+1.90GHz&amp;id=3621#price">$395.00*</a></td></tr><tr id="cpu3549" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-10510U+%40+1.80GHz&amp;id=3549">Intel Core i7-10510U @ 1.80GHz
</a></td><td>6,915</td><td>782</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-10510U+%40+1.80GHz&amp;id=3549#price">16.91
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-10510U+%40+1.80GHz&amp;id=3549#price">$409.00*</a></td></tr><tr id="cpu3819" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-10510Y+%40+1.20GHz&amp;id=3819">Intel Core i7-10510Y @ 1.20GHz
</a></td><td>5,289</td><td>986</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-10510Y+%40+1.20GHz&amp;id=3819#price">13.12
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-10510Y+%40+1.20GHz&amp;id=3819#price">$403.00*</a></td></tr><tr id="cpu3738" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-10610U+%40+1.80GHz&amp;id=3738">Intel Core i7-10610U @ 1.80GHz
</a></td><td>7,158</td><td>745</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-10610U+%40+1.80GHz&amp;id=3738#price">17.50
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-10610U+%40+1.80GHz&amp;id=3738#price">$409.00*</a></td></tr><tr id="cpu3747" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-10700+%40+2.90GHz&amp;id=3747">Intel Core i7-10700 @ 2.90GHz
</a></td><td>17,241</td><td>269</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-10700+%40+2.90GHz&amp;id=3747#price">51.88
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-10700+%40+2.90GHz&amp;id=3747#price">$332.35</a></td></tr><tr id="cpu3806" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-10700F+%40+2.90GHz&amp;id=3806">Intel Core i7-10700F @ 2.90GHz
</a></td><td>17,013</td><td>276</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-10700F+%40+2.90GHz&amp;id=3806#price">57.96
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-10700F+%40+2.90GHz&amp;id=3806#price">$293.51</a></td></tr><tr id="cpu3733" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-10700K+%40+3.80GHz&amp;id=3733">Intel Core i7-10700K @ 3.80GHz
</a></td><td>19,459</td><td>217</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-10700K+%40+3.80GHz&amp;id=3733#price">72.07
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-10700K+%40+3.80GHz&amp;id=3733#price">$270.00</a></td></tr><tr id="cpu3757" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-10700KF+%40+3.80GHz&amp;id=3757">Intel Core i7-10700KF @ 3.80GHz
</a></td><td>19,245</td><td>223</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-10700KF+%40+3.80GHz&amp;id=3757#price">75.47
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-10700KF+%40+3.80GHz&amp;id=3757#price">$255.00</a></td></tr><tr id="cpu3792" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-10700T+%40+2.00GHz&amp;id=3792">Intel Core i7-10700T @ 2.00GHz
</a></td><td>13,263</td><td>394</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-10700T+%40+2.00GHz&amp;id=3792#price">33.33
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-10700T+%40+2.00GHz&amp;id=3792#price">$398.00</a></td></tr><tr id="cpu4081" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-10700TE+%40+2.00GHz&amp;id=4081">Intel Core i7-10700TE @ 2.00GHz
</a></td><td>16,332</td><td>292</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-10700TE+%40+2.00GHz&amp;id=4081#price">49.49
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-10700TE+%40+2.00GHz&amp;id=4081#price">$330.00*</a></td></tr><tr id="cpu3567" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-10710U+%40+1.10GHz&amp;id=3567">Intel Core i7-10710U @ 1.10GHz
</a></td><td>10,105</td><td>523</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-10710U+%40+1.10GHz&amp;id=3567#price">15.67
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-10710U+%40+1.10GHz&amp;id=3567#price">$644.99*</a></td></tr><tr id="cpu3657" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-10750H+%40+2.60GHz&amp;id=3657">Intel Core i7-10750H @ 2.60GHz
</a></td><td>12,524</td><td>415</td><td>NA</td><td>NA</td></tr><tr id="cpu3741" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-10810U+%40+1.10GHz&amp;id=3741">Intel Core i7-10810U @ 1.10GHz
</a></td><td>8,923</td><td>589</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-10810U+%40+1.10GHz&amp;id=3741#price">20.14
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-10810U+%40+1.10GHz&amp;id=3741#price">$443.00*</a></td></tr><tr id="cpu3734" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-10850H+%40+2.70GHz&amp;id=3734">Intel Core i7-10850H @ 2.70GHz
</a></td><td>12,164</td><td>430</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-10850H+%40+2.70GHz&amp;id=3734#price">30.79
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-10850H+%40+2.70GHz&amp;id=3734#price">$395.00*</a></td></tr><tr id="cpu3856" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-10870H+%40+2.20GHz&amp;id=3856">Intel Core i7-10870H @ 2.20GHz
</a></td><td>15,403</td><td>314</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-10870H+%40+2.20GHz&amp;id=3856#price">36.94
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-10870H+%40+2.20GHz&amp;id=3856#price">$417.00*</a></td></tr><tr id="cpu3726" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-10875H+%40+2.30GHz&amp;id=3726">Intel Core i7-10875H @ 2.30GHz
</a></td><td>15,656</td><td>309</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-10875H+%40+2.30GHz&amp;id=3726#price">34.79
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-10875H+%40+2.30GHz&amp;id=3726#price">$450.00*</a></td></tr><tr id="cpu4048" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-11370H+%40+3.30GHz&amp;id=4048">Intel Core i7-11370H @ 3.30GHz
</a></td><td>12,397</td><td>420</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-11370H+%40+3.30GHz&amp;id=4048#price">29.10
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-11370H+%40+3.30GHz&amp;id=4048#price">$426.00*</a></td></tr><tr id="cpu4157" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-11375H+%40+3.30GHz&amp;id=4157">Intel Core i7-11375H @ 3.30GHz
</a></td><td>12,367</td><td>422</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-11375H+%40+3.30GHz&amp;id=4157#price">25.66
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-11375H+%40+3.30GHz&amp;id=4157#price">$482.00*</a></td></tr><tr id="cpu3947" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-11700+%40+2.50GHz&amp;id=3947">Intel Core i7-11700 @ 2.50GHz
</a></td><td>21,469</td><td>177</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-11700+%40+2.50GHz&amp;id=3947#price">63.14
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-11700+%40+2.50GHz&amp;id=3947#price">$339.99</a></td></tr><tr id="cpu4264" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-11700F+%40+2.50GHz&amp;id=4264">Intel Core i7-11700F @ 2.50GHz
</a></td><td>21,557</td><td>176</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-11700F+%40+2.50GHz&amp;id=4264#price">59.06
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-11700F+%40+2.50GHz&amp;id=4264#price">$365.00</a></td></tr><tr id="cpu3896" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-11700K+%40+3.60GHz&amp;id=3896">Intel Core i7-11700K @ 3.60GHz
</a></td><td>25,067</td><td>116</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-11700K+%40+3.60GHz&amp;id=3896#price">63.00
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-11700K+%40+3.60GHz&amp;id=3896#price">$397.88</a></td></tr><tr id="cpu4234" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-11700KF+%40+3.60GHz&amp;id=4234">Intel Core i7-11700KF @ 3.60GHz
</a></td><td>24,389</td><td>125</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-11700KF+%40+3.60GHz&amp;id=4234#price">54.08
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-11700KF+%40+3.60GHz&amp;id=4234#price">$450.99</a></td></tr><tr id="cpu4358" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-11800H+%40+2.30GHz&amp;id=4358">Intel Core i7-11800H @ 2.30GHz
</a></td><td>21,921</td><td>168</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-11800H+%40+2.30GHz&amp;id=4358#price">55.50
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-11800H+%40+2.30GHz&amp;id=4358#price">$395.00*</a></td></tr><tr id="cpu4342" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i7-11850H+%40+2.50GHz&amp;id=4342">Intel Core i7-11850H @ 2.50GHz
</a></td><td>21,558</td><td>175</td><td>
<a href="cpu.php?cpu=Intel+Core+i7-11850H+%40+2.50GHz&amp;id=4342#price">54.58
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i7-11850H+%40+2.50GHz&amp;id=4342#price">$395.00*</a></td></tr><tr id="cpu3035" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-7900X+%40+3.30GHz&amp;id=3035">Intel Core i9-7900X @ 3.30GHz
</a></td><td>21,449</td><td>178</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-7900X+%40+3.30GHz&amp;id=3035#price">61.42
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-7900X+%40+3.30GHz&amp;id=3035#price">$349.21</a></td></tr><tr id="cpu3082" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-7920X+%40+2.90GHz&amp;id=3082">Intel Core i9-7920X @ 2.90GHz
</a></td><td>23,453</td><td>140</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-7920X+%40+2.90GHz&amp;id=3082#price">62.54
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-7920X+%40+2.90GHz&amp;id=3082#price">$375.00</a></td></tr><tr id="cpu3094" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-7940X+%40+3.10GHz&amp;id=3094">Intel Core i9-7940X @ 3.10GHz
</a></td><td>26,712</td><td>91</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-7940X+%40+3.10GHz&amp;id=3094#price">48.57
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-7940X+%40+3.10GHz&amp;id=3094#price">$549.99</a></td></tr><tr id="cpu3096" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-7960X+%40+2.80GHz&amp;id=3096">Intel Core i9-7960X @ 2.80GHz
</a></td><td>26,629</td><td>93</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-7960X+%40+2.80GHz&amp;id=3096#price">26.63
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-7960X+%40+2.80GHz&amp;id=3096#price">$999.99</a></td></tr><tr id="cpu3092" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-7980XE+%40+2.60GHz&amp;id=3092">Intel Core i9-7980XE @ 2.60GHz
</a></td><td>29,471</td><td>75</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-7980XE+%40+2.60GHz&amp;id=3092#price">32.75
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-7980XE+%40+2.60GHz&amp;id=3092#price">$899.86</a></td></tr><tr id="cpu3246" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-8950HK+%40+2.90GHz&amp;id=3246">Intel Core i9-8950HK @ 2.90GHz
</a></td><td>10,911</td><td>483</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-8950HK+%40+2.90GHz&amp;id=3246#price">18.72
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-8950HK+%40+2.90GHz&amp;id=3246#price">$583.00*</a></td></tr><tr id="cpu3369" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-9820X+%40+3.30GHz&amp;id=3369">Intel Core i9-9820X @ 3.30GHz
</a></td><td>20,524</td><td>197</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-9820X+%40+3.30GHz&amp;id=3369#price">30.23
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-9820X+%40+3.30GHz&amp;id=3369#price">$679.00</a></td></tr><tr id="cpu3456" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-9880H+%40+2.30GHz&amp;id=3456">Intel Core i9-9880H @ 2.30GHz
</a></td><td>14,061</td><td>364</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-9880H+%40+2.30GHz&amp;id=3456#price">25.29
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-9880H+%40+2.30GHz&amp;id=3456#price">$556.00*</a></td></tr><tr id="cpu3487" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-9900+%40+3.10GHz&amp;id=3487">Intel Core i9-9900 @ 3.10GHz
</a></td><td>17,106</td><td>273</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-9900+%40+3.10GHz&amp;id=3487#price">49.87
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-9900+%40+3.10GHz&amp;id=3487#price">$343.00</a></td></tr><tr id="cpu3334" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-9900K+%40+3.60GHz&amp;id=3334">Intel Core i9-9900K @ 3.60GHz
</a></td><td>18,824</td><td>236</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-9900K+%40+3.60GHz&amp;id=3334#price">65.14
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-9900K+%40+3.60GHz&amp;id=3334#price">$289.00</a></td></tr><tr id="cpu3435" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-9900KF+%40+3.60GHz&amp;id=3435">Intel Core i9-9900KF @ 3.60GHz
</a></td><td>18,825</td><td>234</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-9900KF+%40+3.60GHz&amp;id=3435#price">68.45
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-9900KF+%40+3.60GHz&amp;id=3435#price">$275.00</a></td></tr><tr id="cpu3593" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-9900KS+%40+4.00GHz&amp;id=3593">Intel Core i9-9900KS @ 4.00GHz
</a></td><td>19,603</td><td>212</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-9900KS+%40+4.00GHz&amp;id=3593#price">24.03
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-9900KS+%40+4.00GHz&amp;id=3593#price">$815.87</a></td></tr><tr id="cpu3599" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-9900T+%40+2.10GHz&amp;id=3599">Intel Core i9-9900T @ 2.10GHz
</a></td><td>13,993</td><td>368</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-9900T+%40+2.10GHz&amp;id=3599#price">31.87
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-9900T+%40+2.10GHz&amp;id=3599#price">$439.00*</a></td></tr><tr id="cpu3376" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-9900X+%40+3.50GHz&amp;id=3376">Intel Core i9-9900X @ 3.50GHz
</a></td><td>21,723</td><td>172</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-9900X+%40+3.50GHz&amp;id=3376#price">29.96
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-9900X+%40+3.50GHz&amp;id=3376#price">$725.00</a></td></tr><tr id="cpu3378" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-9920X+%40+3.50GHz&amp;id=3378">Intel Core i9-9920X @ 3.50GHz
</a></td><td>25,350</td><td>113</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-9920X+%40+3.50GHz&amp;id=3378#price">29.82
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-9920X+%40+3.50GHz&amp;id=3378#price">$849.99</a></td></tr><tr id="cpu3358" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-9940X+%40+3.30GHz&amp;id=3358">Intel Core i9-9940X @ 3.30GHz
</a></td><td>28,356</td><td>81</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-9940X+%40+3.30GHz&amp;id=3358#price">34.58
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-9940X+%40+3.30GHz&amp;id=3358#price">$819.95</a></td></tr><tr id="cpu3405" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-9960X+%40+3.10GHz&amp;id=3405">Intel Core i9-9960X @ 3.10GHz
</a></td><td>31,249</td><td>63</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-9960X+%40+3.10GHz&amp;id=3405#price">32.76
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-9960X+%40+3.10GHz&amp;id=3405#price">$953.86</a></td></tr><tr id="cpu3451" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-9980HK+%40+2.40GHz&amp;id=3451">Intel Core i9-9980HK @ 2.40GHz
</a></td><td>14,966</td><td>325</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-9980HK+%40+2.40GHz&amp;id=3451#price">25.67
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-9980HK+%40+2.40GHz&amp;id=3451#price">$583.00*</a></td></tr><tr id="cpu3373" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-9980XE+%40+3.00GHz&amp;id=3373">Intel Core i9-9980XE @ 3.00GHz
</a></td><td>32,390</td><td>55</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-9980XE+%40+3.00GHz&amp;id=3373#price">26.99
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-9980XE+%40+3.00GHz&amp;id=3373#price">$1,199.99</a></td></tr><tr id="cpu3770" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-9990XE+%40+4.00GHz&amp;id=3770">Intel Core i9-9990XE @ 4.00GHz
</a></td><td>30,162</td><td>70</td><td>NA</td><td>NA</td></tr><tr id="cpu3824" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-10850K+%40+3.60GHz&amp;id=3824">Intel Core i9-10850K @ 3.60GHz
</a></td><td>23,347</td><td>143</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-10850K+%40+3.60GHz&amp;id=3824#price">58.96
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-10850K+%40+3.60GHz&amp;id=3824#price">$396.00</a></td></tr><tr id="cpu3783" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-10880H+%40+2.30GHz&amp;id=3783">Intel Core i9-10880H @ 2.30GHz
</a></td><td>15,390</td><td>316</td><td>NA</td><td>NA</td></tr><tr id="cpu3782" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-10885H+%40+2.40GHz&amp;id=3782">Intel Core i9-10885H @ 2.40GHz
</a></td><td>15,926</td><td>302</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-10885H+%40+2.40GHz&amp;id=3782#price">28.64
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-10885H+%40+2.40GHz&amp;id=3782#price">$556.00*</a></td></tr><tr id="cpu3745" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-10900+%40+2.80GHz&amp;id=3745">Intel Core i9-10900 @ 2.80GHz
</a></td><td>20,830</td><td>191</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-10900+%40+2.80GHz&amp;id=3745#price">49.72
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-10900+%40+2.80GHz&amp;id=3745#price">$418.95</a></td></tr><tr id="cpu3798" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-10900F+%40+2.80GHz&amp;id=3798">Intel Core i9-10900F @ 2.80GHz
</a></td><td>21,000</td><td>187</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-10900F+%40+2.80GHz&amp;id=3798#price">52.63
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-10900F+%40+2.80GHz&amp;id=3798#price">$399.00</a></td></tr><tr id="cpu3730" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-10900K+%40+3.70GHz&amp;id=3730">Intel Core i9-10900K @ 3.70GHz
</a></td><td>23,936</td><td>130</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-10900K+%40+3.70GHz&amp;id=3730#price">52.30
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-10900K+%40+3.70GHz&amp;id=3730#price">$457.69</a></td></tr><tr id="cpu3754" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-10900KF+%40+3.70GHz&amp;id=3754">Intel Core i9-10900KF @ 3.70GHz
</a></td><td>23,794</td><td>133</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-10900KF+%40+3.70GHz&amp;id=3754#price">50.76
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-10900KF+%40+3.70GHz&amp;id=3754#price">$468.79</a></td></tr><tr id="cpu3751" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-10900T+%40+1.90GHz&amp;id=3751">Intel Core i9-10900T @ 1.90GHz
</a></td><td>15,488</td><td>313</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-10900T+%40+1.90GHz&amp;id=3751#price">35.28
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-10900T+%40+1.90GHz&amp;id=3751#price">$439.00*</a></td></tr><tr id="cpu4213" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-10900TE+%40+1.80GHz&amp;id=4213">Intel Core i9-10900TE @ 1.80GHz
</a></td><td>17,888</td><td>253</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-10900TE+%40+1.80GHz&amp;id=4213#price">40.29
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-10900TE+%40+1.80GHz&amp;id=4213#price">$444.00*</a></td></tr><tr id="cpu3633" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-10900X+%40+3.70GHz&amp;id=3633">Intel Core i9-10900X @ 3.70GHz
</a></td><td>22,805</td><td>151</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-10900X+%40+3.70GHz&amp;id=3633#price">37.41
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-10900X+%40+3.70GHz&amp;id=3633#price">$609.55</a></td></tr><tr id="cpu3832" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-10910+%40+3.60GHz&amp;id=3832">Intel Core i9-10910 @ 3.60GHz
</a></td><td>21,243</td><td>181</td><td>NA</td><td>NA</td></tr><tr id="cpu3632" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-10920X+%40+3.50GHz&amp;id=3632">Intel Core i9-10920X @ 3.50GHz
</a></td><td>26,525</td><td>94</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-10920X+%40+3.50GHz&amp;id=3632#price">39.59
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-10920X+%40+3.50GHz&amp;id=3632#price">$669.99</a></td></tr><tr id="cpu3639" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-10940X+%40+3.30GHz&amp;id=3639">Intel Core i9-10940X @ 3.30GHz
</a></td><td>29,114</td><td>77</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-10940X+%40+3.30GHz&amp;id=3639#price">36.39
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-10940X+%40+3.30GHz&amp;id=3639#price">$799.99</a></td></tr><tr id="cpu3700" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-10980HK+%40+2.40GHz&amp;id=3700">Intel Core i9-10980HK @ 2.40GHz
</a></td><td>16,566</td><td>285</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-10980HK+%40+2.40GHz&amp;id=3700#price">28.42
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-10980HK+%40+2.40GHz&amp;id=3700#price">$583.00*</a></td></tr><tr id="cpu3630" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-10980XE+%40+3.00GHz&amp;id=3630">Intel Core i9-10980XE @ 3.00GHz
</a></td><td>33,842</td><td>45</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-10980XE+%40+3.00GHz&amp;id=3630#price">34.18
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-10980XE+%40+3.00GHz&amp;id=3630#price">$989.99</a></td></tr><tr id="cpu4245" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-11900+%40+2.50GHz&amp;id=4245">Intel Core i9-11900 @ 2.50GHz
</a></td><td>23,545</td><td>138</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-11900+%40+2.50GHz&amp;id=4245#price">50.10
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-11900+%40+2.50GHz&amp;id=4245#price">$469.99</a></td></tr><tr id="cpu4267" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-11900F+%40+2.50GHz&amp;id=4267">Intel Core i9-11900F @ 2.50GHz
</a></td><td>23,950</td><td>129</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-11900F+%40+2.50GHz&amp;id=4267#price">51.51
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-11900F+%40+2.50GHz&amp;id=4267#price">$464.99</a></td></tr><tr id="cpu4436" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-11900H+%40+2.50GHz&amp;id=4436">Intel Core i9-11900H @ 2.50GHz
</a></td><td>23,189</td><td>147</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-11900H+%40+2.50GHz&amp;id=4436#price">42.47
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-11900H+%40+2.50GHz&amp;id=4436#price">$546.00*</a></td></tr><tr id="cpu3904" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-11900K+%40+3.50GHz&amp;id=3904">Intel Core i9-11900K @ 3.50GHz
</a></td><td>25,560</td><td>107</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-11900K+%40+3.50GHz&amp;id=3904#price">46.47
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-11900K+%40+3.50GHz&amp;id=3904#price">$549.99</a></td></tr><tr id="cpu4444" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-11900KB+%40+3.30GHz&amp;id=4444">Intel Core i9-11900KB @ 3.30GHz
</a></td><td>24,523</td><td>122</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-11900KB+%40+3.30GHz&amp;id=4444#price">45.50
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-11900KB+%40+3.30GHz&amp;id=4444#price">$539.00*</a></td></tr><tr id="cpu4240" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-11900KF+%40+3.50GHz&amp;id=4240">Intel Core i9-11900KF @ 3.50GHz
</a></td><td>25,399</td><td>111</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-11900KF+%40+3.50GHz&amp;id=4240#price">46.18
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-11900KF+%40+3.50GHz&amp;id=4240#price">$549.99</a></td></tr><tr id="cpu4360" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-11900T+%40+1.50GHz&amp;id=4360">Intel Core i9-11900T @ 1.50GHz
</a></td><td>21,691</td><td>173</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-11900T+%40+1.50GHz&amp;id=4360#price">49.41
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-11900T+%40+1.50GHz&amp;id=4360#price">$439.00*</a></td></tr><tr id="cpu4400" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-11950H+%40+2.60GHz&amp;id=4400">Intel Core i9-11950H @ 2.60GHz
</a></td><td>23,379</td><td>142</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-11950H+%40+2.60GHz&amp;id=4400#price">42.05
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-11950H+%40+2.60GHz&amp;id=4400#price">$556.00*</a></td></tr><tr id="cpu4355" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+i9-11980HK+%40+2.60GHz&amp;id=4355">Intel Core i9-11980HK @ 2.60GHz
</a></td><td>23,593</td><td>136</td><td>
<a href="cpu.php?cpu=Intel+Core+i9-11980HK+%40+2.60GHz&amp;id=4355#price">40.47
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+i9-11980HK+%40+2.60GHz&amp;id=4355#price">$583.00*</a></td></tr><tr id="cpu2631" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+m3-6Y30+%40+0.90GHz&amp;id=2631">Intel Core m3-6Y30 @ 0.90GHz
</a></td><td>1,947</td><td>1893</td><td>
<a href="cpu.php?cpu=Intel+Core+m3-6Y30+%40+0.90GHz&amp;id=2631#price">6.93
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+m3-6Y30+%40+0.90GHz&amp;id=2631#price">$281.00*</a></td></tr><tr id="cpu2864" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+m3-7Y30+%40+1.00GHz&amp;id=2864">Intel Core m3-7Y30 @ 1.00GHz
</a></td><td>2,555</td><td>1592</td><td>NA</td><td>NA</td></tr><tr id="cpu3052" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+m3-7Y32+%40+1.10GHz&amp;id=3052">Intel Core m3-7Y32 @ 1.10GHz
</a></td><td>2,829</td><td>1496</td><td>NA</td><td>NA</td></tr><tr id="cpu3367" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+m3-8100Y+%40+1.10GHz&amp;id=3367">Intel Core m3-8100Y @ 1.10GHz
</a></td><td>3,005</td><td>1434</td><td>
<a href="cpu.php?cpu=Intel+Core+m3-8100Y+%40+1.10GHz&amp;id=3367#price">10.69
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+m3-8100Y+%40+1.10GHz&amp;id=3367#price">$281.00*</a></td></tr><tr id="cpu2664" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+m5-6Y54+%40+1.10GHz&amp;id=2664">Intel Core m5-6Y54 @ 1.10GHz
</a></td><td>2,161</td><td>1778</td><td>NA</td><td>NA</td></tr><tr id="cpu2670" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+m5-6Y57+%40+1.10GHz&amp;id=2670">Intel Core m5-6Y57 @ 1.10GHz
</a></td><td>2,336</td><td>1683</td><td>NA</td><td>NA</td></tr><tr id="cpu2641" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+m7-6Y75+%40+1.20GHz&amp;id=2641">Intel Core m7-6Y75 @ 1.20GHz
</a></td><td>2,269</td><td>1711</td><td>NA</td><td>NA</td></tr><tr id="cpu2316" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+M-5Y10+%40+0.80GHz&amp;id=2316">Intel Core M-5Y10 @ 0.80GHz
</a></td><td>1,627</td><td>2095</td><td>NA</td><td>NA</td></tr><tr id="cpu2499" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+M-5Y10a+%40+0.80GHz&amp;id=2499">Intel Core M-5Y10a @ 0.80GHz
</a></td><td>1,905</td><td>1921</td><td>NA</td><td>NA</td></tr><tr id="cpu2464" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+M-5Y10c+%40+0.80GHz&amp;id=2464">Intel Core M-5Y10c @ 0.80GHz
</a></td><td>1,719</td><td>2025</td><td>
<a href="cpu.php?cpu=Intel+Core+M-5Y10c+%40+0.80GHz&amp;id=2464#price">6.12
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+M-5Y10c+%40+0.80GHz&amp;id=2464#price">$281.00*</a></td></tr><tr id="cpu2515" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+M-5Y31+%40+0.90GHz&amp;id=2515">Intel Core M-5Y31 @ 0.90GHz
</a></td><td>2,091</td><td>1810</td><td>NA</td><td>NA</td></tr><tr id="cpu2517" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+M-5Y51+%40+1.10GHz&amp;id=2517">Intel Core M-5Y51 @ 1.10GHz
</a></td><td>2,011</td><td>1862</td><td>NA</td><td>NA</td></tr><tr id="cpu2382" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+M-5Y70+%40+1.10GHz&amp;id=2382">Intel Core M-5Y70 @ 1.10GHz
</a></td><td>1,705</td><td>2031</td><td>NA</td><td>NA</td></tr><tr id="cpu2465" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+M-5Y71+%40+1.20GHz&amp;id=2465">Intel Core M-5Y71 @ 1.20GHz
</a></td><td>2,261</td><td>1715</td><td>
<a href="cpu.php?cpu=Intel+Core+M-5Y71+%40+1.20GHz&amp;id=2465#price">8.05
</a></td><td>
<a href="cpu.php?cpu=Intel+Core+M-5Y71+%40+1.20GHz&amp;id=2465#price">$281.00*</a></td></tr><tr id="cpu578" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+Solo+T1300+%40+1.66GHz&amp;id=578">Intel Core Solo T1300 @ 1.66GHz
</a></td><td>210</td><td>3379</td><td>NA</td><td>NA</td></tr><tr id="cpu579" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+Solo+T1350+%40+1.86GHz&amp;id=579">Intel Core Solo T1350 @ 1.86GHz
</a></td><td>194</td><td>3403</td><td>NA</td><td>NA</td></tr><tr id="cpu1632" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+Solo+T1400+%40+1.83GHz&amp;id=1632">Intel Core Solo T1400 @ 1.83GHz
</a></td><td>253</td><td>3321</td><td>NA</td><td>NA</td></tr><tr id="cpu593" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+Solo+U1300+%40+1.06GHz&amp;id=593">Intel Core Solo U1300 @ 1.06GHz
</a></td><td>127</td><td>3494</td><td>NA</td><td>NA</td></tr><tr id="cpu904" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+Solo+U1400+%40+1.20GHz&amp;id=904">Intel Core Solo U1400 @ 1.20GHz
</a></td><td>130</td><td>3491</td><td>NA</td><td>NA</td></tr><tr id="cpu905" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Core+Solo+U1500+%40+1.33GHz&amp;id=905">Intel Core Solo U1500 @ 1.33GHz
</a></td><td>164</td><td>3442</td><td>NA</td><td>NA</td></tr><tr id="cpu1053" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4+1.50GHz&amp;id=1053">Intel Pentium 4 1.50GHz
</a></td><td>86</td><td>3523</td><td>NA</td><td>NA</td></tr><tr id="cpu1054" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4+1.60GHz&amp;id=1054">Intel Pentium 4 1.60GHz
</a></td><td>84</td><td>3524</td><td>NA</td><td>NA</td></tr><tr id="cpu1055" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4+1.70GHz&amp;id=1055">Intel Pentium 4 1.70GHz
</a></td><td>86</td><td>3522</td><td>NA</td><td>NA</td></tr><tr id="cpu1056" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4+1.80GHz&amp;id=1056">Intel Pentium 4 1.80GHz
</a></td><td>115</td><td>3507</td><td>NA</td><td>NA</td></tr><tr id="cpu1057" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4+1.90GHz&amp;id=1057">Intel Pentium 4 1.90GHz
</a></td><td>104</td><td>3513</td><td>NA</td><td>NA</td></tr><tr id="cpu1064" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4+2.00GHz&amp;id=1064">Intel Pentium 4 2.00GHz
</a></td><td>133</td><td>3487</td><td>NA</td><td>NA</td></tr><tr id="cpu1065" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4+2.20GHz&amp;id=1065">Intel Pentium 4 2.20GHz
</a></td><td>157</td><td>3455</td><td>NA</td><td>NA</td></tr><tr id="cpu1066" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4+2.26GHz&amp;id=1066">Intel Pentium 4 2.26GHz
</a></td><td>151</td><td>3467</td><td>NA</td><td>NA</td></tr><tr id="cpu1067" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4+2.40GHz&amp;id=1067">Intel Pentium 4 2.40GHz
</a></td><td>131</td><td>3490</td><td>NA</td><td>NA</td></tr><tr id="cpu1068" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4+2.50GHz&amp;id=1068">Intel Pentium 4 2.50GHz
</a></td><td>160</td><td>3449</td><td>NA</td><td>NA</td></tr><tr id="cpu1069" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4+2.53GHz&amp;id=1069">Intel Pentium 4 2.53GHz
</a></td><td>162</td><td>3445</td><td>NA</td><td>NA</td></tr><tr id="cpu1070" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4+2.60GHz&amp;id=1070">Intel Pentium 4 2.60GHz
</a></td><td>215</td><td>3374</td><td>NA</td><td>NA</td></tr><tr id="cpu1071" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4+2.66GHz&amp;id=1071">Intel Pentium 4 2.66GHz
</a></td><td>157</td><td>3454</td><td>NA</td><td>NA</td></tr><tr id="cpu1072" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4+2.80GHz&amp;id=1072">Intel Pentium 4 2.80GHz
</a></td><td>235</td><td>3348</td><td>NA</td><td>NA</td></tr><tr id="cpu1073" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4+2.93GHz&amp;id=1073">Intel Pentium 4 2.93GHz
</a></td><td>150</td><td>3468</td><td>NA</td><td>NA</td></tr><tr id="cpu1074" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4+3.00GHz&amp;id=1074">Intel Pentium 4 3.00GHz
</a></td><td>305</td><td>3239</td><td>NA</td><td>NA</td></tr><tr id="cpu1075" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4+3.06GHz&amp;id=1075">Intel Pentium 4 3.06GHz
</a></td><td>249</td><td>3328</td><td>NA</td><td>NA</td></tr><tr id="cpu1076" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4+3.20GHz&amp;id=1076">Intel Pentium 4 3.20GHz
</a></td><td>302</td><td>3242</td><td>NA</td><td>NA</td></tr><tr id="cpu1077" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4+3.40GHz&amp;id=1077">Intel Pentium 4 3.40GHz
</a></td><td>299</td><td>3247</td><td>NA</td><td>NA</td></tr><tr id="cpu1078" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4+3.46GHz&amp;id=1078">Intel Pentium 4 3.46GHz
</a></td><td>295</td><td>3253</td><td>NA</td><td>NA</td></tr><tr id="cpu1079" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4+3.60GHz&amp;id=1079">Intel Pentium 4 3.60GHz
</a></td><td>320</td><td>3222</td><td>NA</td><td>NA</td></tr><tr id="cpu1080" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4+3.73GHz&amp;id=1080">Intel Pentium 4 3.73GHz
</a></td><td>385</td><td>3143</td><td>NA</td><td>NA</td></tr><tr id="cpu1081" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4+3.80GHz&amp;id=1081">Intel Pentium 4 3.80GHz
</a></td><td>313</td><td>3234</td><td>NA</td><td>NA</td></tr><tr id="cpu3256" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4+3.83GHz&amp;id=3256">Intel Pentium 4 3.83GHz
</a></td><td>154</td><td>3461</td><td>NA</td><td>NA</td></tr><tr id="cpu1058" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4+1300MHz&amp;id=1058">Intel Pentium 4 1300MHz
</a></td><td>77</td><td>3528</td><td>NA</td><td>NA</td></tr><tr id="cpu1059" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4+1400MHz&amp;id=1059">Intel Pentium 4 1400MHz
</a></td><td>83</td><td>3525</td><td>NA</td><td>NA</td></tr><tr id="cpu1060" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4+1500MHz&amp;id=1060">Intel Pentium 4 1500MHz
</a></td><td>81</td><td>3526</td><td>NA</td><td>NA</td></tr><tr id="cpu1062" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4+1700MHz&amp;id=1062">Intel Pentium 4 1700MHz
</a></td><td>100</td><td>3516</td><td>NA</td><td>NA</td></tr><tr id="cpu1063" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4+1800MHz&amp;id=1063">Intel Pentium 4 1800MHz
</a></td><td>114</td><td>3509</td><td>NA</td><td>NA</td></tr><tr id="cpu1084" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4+Mobile+1.60GHz&amp;id=1084">Intel Pentium 4 Mobile 1.60GHz
</a></td><td>116</td><td>3505</td><td>NA</td><td>NA</td></tr><tr id="cpu1086" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4+Mobile+1.80GHz&amp;id=1086">Intel Pentium 4 Mobile 1.80GHz
</a></td><td>114</td><td>3508</td><td>NA</td><td>NA</td></tr><tr id="cpu1692" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4+Mobile+1.90GHz&amp;id=1692">Intel Pentium 4 Mobile 1.90GHz
</a></td><td>136</td><td>3485</td><td>NA</td><td>NA</td></tr><tr id="cpu1087" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4+Mobile+2.00GHz&amp;id=1087">Intel Pentium 4 Mobile 2.00GHz
</a></td><td>132</td><td>3489</td><td>NA</td><td>NA</td></tr><tr id="cpu1089" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+957+%40+1.20GHz&amp;id=1089">Intel Pentium 957 @ 1.20GHz
</a></td><td>622</td><td>2913</td><td>
<a href="cpu.php?cpu=Intel+Pentium+957+%40+1.20GHz&amp;id=1089#price">4.64
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+957+%40+1.20GHz&amp;id=1089#price">$134.00*</a></td></tr><tr id="cpu1090" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+967+%40+1.30GHz&amp;id=1090">Intel Pentium 967 @ 1.30GHz
</a></td><td>626</td><td>2906</td><td>NA</td><td>NA</td></tr><tr id="cpu1092" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+987+%40+1.50GHz&amp;id=1092">Intel Pentium 987 @ 1.50GHz
</a></td><td>653</td><td>2880</td><td>NA</td><td>NA</td></tr><tr id="cpu1798" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+997+%40+1.60GHz&amp;id=1798">Intel Pentium 997 @ 1.60GHz
</a></td><td>789</td><td>2744</td><td>NA</td><td>NA</td></tr><tr id="cpu1909" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+1403+%40+2.60GHz&amp;id=1909">Intel Pentium 1403 @ 2.60GHz
</a></td><td>1,851</td><td>1951</td><td>NA</td><td>NA</td></tr><tr id="cpu3322" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+1403+v2+%40+2.60GHz&amp;id=3322">Intel Pentium 1403 v2 @ 2.60GHz
</a></td><td>2,284</td><td>1704</td><td>NA</td><td>NA</td></tr><tr id="cpu1855" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+2020M+%40+2.40GHz&amp;id=1855">Intel Pentium 2020M @ 2.40GHz
</a></td><td>1,380</td><td>2249</td><td>
<a href="cpu.php?cpu=Intel+Pentium+2020M+%40+2.40GHz&amp;id=1855#price">10.30
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+2020M+%40+2.40GHz&amp;id=1855#price">$134.00*</a></td></tr><tr id="cpu2062" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+2030M+%40+2.50GHz&amp;id=2062">Intel Pentium 2030M @ 2.50GHz
</a></td><td>1,519</td><td>2164</td><td>
<a href="cpu.php?cpu=Intel+Pentium+2030M+%40+2.50GHz&amp;id=2062#price">11.34
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+2030M+%40+2.50GHz&amp;id=2062#price">$134.00*</a></td></tr><tr id="cpu1872" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+2117U+%40+1.80GHz&amp;id=1872">Intel Pentium 2117U @ 1.80GHz
</a></td><td>1,006</td><td>2543</td><td>
<a href="cpu.php?cpu=Intel+Pentium+2117U+%40+1.80GHz&amp;id=1872#price">7.50
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+2117U+%40+1.80GHz&amp;id=1872#price">$134.00*</a></td></tr><tr id="cpu2008" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+2127U+%40+1.90GHz&amp;id=2008">Intel Pentium 2127U @ 1.90GHz
</a></td><td>1,110</td><td>2455</td><td>
<a href="cpu.php?cpu=Intel+Pentium+2127U+%40+1.90GHz&amp;id=2008#price">8.28
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+2127U+%40+1.90GHz&amp;id=2008#price">$134.00*</a></td></tr><tr id="cpu2125" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+2129Y+%40+1.10GHz&amp;id=2125">Intel Pentium 2129Y @ 1.10GHz
</a></td><td>635</td><td>2896</td><td>
<a href="cpu.php?cpu=Intel+Pentium+2129Y+%40+1.10GHz&amp;id=2125#price">4.74
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+2129Y+%40+1.10GHz&amp;id=2125#price">$134.00*</a></td></tr><tr id="cpu2175" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+3550M+%40+2.30GHz&amp;id=2175">Intel Pentium 3550M @ 2.30GHz
</a></td><td>1,238</td><td>2350</td><td>
<a href="cpu.php?cpu=Intel+Pentium+3550M+%40+2.30GHz&amp;id=2175#price">5.73
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+3550M+%40+2.30GHz&amp;id=2175#price">$215.92*</a></td></tr><tr id="cpu2104" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+3556U+%40+1.70GHz&amp;id=2104">Intel Pentium 3556U @ 1.70GHz
</a></td><td>996</td><td>2556</td><td>NA</td><td>NA</td></tr><tr id="cpu2293" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+3558U+%40+1.70GHz&amp;id=2293">Intel Pentium 3558U @ 1.70GHz
</a></td><td>1,004</td><td>2547</td><td>NA</td><td>NA</td></tr><tr id="cpu2458" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+3560M+%40+2.40GHz&amp;id=2458">Intel Pentium 3560M @ 2.40GHz
</a></td><td>1,552</td><td>2142</td><td>NA</td><td>NA</td></tr><tr id="cpu2078" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+3560Y+%40+1.20GHz&amp;id=2078">Intel Pentium 3560Y @ 1.20GHz
</a></td><td>849</td><td>2682</td><td>NA</td><td>NA</td></tr><tr id="cpu2483" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+3805U+%40+1.90GHz&amp;id=2483">Intel Pentium 3805U @ 1.90GHz
</a></td><td>1,085</td><td>2478</td><td>NA</td><td>NA</td></tr><tr id="cpu2579" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+3825U+%40+1.90GHz&amp;id=2579">Intel Pentium 3825U @ 1.90GHz
</a></td><td>1,338</td><td>2266</td><td>NA</td><td>NA</td></tr><tr id="cpu2666" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4405U+%40+2.10GHz&amp;id=2666">Intel Pentium 4405U @ 2.10GHz
</a></td><td>2,067</td><td>1822</td><td>NA</td><td>NA</td></tr><tr id="cpu2775" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4405Y+%40+1.50GHz&amp;id=2775">Intel Pentium 4405Y @ 1.50GHz
</a></td><td>1,518</td><td>2165</td><td>NA</td><td>NA</td></tr><tr id="cpu3134" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4410Y+%40+1.50GHz&amp;id=3134">Intel Pentium 4410Y @ 1.50GHz
</a></td><td>1,444</td><td>2205</td><td>
<a href="cpu.php?cpu=Intel+Pentium+4410Y+%40+1.50GHz&amp;id=3134#price">8.97
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+4410Y+%40+1.50GHz&amp;id=3134#price">$161.00*</a></td></tr><tr id="cpu2977" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4415U+%40+2.30GHz&amp;id=2977">Intel Pentium 4415U @ 2.30GHz
</a></td><td>2,211</td><td>1749</td><td>NA</td><td>NA</td></tr><tr id="cpu3300" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4415Y+%40+1.60GHz&amp;id=3300">Intel Pentium 4415Y @ 1.60GHz
</a></td><td>1,616</td><td>2104</td><td>
<a href="cpu.php?cpu=Intel+Pentium+4415Y+%40+1.60GHz&amp;id=3300#price">10.04
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+4415Y+%40+1.60GHz&amp;id=3300#price">$161.00*</a></td></tr><tr id="cpu3417" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4417U+%40+2.30GHz&amp;id=3417">Intel Pentium 4417U @ 2.30GHz
</a></td><td>2,252</td><td>1723</td><td>
<a href="cpu.php?cpu=Intel+Pentium+4417U+%40+2.30GHz&amp;id=3417#price">13.98
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+4417U+%40+2.30GHz&amp;id=3417#price">$161.00*</a></td></tr><tr id="cpu3799" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+4425Y+%40+1.70GHz&amp;id=3799">Intel Pentium 4425Y @ 1.70GHz
</a></td><td>1,688</td><td>2048</td><td>
<a href="cpu.php?cpu=Intel+Pentium+4425Y+%40+1.70GHz&amp;id=3799#price">10.48
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+4425Y+%40+1.70GHz&amp;id=3799#price">$161.00*</a></td></tr><tr id="cpu3437" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+5405U+%40+2.30GHz&amp;id=3437">Intel Pentium 5405U @ 2.30GHz
</a></td><td>2,296</td><td>1700</td><td>
<a href="cpu.php?cpu=Intel+Pentium+5405U+%40+2.30GHz&amp;id=3437#price">14.26
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+5405U+%40+2.30GHz&amp;id=3437#price">$161.00*</a></td></tr><tr id="cpu3712" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+6405U+%40+2.40GHz&amp;id=3712">Intel Pentium 6405U @ 2.40GHz
</a></td><td>2,363</td><td>1669</td><td>
<a href="cpu.php?cpu=Intel+Pentium+6405U+%40+2.40GHz&amp;id=3712#price">14.68
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+6405U+%40+2.40GHz&amp;id=3712#price">$161.00*</a></td></tr><tr id="cpu4431" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+6805+%40+1.10GHz&amp;id=4431">Intel Pentium 6805 @ 1.10GHz
</a></td><td>4,600</td><td>1086</td><td>
<a href="cpu.php?cpu=Intel+Pentium+6805+%40+1.10GHz&amp;id=4431#price">28.57
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+6805+%40+1.10GHz&amp;id=4431#price">$161.00*</a></td></tr><tr id="cpu2323" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+A1018+%40+2.10GHz&amp;id=2323">Intel Pentium A1018 @ 2.10GHz
</a></td><td>1,117</td><td>2449</td><td>NA</td><td>NA</td></tr><tr id="cpu3666" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+A1020+%40+2.41GHz&amp;id=3666">Intel Pentium A1020 @ 2.41GHz
</a></td><td>1,265</td><td>2327</td><td>NA</td><td>NA</td></tr><tr id="cpu1093" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+B940+%40+2.00GHz&amp;id=1093">Intel Pentium B940 @ 2.00GHz
</a></td><td>802</td><td>2729</td><td>
<a href="cpu.php?cpu=Intel+Pentium+B940+%40+2.00GHz&amp;id=1093#price">26.79
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+B940+%40+2.00GHz&amp;id=1093#price">$29.94*</a></td></tr><tr id="cpu1094" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+B950+%40+2.10GHz&amp;id=1094">Intel Pentium B950 @ 2.10GHz
</a></td><td>964</td><td>2587</td><td>NA</td><td>NA</td></tr><tr id="cpu1095" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+B960+%40+2.20GHz&amp;id=1095">Intel Pentium B960 @ 2.20GHz
</a></td><td>897</td><td>2647</td><td>
<a href="cpu.php?cpu=Intel+Pentium+B960+%40+2.20GHz&amp;id=1095#price">23.19
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+B960+%40+2.20GHz&amp;id=1095#price">$38.68*</a></td></tr><tr id="cpu1096" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+B970+%40+2.30GHz&amp;id=1096">Intel Pentium B970 @ 2.30GHz
</a></td><td>1,097</td><td>2464</td><td>
<a href="cpu.php?cpu=Intel+Pentium+B970+%40+2.30GHz&amp;id=1096#price">21.51
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+B970+%40+2.30GHz&amp;id=1096#price">$50.99*</a></td></tr><tr id="cpu1796" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+B980+%40+2.40GHz&amp;id=1796">Intel Pentium B980 @ 2.40GHz
</a></td><td>1,075</td><td>2483</td><td>
<a href="cpu.php?cpu=Intel+Pentium+B980+%40+2.40GHz&amp;id=1796#price">30.03
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+B980+%40+2.40GHz&amp;id=1796#price">$35.81*</a></td></tr><tr id="cpu3141" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+D1508+%40+2.20GHz&amp;id=3141">Intel Pentium D1508 @ 2.20GHz
</a></td><td>3,240</td><td>1362</td><td>
<a href="cpu.php?cpu=Intel+Pentium+D1508+%40+2.20GHz&amp;id=3141#price">25.12
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+D1508+%40+2.20GHz&amp;id=3141#price">$129.00*</a></td></tr><tr id="cpu1125" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+D+805+%40+2.66GHz&amp;id=1125">Intel Pentium D 805 @ 2.66GHz
</a></td><td>374</td><td>3157</td><td>NA</td><td>NA</td></tr><tr id="cpu1127" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+D+830+%40+3.00GHz&amp;id=1127">Intel Pentium D 830 @ 3.00GHz
</a></td><td>513</td><td>3016</td><td>NA</td><td>NA</td></tr><tr id="cpu1126" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+D+915+%40+2.80GHz&amp;id=1126">Intel Pentium D 915 @ 2.80GHz
</a></td><td>465</td><td>3064</td><td>NA</td><td>NA</td></tr><tr id="cpu1128" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+D+940+%40+3.20GHz&amp;id=1128">Intel Pentium D 940 @ 3.20GHz
</a></td><td>498</td><td>3031</td><td>NA</td><td>NA</td></tr><tr id="cpu1129" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+D+950+%40+3.40GHz&amp;id=1129">Intel Pentium D 950 @ 3.40GHz
</a></td><td>680</td><td>2851</td><td>NA</td><td>NA</td></tr><tr id="cpu1131" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+D+960+%40+3.60GHz&amp;id=1131">Intel Pentium D 960 @ 3.60GHz
</a></td><td>743</td><td>2788</td><td>NA</td><td>NA</td></tr><tr id="cpu1133" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+E2140+%40+1.60GHz&amp;id=1133">Intel Pentium E2140 @ 1.60GHz
</a></td><td>508</td><td>3021</td><td>
<a href="cpu.php?cpu=Intel+Pentium+E2140+%40+1.60GHz&amp;id=1133#price">3.20
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+E2140+%40+1.60GHz&amp;id=1133#price">$159.00*</a></td></tr><tr id="cpu1134" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+E2160+%40+1.80GHz&amp;id=1134">Intel Pentium E2160 @ 1.80GHz
</a></td><td>625</td><td>2908</td><td>
<a href="cpu.php?cpu=Intel+Pentium+E2160+%40+1.80GHz&amp;id=1134#price">48.32
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+E2160+%40+1.80GHz&amp;id=1134#price">$12.94*</a></td></tr><tr id="cpu1135" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+E2180+%40+2.00GHz&amp;id=1135">Intel Pentium E2180 @ 2.00GHz
</a></td><td>664</td><td>2868</td><td>
<a href="cpu.php?cpu=Intel+Pentium+E2180+%40+2.00GHz&amp;id=1135#price">34.06
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+E2180+%40+2.00GHz&amp;id=1135#price">$19.50</a></td></tr><tr id="cpu1136" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+E2200+%40+2.20GHz&amp;id=1136">Intel Pentium E2200 @ 2.20GHz
</a></td><td>751</td><td>2781</td><td>
<a href="cpu.php?cpu=Intel+Pentium+E2200+%40+2.20GHz&amp;id=1136#price">13.91
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+E2200+%40+2.20GHz&amp;id=1136#price">$54.00</a></td></tr><tr id="cpu1387" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+E2210+%40+2.20GHz&amp;id=1387">Intel Pentium E2210 @ 2.20GHz
</a></td><td>702</td><td>2827</td><td>NA</td><td>NA</td></tr><tr id="cpu1137" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+E2220+%40+2.40GHz&amp;id=1137">Intel Pentium E2220 @ 2.40GHz
</a></td><td>793</td><td>2738</td><td>
<a href="cpu.php?cpu=Intel+Pentium+E2220+%40+2.40GHz&amp;id=1137#price">14.42
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+E2220+%40+2.40GHz&amp;id=1137#price">$55.00</a></td></tr><tr id="cpu1097" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+E5200+%40+2.50GHz&amp;id=1097">Intel Pentium E5200 @ 2.50GHz
</a></td><td>842</td><td>2688</td><td>
<a href="cpu.php?cpu=Intel+Pentium+E5200+%40+2.50GHz&amp;id=1097#price">16.86
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+E5200+%40+2.50GHz&amp;id=1097#price">$49.94</a></td></tr><tr id="cpu1098" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+E5300+%40+2.60GHz&amp;id=1098">Intel Pentium E5300 @ 2.60GHz
</a></td><td>913</td><td>2632</td><td>
<a href="cpu.php?cpu=Intel+Pentium+E5300+%40+2.60GHz&amp;id=1098#price">15.34
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+E5300+%40+2.60GHz&amp;id=1098#price">$59.49</a></td></tr><tr id="cpu1099" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+E5400+%40+2.70GHz&amp;id=1099">Intel Pentium E5400 @ 2.70GHz
</a></td><td>918</td><td>2629</td><td>
<a href="cpu.php?cpu=Intel+Pentium+E5400+%40+2.70GHz&amp;id=1099#price">70.66
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+E5400+%40+2.70GHz&amp;id=1099#price">$12.99</a></td></tr><tr id="cpu1100" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+E5500+%40+2.80GHz&amp;id=1100">Intel Pentium E5500 @ 2.80GHz
</a></td><td>1,005</td><td>2544</td><td>
<a href="cpu.php?cpu=Intel+Pentium+E5500+%40+2.80GHz&amp;id=1100#price">62.87
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+E5500+%40+2.80GHz&amp;id=1100#price">$15.99</a></td></tr><tr id="cpu1101" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+E5700+%40+3.00GHz&amp;id=1101">Intel Pentium E5700 @ 3.00GHz
</a></td><td>1,017</td><td>2529</td><td>
<a href="cpu.php?cpu=Intel+Pentium+E5700+%40+3.00GHz&amp;id=1101#price">14.52
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+E5700+%40+3.00GHz&amp;id=1101#price">$69.99</a></td></tr><tr id="cpu1102" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+E5800+%40+3.20GHz&amp;id=1102">Intel Pentium E5800 @ 3.20GHz
</a></td><td>1,145</td><td>2423</td><td>
<a href="cpu.php?cpu=Intel+Pentium+E5800+%40+3.20GHz&amp;id=1102#price">10.39
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+E5800+%40+3.20GHz&amp;id=1102#price">$110.19</a></td></tr><tr id="cpu1103" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+E6300+%40+2.80GHz&amp;id=1103">Intel Pentium E6300 @ 2.80GHz
</a></td><td>967</td><td>2583</td><td>
<a href="cpu.php?cpu=Intel+Pentium+E6300+%40+2.80GHz&amp;id=1103#price">1.71
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+E6300+%40+2.80GHz&amp;id=1103#price">$565.00*</a></td></tr><tr id="cpu1104" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+E6500+%40+2.93GHz&amp;id=1104">Intel Pentium E6500 @ 2.93GHz
</a></td><td>1,103</td><td>2460</td><td>
<a href="cpu.php?cpu=Intel+Pentium+E6500+%40+2.93GHz&amp;id=1104#price">32.43
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+E6500+%40+2.93GHz&amp;id=1104#price">$34.00</a></td></tr><tr id="cpu1105" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+E6600+%40+3.06GHz&amp;id=1105">Intel Pentium E6600 @ 3.06GHz
</a></td><td>1,025</td><td>2523</td><td>
<a href="cpu.php?cpu=Intel+Pentium+E6600+%40+3.06GHz&amp;id=1105#price">20.50
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+E6600+%40+3.06GHz&amp;id=1105#price">$50.00</a></td></tr><tr id="cpu1106" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+E6700+%40+3.20GHz&amp;id=1106">Intel Pentium E6700 @ 3.20GHz
</a></td><td>1,120</td><td>2446</td><td>
<a href="cpu.php?cpu=Intel+Pentium+E6700+%40+3.20GHz&amp;id=1106#price">31.11
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+E6700+%40+3.20GHz&amp;id=1106#price">$35.99</a></td></tr><tr id="cpu1398" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+E6800+%40+3.33GHz&amp;id=1398">Intel Pentium E6800 @ 3.33GHz
</a></td><td>1,184</td><td>2388</td><td>
<a href="cpu.php?cpu=Intel+Pentium+E6800+%40+3.33GHz&amp;id=1398#price">47.47
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+E6800+%40+3.33GHz&amp;id=1398#price">$24.95*</a></td></tr><tr id="cpu1130" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+Extreme+Edition+955+%40+3.46GHz&amp;id=1130">Intel Pentium Extreme Edition 955 @ 3.46GHz
</a></td><td>469</td><td>3058</td><td>
<a href="cpu.php?cpu=Intel+Pentium+Extreme+Edition+955+%40+3.46GHz&amp;id=1130#price">15.02
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+Extreme+Edition+955+%40+3.46GHz&amp;id=1130#price">$31.23*</a></td></tr><tr id="cpu1132" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+Extreme+Edition+965+%40+3.73GHz&amp;id=1132">Intel Pentium Extreme Edition 965 @ 3.73GHz
</a></td><td>987</td><td>2569</td><td>NA</td><td>NA</td></tr><tr id="cpu1107" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G620+%40+2.60GHz&amp;id=1107">Intel Pentium G620 @ 2.60GHz
</a></td><td>1,214</td><td>2370</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G620+%40+2.60GHz&amp;id=1107#price">94.97
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G620+%40+2.60GHz&amp;id=1107#price">$12.78</a></td></tr><tr id="cpu1108" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G620T+%40+2.20GHz&amp;id=1108">Intel Pentium G620T @ 2.20GHz
</a></td><td>896</td><td>2648</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G620T+%40+2.20GHz&amp;id=1108#price">44.84
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G620T+%40+2.20GHz&amp;id=1108#price">$19.99*</a></td></tr><tr id="cpu1109" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G630+%40+2.70GHz&amp;id=1109">Intel Pentium G630 @ 2.70GHz
</a></td><td>1,265</td><td>2326</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G630+%40+2.70GHz&amp;id=1109#price">50.64
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G630+%40+2.70GHz&amp;id=1109#price">$24.99</a></td></tr><tr id="cpu1110" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G630T+%40+2.30GHz&amp;id=1110">Intel Pentium G630T @ 2.30GHz
</a></td><td>1,067</td><td>2491</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G630T+%40+2.30GHz&amp;id=1110#price">14.22
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G630T+%40+2.30GHz&amp;id=1110#price">$75.00*</a></td></tr><tr id="cpu1111" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G640+%40+2.80GHz&amp;id=1111">Intel Pentium G640 @ 2.80GHz
</a></td><td>1,257</td><td>2335</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G640+%40+2.80GHz&amp;id=1111#price">41.90
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G640+%40+2.80GHz&amp;id=1111#price">$30.00</a></td></tr><tr id="cpu2100" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G640T+%40+2.40GHz&amp;id=2100">Intel Pentium G640T @ 2.40GHz
</a></td><td>1,139</td><td>2427</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G640T+%40+2.40GHz&amp;id=2100#price">22.78
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G640T+%40+2.40GHz&amp;id=2100#price">$50.00</a></td></tr><tr id="cpu1797" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G645+%40+2.90GHz&amp;id=1797">Intel Pentium G645 @ 2.90GHz
</a></td><td>1,331</td><td>2273</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G645+%40+2.90GHz&amp;id=1797#price">14.25
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G645+%40+2.90GHz&amp;id=1797#price">$93.35</a></td></tr><tr id="cpu1876" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G645T+%40+2.50GHz&amp;id=1876">Intel Pentium G645T @ 2.50GHz
</a></td><td>1,241</td><td>2347</td><td>NA</td><td>NA</td></tr><tr id="cpu1115" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G840+%40+2.80GHz&amp;id=1115">Intel Pentium G840 @ 2.80GHz
</a></td><td>1,140</td><td>2426</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G840+%40+2.80GHz&amp;id=1115#price">22.81
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G840+%40+2.80GHz&amp;id=1115#price">$49.99*</a></td></tr><tr id="cpu1116" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G850+%40+2.90GHz&amp;id=1116">Intel Pentium G850 @ 2.90GHz
</a></td><td>1,333</td><td>2270</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G850+%40+2.90GHz&amp;id=1116#price">12.82
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G850+%40+2.90GHz&amp;id=1116#price">$103.99</a></td></tr><tr id="cpu1117" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G860+%40+3.00GHz&amp;id=1117">Intel Pentium G860 @ 3.00GHz
</a></td><td>1,392</td><td>2241</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G860+%40+3.00GHz&amp;id=1117#price">60.57
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G860+%40+3.00GHz&amp;id=1117#price">$22.98</a></td></tr><tr id="cpu1484" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G870+%40+3.10GHz&amp;id=1484">Intel Pentium G870 @ 3.10GHz
</a></td><td>1,495</td><td>2181</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G870+%40+3.10GHz&amp;id=1484#price">15.41
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G870+%40+3.10GHz&amp;id=1484#price">$97.00*</a></td></tr><tr id="cpu1854" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G2010+%40+2.80GHz&amp;id=1854">Intel Pentium G2010 @ 2.80GHz
</a></td><td>1,509</td><td>2167</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G2010+%40+2.80GHz&amp;id=1854#price">60.39
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G2010+%40+2.80GHz&amp;id=1854#price">$24.99*</a></td></tr><tr id="cpu1839" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G2020+%40+2.90GHz&amp;id=1839">Intel Pentium G2020 @ 2.90GHz
</a></td><td>1,654</td><td>2070</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G2020+%40+2.90GHz&amp;id=1839#price">33.07
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G2020+%40+2.90GHz&amp;id=1839#price">$50.00</a></td></tr><tr id="cpu1838" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G2020T+%40+2.50GHz&amp;id=1838">Intel Pentium G2020T @ 2.50GHz
</a></td><td>1,308</td><td>2296</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G2020T+%40+2.50GHz&amp;id=1838#price">27.49
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G2020T+%40+2.50GHz&amp;id=1838#price">$47.60*</a></td></tr><tr id="cpu1961" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G2030+%40+3.00GHz&amp;id=1961">Intel Pentium G2030 @ 3.00GHz
</a></td><td>1,697</td><td>2039</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G2030+%40+3.00GHz&amp;id=1961#price">58.51
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G2030+%40+3.00GHz&amp;id=1961#price">$29.00</a></td></tr><tr id="cpu2135" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G2030T+%40+2.60GHz&amp;id=2135">Intel Pentium G2030T @ 2.60GHz
</a></td><td>1,595</td><td>2123</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G2030T+%40+2.60GHz&amp;id=2135#price">12.22
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G2030T+%40+2.60GHz&amp;id=2135#price">$130.50*</a></td></tr><tr id="cpu2786" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G2100T+%40+2.60GHz&amp;id=2786">Intel Pentium G2100T @ 2.60GHz
</a></td><td>1,691</td><td>2043</td><td>NA</td><td>NA</td></tr><tr id="cpu1443" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G2120+%40+3.10GHz&amp;id=1443">Intel Pentium G2120 @ 3.10GHz
</a></td><td>1,899</td><td>1927</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G2120+%40+3.10GHz&amp;id=1443#price">31.66
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G2120+%40+3.10GHz&amp;id=1443#price">$59.99</a></td></tr><tr id="cpu3684" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G2120T+%40+2.70GHz&amp;id=3684">Intel Pentium G2120T @ 2.70GHz
</a></td><td>1,613</td><td>2108</td><td>NA</td><td>NA</td></tr><tr id="cpu1864" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G2130+%40+3.20GHz&amp;id=1864">Intel Pentium G2130 @ 3.20GHz
</a></td><td>1,839</td><td>1962</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G2130+%40+3.20GHz&amp;id=1864#price">42.15
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G2130+%40+3.20GHz&amp;id=1864#price">$43.64</a></td></tr><tr id="cpu2136" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G2140+%40+3.30GHz&amp;id=2136">Intel Pentium G2140 @ 3.30GHz
</a></td><td>2,059</td><td>1828</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G2140+%40+3.30GHz&amp;id=2136#price">45.75
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G2140+%40+3.30GHz&amp;id=2136#price">$45.00</a></td></tr><tr id="cpu2020" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G3220+%40+3.00GHz&amp;id=2020">Intel Pentium G3220 @ 3.00GHz
</a></td><td>1,842</td><td>1960</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G3220+%40+3.00GHz&amp;id=2020#price">41.88
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G3220+%40+3.00GHz&amp;id=2020#price">$43.98</a></td></tr><tr id="cpu2189" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G3220T+%40+2.60GHz&amp;id=2189">Intel Pentium G3220T @ 2.60GHz
</a></td><td>1,539</td><td>2149</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G3220T+%40+2.60GHz&amp;id=2189#price">22.01
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G3220T+%40+2.60GHz&amp;id=2189#price">$69.95</a></td></tr><tr id="cpu2250" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G3240+%40+3.10GHz&amp;id=2250">Intel Pentium G3240 @ 3.10GHz
</a></td><td>1,897</td><td>1930</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G3240+%40+3.10GHz&amp;id=2250#price">27.32
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G3240+%40+3.10GHz&amp;id=2250#price">$69.44</a></td></tr><tr id="cpu2325" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G3240T+%40+2.70GHz&amp;id=2325">Intel Pentium G3240T @ 2.70GHz
</a></td><td>1,755</td><td>2005</td><td>NA</td><td>NA</td></tr><tr id="cpu2346" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G3250+%40+3.20GHz&amp;id=2346">Intel Pentium G3250 @ 3.20GHz
</a></td><td>1,906</td><td>1919</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G3250+%40+3.20GHz&amp;id=2346#price">27.24
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G3250+%40+3.20GHz&amp;id=2346#price">$69.99</a></td></tr><tr id="cpu2461" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G3250T+%40+2.80GHz&amp;id=2461">Intel Pentium G3250T @ 2.80GHz
</a></td><td>1,699</td><td>2036</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G3250T+%40+2.80GHz&amp;id=2461#price">34.00
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G3250T+%40+2.80GHz&amp;id=2461#price">$49.99*</a></td></tr><tr id="cpu2267" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G3258+%40+3.20GHz&amp;id=2267">Intel Pentium G3258 @ 3.20GHz
</a></td><td>2,056</td><td>1830</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G3258+%40+3.20GHz&amp;id=2267#price">68.59
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G3258+%40+3.20GHz&amp;id=2267#price">$29.98</a></td></tr><tr id="cpu2523" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G3260+%40+3.30GHz&amp;id=2523">Intel Pentium G3260 @ 3.30GHz
</a></td><td>2,027</td><td>1851</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G3260+%40+3.30GHz&amp;id=2523#price">45.04
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G3260+%40+3.30GHz&amp;id=2523#price">$44.99</a></td></tr><tr id="cpu2566" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G3260T+%40+2.90GHz&amp;id=2566">Intel Pentium G3260T @ 2.90GHz
</a></td><td>1,755</td><td>2006</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G3260T+%40+2.90GHz&amp;id=2566#price">35.10
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G3260T+%40+2.90GHz&amp;id=2566#price">$49.99*</a></td></tr><tr id="cpu2122" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G3320TE+%40+2.30GHz&amp;id=2122">Intel Pentium G3320TE @ 2.30GHz
</a></td><td>1,623</td><td>2098</td><td>NA</td><td>NA</td></tr><tr id="cpu2028" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G3420+%40+3.20GHz&amp;id=2028">Intel Pentium G3420 @ 3.20GHz
</a></td><td>1,989</td><td>1875</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G3420+%40+3.20GHz&amp;id=2028#price">28.42
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G3420+%40+3.20GHz&amp;id=2028#price">$69.99</a></td></tr><tr id="cpu2350" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G3420T+%40+2.70GHz&amp;id=2350">Intel Pentium G3420T @ 2.70GHz
</a></td><td>1,912</td><td>1914</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G3420T+%40+2.70GHz&amp;id=2350#price">11.95
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G3420T+%40+2.70GHz&amp;id=2350#price">$159.99*</a></td></tr><tr id="cpu2063" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G3430+%40+3.30GHz&amp;id=2063">Intel Pentium G3430 @ 3.30GHz
</a></td><td>2,139</td><td>1789</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G3430+%40+3.30GHz&amp;id=2063#price">35.66
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G3430+%40+3.30GHz&amp;id=2063#price">$59.99</a></td></tr><tr id="cpu2286" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G3440+%40+3.30GHz&amp;id=2286">Intel Pentium G3440 @ 3.30GHz
</a></td><td>2,129</td><td>1792</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G3440+%40+3.30GHz&amp;id=2286#price">35.50
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G3440+%40+3.30GHz&amp;id=2286#price">$59.99</a></td></tr><tr id="cpu2421" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G3440T+%40+2.80GHz&amp;id=2421">Intel Pentium G3440T @ 2.80GHz
</a></td><td>2,107</td><td>1803</td><td>NA</td><td>NA</td></tr><tr id="cpu2299" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G3450+%40+3.40GHz&amp;id=2299">Intel Pentium G3450 @ 3.40GHz
</a></td><td>1,903</td><td>1922</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G3450+%40+3.40GHz&amp;id=2299#price">31.73
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G3450+%40+3.40GHz&amp;id=2299#price">$59.99</a></td></tr><tr id="cpu2611" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G3450T+%40+2.90GHz&amp;id=2611">Intel Pentium G3450T @ 2.90GHz
</a></td><td>2,016</td><td>1859</td><td>NA</td><td>NA</td></tr><tr id="cpu2361" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G3460+%40+3.50GHz&amp;id=2361">Intel Pentium G3460 @ 3.50GHz
</a></td><td>2,147</td><td>1784</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G3460+%40+3.50GHz&amp;id=2361#price">12.26
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G3460+%40+3.50GHz&amp;id=2361#price">$175.19</a></td></tr><tr id="cpu2521" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G3470+%40+3.60GHz&amp;id=2521">Intel Pentium G3470 @ 3.60GHz
</a></td><td>2,428</td><td>1643</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G3470+%40+3.60GHz&amp;id=2521#price">37.36
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G3470+%40+3.60GHz&amp;id=2521#price">$64.99</a></td></tr><tr id="cpu2634" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G4400+%40+3.30GHz&amp;id=2634">Intel Pentium G4400 @ 3.30GHz
</a></td><td>2,595</td><td>1578</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G4400+%40+3.30GHz&amp;id=2634#price">11.80
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G4400+%40+3.30GHz&amp;id=2634#price">$219.99</a></td></tr><tr id="cpu2633" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G4400T+%40+2.90GHz&amp;id=2633">Intel Pentium G4400T @ 2.90GHz
</a></td><td>2,405</td><td>1650</td><td>NA</td><td>NA</td></tr><tr id="cpu3283" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G4400TE+%40+2.40GHz&amp;id=3283">Intel Pentium G4400TE @ 2.40GHz
</a></td><td>2,190</td><td>1764</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G4400TE+%40+2.40GHz&amp;id=3283#price">34.23
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G4400TE+%40+2.40GHz&amp;id=3283#price">$64.00*</a></td></tr><tr id="cpu2630" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G4500+%40+3.50GHz&amp;id=2630">Intel Pentium G4500 @ 3.50GHz
</a></td><td>2,696</td><td>1547</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G4500+%40+3.50GHz&amp;id=2630#price">12.37
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G4500+%40+3.50GHz&amp;id=2630#price">$218.00*</a></td></tr><tr id="cpu2734" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G4500T+%40+3.00GHz&amp;id=2734">Intel Pentium G4500T @ 3.00GHz
</a></td><td>2,518</td><td>1606</td><td>NA</td><td>NA</td></tr><tr id="cpu2660" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G4520+%40+3.60GHz&amp;id=2660">Intel Pentium G4520 @ 3.60GHz
</a></td><td>2,945</td><td>1454</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G4520+%40+3.60GHz&amp;id=2660#price">19.67
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G4520+%40+3.60GHz&amp;id=2660#price">$149.72</a></td></tr><tr id="cpu2925" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G4560+%40+3.50GHz&amp;id=2925">Intel Pentium G4560 @ 3.50GHz
</a></td><td>3,517</td><td>1291</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G4560+%40+3.50GHz&amp;id=2925#price">13.76
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G4560+%40+3.50GHz&amp;id=2925#price">$255.55</a></td></tr><tr id="cpu2983" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G4560T+%40+2.90GHz&amp;id=2983">Intel Pentium G4560T @ 2.90GHz
</a></td><td>2,968</td><td>1445</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G4560T+%40+2.90GHz&amp;id=2983#price">22.83
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G4560T+%40+2.90GHz&amp;id=2983#price">$129.99</a></td></tr><tr id="cpu2921" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G4600+%40+3.60GHz&amp;id=2921">Intel Pentium G4600 @ 3.60GHz
</a></td><td>3,589</td><td>1273</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G4600+%40+3.60GHz&amp;id=2921#price">25.28
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G4600+%40+3.60GHz&amp;id=2921#price">$141.99</a></td></tr><tr id="cpu3003" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G4600T+%40+3.00GHz&amp;id=3003">Intel Pentium G4600T @ 3.00GHz
</a></td><td>3,130</td><td>1397</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G4600T+%40+3.00GHz&amp;id=3003#price">26.09
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G4600T+%40+3.00GHz&amp;id=3003#price">$119.99</a></td></tr><tr id="cpu2948" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G4620+%40+3.70GHz&amp;id=2948">Intel Pentium G4620 @ 3.70GHz
</a></td><td>3,818</td><td>1223</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G4620+%40+3.70GHz&amp;id=2948#price">27.31
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G4620+%40+3.70GHz&amp;id=2948#price">$139.84</a></td></tr><tr id="cpu1112" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G6950+%40+2.80GHz&amp;id=1112">Intel Pentium G6950 @ 2.80GHz
</a></td><td>1,262</td><td>2330</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G6950+%40+2.80GHz&amp;id=1112#price">15.98
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G6950+%40+2.80GHz&amp;id=1112#price">$78.99</a></td></tr><tr id="cpu1113" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G6951+%40+2.80GHz&amp;id=1113">Intel Pentium G6951 @ 2.80GHz
</a></td><td>1,401</td><td>2236</td><td>
<a href="cpu.php?cpu=Intel+Pentium+G6951+%40+2.80GHz&amp;id=1113#price">14.91
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+G6951+%40+2.80GHz&amp;id=1113#price">$94.00*</a></td></tr><tr id="cpu1114" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+G6960+%40+2.93GHz&amp;id=1114">Intel Pentium G6960 @ 2.93GHz
</a></td><td>1,293</td><td>2305</td><td>NA</td><td>NA</td></tr><tr id="cpu3909" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+Gold+7505+%40+2.00GHz&amp;id=3909">Intel Pentium Gold 7505 @ 2.00GHz
</a></td><td>5,418</td><td>967</td><td>NA</td><td>NA</td></tr><tr id="cpu3248" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+Gold+G5400+%40+3.70GHz&amp;id=3248">Intel Pentium Gold G5400 @ 3.70GHz
</a></td><td>3,724</td><td>1241</td><td>
<a href="cpu.php?cpu=Intel+Pentium+Gold+G5400+%40+3.70GHz&amp;id=3248#price">32.39
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+Gold+G5400+%40+3.70GHz&amp;id=3248#price">$114.97</a></td></tr><tr id="cpu3329" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+Gold+G5400T+%40+3.10GHz&amp;id=3329">Intel Pentium Gold G5400T @ 3.10GHz
</a></td><td>3,119</td><td>1400</td><td>
<a href="cpu.php?cpu=Intel+Pentium+Gold+G5400T+%40+3.10GHz&amp;id=3329#price">19.62
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+Gold+G5400T+%40+3.10GHz&amp;id=3329#price">$159.00*</a></td></tr><tr id="cpu3471" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+Gold+G5420+%40+3.80GHz&amp;id=3471">Intel Pentium Gold G5420 @ 3.80GHz
</a></td><td>3,528</td><td>1286</td><td>
<a href="cpu.php?cpu=Intel+Pentium+Gold+G5420+%40+3.80GHz&amp;id=3471#price">29.42
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+Gold+G5420+%40+3.80GHz&amp;id=3471#price">$119.95</a></td></tr><tr id="cpu3589" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+Gold+G5420T+%40+3.20GHz&amp;id=3589">Intel Pentium Gold G5420T @ 3.20GHz
</a></td><td>3,716</td><td>1244</td><td>
<a href="cpu.php?cpu=Intel+Pentium+Gold+G5420T+%40+3.20GHz&amp;id=3589#price">58.06
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+Gold+G5420T+%40+3.20GHz&amp;id=3589#price">$64.00*</a></td></tr><tr id="cpu3271" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+Gold+G5500+%40+3.80GHz&amp;id=3271">Intel Pentium Gold G5500 @ 3.80GHz
</a></td><td>3,712</td><td>1246</td><td>
<a href="cpu.php?cpu=Intel+Pentium+Gold+G5500+%40+3.80GHz&amp;id=3271#price">19.57
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+Gold+G5500+%40+3.80GHz&amp;id=3271#price">$189.69</a></td></tr><tr id="cpu3264" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+Gold+G5500T+%40+3.20GHz&amp;id=3264">Intel Pentium Gold G5500T @ 3.20GHz
</a></td><td>3,234</td><td>1363</td><td>
<a href="cpu.php?cpu=Intel+Pentium+Gold+G5500T+%40+3.20GHz&amp;id=3264#price">43.13
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+Gold+G5500T+%40+3.20GHz&amp;id=3264#price">$75.00*</a></td></tr><tr id="cpu3261" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+Gold+G5600+%40+3.90GHz&amp;id=3261">Intel Pentium Gold G5600 @ 3.90GHz
</a></td><td>3,769</td><td>1232</td><td>
<a href="cpu.php?cpu=Intel+Pentium+Gold+G5600+%40+3.90GHz&amp;id=3261#price">23.75
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+Gold+G5600+%40+3.90GHz&amp;id=3261#price">$158.67</a></td></tr><tr id="cpu3568" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+Gold+G5600F+%40+3.90GHz&amp;id=3568">Intel Pentium Gold G5600F @ 3.90GHz
</a></td><td>4,160</td><td>1160</td><td>NA</td><td>NA</td></tr><tr id="cpu3626" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+Gold+G5620+%40+4.00GHz&amp;id=3626">Intel Pentium Gold G5620 @ 4.00GHz
</a></td><td>4,102</td><td>1173</td><td>
<a href="cpu.php?cpu=Intel+Pentium+Gold+G5620+%40+4.00GHz&amp;id=3626#price">25.64
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+Gold+G5620+%40+4.00GHz&amp;id=3626#price">$159.99</a></td></tr><tr id="cpu3805" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+Gold+G6400+%40+4.00GHz&amp;id=3805">Intel Pentium Gold G6400 @ 4.00GHz
</a></td><td>4,155</td><td>1162</td><td>
<a href="cpu.php?cpu=Intel+Pentium+Gold+G6400+%40+4.00GHz&amp;id=3805#price">38.33
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+Gold+G6400+%40+4.00GHz&amp;id=3805#price">$108.41</a></td></tr><tr id="cpu4308" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+Gold+G6400T+%40+3.40GHz&amp;id=4308">Intel Pentium Gold G6400T @ 3.40GHz
</a></td><td>3,610</td><td>1268</td><td>
<a href="cpu.php?cpu=Intel+Pentium+Gold+G6400T+%40+3.40GHz&amp;id=4308#price">56.40
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+Gold+G6400T+%40+3.40GHz&amp;id=4308#price">$64.00*</a></td></tr><tr id="cpu4367" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+Gold+G6405+%40+4.10GHz&amp;id=4367">Intel Pentium Gold G6405 @ 4.10GHz
</a></td><td>4,292</td><td>1140</td><td>
<a href="cpu.php?cpu=Intel+Pentium+Gold+G6405+%40+4.10GHz&amp;id=4367#price">50.50
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+Gold+G6405+%40+4.10GHz&amp;id=4367#price">$84.99</a></td></tr><tr id="cpu4368" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+Gold+G6405T+%40+3.50GHz&amp;id=4368">Intel Pentium Gold G6405T @ 3.50GHz
</a></td><td>3,746</td><td>1237</td><td>
<a href="cpu.php?cpu=Intel+Pentium+Gold+G6405T+%40+3.50GHz&amp;id=4368#price">58.54
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+Gold+G6405T+%40+3.50GHz&amp;id=4368#price">$64.00*</a></td></tr><tr id="cpu3857" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+Gold+G6500+%40+4.10GHz&amp;id=3857">Intel Pentium Gold G6500 @ 4.10GHz
</a></td><td>4,191</td><td>1152</td><td>
<a href="cpu.php?cpu=Intel+Pentium+Gold+G6500+%40+4.10GHz&amp;id=3857#price">38.12
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+Gold+G6500+%40+4.10GHz&amp;id=3857#price">$109.95</a></td></tr><tr id="cpu4182" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+Gold+G6500T+%40+3.50GHz&amp;id=4182">Intel Pentium Gold G6500T @ 3.50GHz
</a></td><td>4,005</td><td>1195</td><td>
<a href="cpu.php?cpu=Intel+Pentium+Gold+G6500T+%40+3.50GHz&amp;id=4182#price">53.40
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+Gold+G6500T+%40+3.50GHz&amp;id=4182#price">$75.00*</a></td></tr><tr id="cpu4467" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+Gold+G6505+%40+4.20GHz&amp;id=4467">Intel Pentium Gold G6505 @ 4.20GHz
</a></td><td>4,378</td><td>1124</td><td>
<a href="cpu.php?cpu=Intel+Pentium+Gold+G6505+%40+4.20GHz&amp;id=4467#price">58.37
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+Gold+G6505+%40+4.20GHz&amp;id=4467#price">$75.00*</a></td></tr><tr id="cpu4168" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+Gold+G6600+%40+4.20GHz&amp;id=4168">Intel Pentium Gold G6600 @ 4.20GHz
</a></td><td>4,396</td><td>1120</td><td>
<a href="cpu.php?cpu=Intel+Pentium+Gold+G6600+%40+4.20GHz&amp;id=4168#price">29.31
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+Gold+G6600+%40+4.20GHz&amp;id=4168#price">$149.99</a></td></tr><tr id="cpu4461" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+Gold+G6605+%40+4.30GHz&amp;id=4461">Intel Pentium Gold G6605 @ 4.30GHz
</a></td><td>4,567</td><td>1092</td><td>
<a href="cpu.php?cpu=Intel+Pentium+Gold+G6605+%40+4.30GHz&amp;id=4461#price">53.10
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+Gold+G6605+%40+4.30GHz&amp;id=4461#price">$86.00*</a></td></tr><tr id="cpu1695" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+III+1400+%40+1400MHz&amp;id=1695">Intel Pentium III 1400 @ 1400MHz
</a></td><td>193</td><td>3405</td><td>NA</td><td>NA</td></tr><tr id="cpu1146" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+III+1400S+%40+1400MHz&amp;id=1146">Intel Pentium III 1400S @ 1400MHz
</a></td><td>194</td><td>3402</td><td>NA</td><td>NA</td></tr><tr id="cpu1700" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+III+Mobile+800MHz&amp;id=1700">Intel Pentium III Mobile 800MHz
</a></td><td>119</td><td>3503</td><td>NA</td><td>NA</td></tr><tr id="cpu1152" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+III+Mobile+866MHz&amp;id=1152">Intel Pentium III Mobile 866MHz
</a></td><td>99</td><td>3517</td><td>NA</td><td>NA</td></tr><tr id="cpu1698" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+III+Mobile+1066MHz&amp;id=1698">Intel Pentium III Mobile 1066MHz
</a></td><td>160</td><td>3448</td><td>NA</td><td>NA</td></tr><tr id="cpu1150" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+III+Mobile+1133MHz&amp;id=1150">Intel Pentium III Mobile 1133MHz
</a></td><td>164</td><td>3443</td><td>NA</td><td>NA</td></tr><tr id="cpu1151" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+III+Mobile+1200MHz&amp;id=1151">Intel Pentium III Mobile 1200MHz
</a></td><td>156</td><td>3456</td><td>NA</td><td>NA</td></tr><tr id="cpu2221" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+J2850+%40+2.41GHz&amp;id=2221">Intel Pentium J2850 @ 2.41GHz
</a></td><td>1,016</td><td>2531</td><td>NA</td><td>NA</td></tr><tr id="cpu2173" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+J2900+%40+2.41GHz&amp;id=2173">Intel Pentium J2900 @ 2.41GHz
</a></td><td>1,236</td><td>2353</td><td>NA</td><td>NA</td></tr><tr id="cpu2784" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+J3710+%40+1.60GHz&amp;id=2784">Intel Pentium J3710 @ 1.60GHz
</a></td><td>1,422</td><td>2220</td><td>NA</td><td>NA</td></tr><tr id="cpu2877" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+J4205+%40+1.50GHz&amp;id=2877">Intel Pentium J4205 @ 1.50GHz
</a></td><td>2,371</td><td>1661</td><td>NA</td><td>NA</td></tr><tr id="cpu1153" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+M+1.10GHz&amp;id=1153">Intel Pentium M 1.10GHz
</a></td><td>184</td><td>3414</td><td>NA</td><td>NA</td></tr><tr id="cpu1154" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+M+1.20GHz&amp;id=1154">Intel Pentium M 1.20GHz
</a></td><td>199</td><td>3392</td><td>NA</td><td>NA</td></tr><tr id="cpu1155" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+M+1.30GHz&amp;id=1155">Intel Pentium M 1.30GHz
</a></td><td>196</td><td>3398</td><td>NA</td><td>NA</td></tr><tr id="cpu1156" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+M+1.40GHz&amp;id=1156">Intel Pentium M 1.40GHz
</a></td><td>225</td><td>3365</td><td>NA</td><td>NA</td></tr><tr id="cpu1157" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+M+1.50GHz&amp;id=1157">Intel Pentium M 1.50GHz
</a></td><td>240</td><td>3338</td><td>NA</td><td>NA</td></tr><tr id="cpu1158" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+M+1.60GHz&amp;id=1158">Intel Pentium M 1.60GHz
</a></td><td>229</td><td>3360</td><td>NA</td><td>NA</td></tr><tr id="cpu1159" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+M+1.70GHz&amp;id=1159">Intel Pentium M 1.70GHz
</a></td><td>239</td><td>3339</td><td>NA</td><td>NA</td></tr><tr id="cpu1160" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+M+1.73GHz&amp;id=1160">Intel Pentium M 1.73GHz
</a></td><td>205</td><td>3387</td><td>NA</td><td>NA</td></tr><tr id="cpu1161" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+M+1.80GHz&amp;id=1161">Intel Pentium M 1.80GHz
</a></td><td>280</td><td>3279</td><td>NA</td><td>NA</td></tr><tr id="cpu1162" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+M+1.86GHz&amp;id=1162">Intel Pentium M 1.86GHz
</a></td><td>238</td><td>3341</td><td>NA</td><td>NA</td></tr><tr id="cpu1171" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+M+2.00GHz&amp;id=1171">Intel Pentium M 2.00GHz
</a></td><td>270</td><td>3292</td><td>NA</td><td>NA</td></tr><tr id="cpu1172" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+M+2.10GHz&amp;id=1172">Intel Pentium M 2.10GHz
</a></td><td>292</td><td>3261</td><td>NA</td><td>NA</td></tr><tr id="cpu1173" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+M+2.13GHz&amp;id=1173">Intel Pentium M 2.13GHz
</a></td><td>271</td><td>3289</td><td>NA</td><td>NA</td></tr><tr id="cpu1174" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+M+2.26GHz&amp;id=1174">Intel Pentium M 2.26GHz
</a></td><td>227</td><td>3362</td><td>NA</td><td>NA</td></tr><tr id="cpu1175" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+M+900MHz&amp;id=1175">Intel Pentium M 900MHz
</a></td><td>141</td><td>3479</td><td>NA</td><td>NA</td></tr><tr id="cpu1163" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+M+1000MHz&amp;id=1163">Intel Pentium M 1000MHz
</a></td><td>156</td><td>3458</td><td>NA</td><td>NA</td></tr><tr id="cpu1165" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+M+1200MHz&amp;id=1165">Intel Pentium M 1200MHz
</a></td><td>155</td><td>3460</td><td>NA</td><td>NA</td></tr><tr id="cpu1166" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+M+1300MHz&amp;id=1166">Intel Pentium M 1300MHz
</a></td><td>197</td><td>3395</td><td>NA</td><td>NA</td></tr><tr id="cpu1167" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+M+1400MHz&amp;id=1167">Intel Pentium M 1400MHz
</a></td><td>208</td><td>3382</td><td>NA</td><td>NA</td></tr><tr id="cpu1168" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+M+1500MHz&amp;id=1168">Intel Pentium M 1500MHz
</a></td><td>188</td><td>3412</td><td>NA</td><td>NA</td></tr><tr id="cpu1169" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+M+1600MHz&amp;id=1169">Intel Pentium M 1600MHz
</a></td><td>193</td><td>3406</td><td>NA</td><td>NA</td></tr><tr id="cpu1170" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+M+1700MHz&amp;id=1170">Intel Pentium M 1700MHz
</a></td><td>237</td><td>3345</td><td>NA</td><td>NA</td></tr><tr id="cpu2107" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+N3510+%40+1.99GHz&amp;id=2107">Intel Pentium N3510 @ 1.99GHz
</a></td><td>878</td><td>2659</td><td>NA</td><td>NA</td></tr><tr id="cpu2123" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+N3520+%40+2.16GHz&amp;id=2123">Intel Pentium N3520 @ 2.16GHz
</a></td><td>1,116</td><td>2450</td><td>NA</td><td>NA</td></tr><tr id="cpu2278" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+N3530+%40+2.16GHz&amp;id=2278">Intel Pentium N3530 @ 2.16GHz
</a></td><td>1,201</td><td>2379</td><td>NA</td><td>NA</td></tr><tr id="cpu2408" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+N3540+%40+2.16GHz&amp;id=2408">Intel Pentium N3540 @ 2.16GHz
</a></td><td>1,216</td><td>2365</td><td>
<a href="cpu.php?cpu=Intel+Pentium+N3540+%40+2.16GHz&amp;id=2408#price">4.85
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+N3540+%40+2.16GHz&amp;id=2408#price">$250.87*</a></td></tr><tr id="cpu2513" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+N3700+%40+1.60GHz&amp;id=2513">Intel Pentium N3700 @ 1.60GHz
</a></td><td>1,313</td><td>2291</td><td>
<a href="cpu.php?cpu=Intel+Pentium+N3700+%40+1.60GHz&amp;id=2513#price">2.95
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+N3700+%40+1.60GHz&amp;id=2513#price">$444.78*</a></td></tr><tr id="cpu2730" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+N3710+%40+1.60GHz&amp;id=2730">Intel Pentium N3710 @ 1.60GHz
</a></td><td>1,356</td><td>2258</td><td>NA</td><td>NA</td></tr><tr id="cpu2886" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+N4200+%40+1.10GHz&amp;id=2886">Intel Pentium N4200 @ 1.10GHz
</a></td><td>2,157</td><td>1781</td><td>
<a href="cpu.php?cpu=Intel+Pentium+N4200+%40+1.10GHz&amp;id=2886#price">9.43
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+N4200+%40+1.10GHz&amp;id=2886#price">$228.71*</a></td></tr><tr id="cpu4287" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+N6415+%40+1.20GHz&amp;id=4287">Intel Pentium N6415 @ 1.20GHz
</a></td><td>3,760</td><td>1233</td><td>
<a href="cpu.php?cpu=Intel+Pentium+N6415+%40+1.20GHz&amp;id=4287#price">47.00
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+N6415+%40+1.20GHz&amp;id=4287#price">$80.00*</a></td></tr><tr id="cpu1118" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+P6000+%40+1.87GHz&amp;id=1118">Intel Pentium P6000 @ 1.87GHz
</a></td><td>789</td><td>2747</td><td>NA</td><td>NA</td></tr><tr id="cpu1119" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+P6100+%40+2.00GHz&amp;id=1119">Intel Pentium P6100 @ 2.00GHz
</a></td><td>828</td><td>2701</td><td>
<a href="cpu.php?cpu=Intel+Pentium+P6100+%40+2.00GHz&amp;id=1119#price">29.10
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+P6100+%40+2.00GHz&amp;id=1119#price">$28.44*</a></td></tr><tr id="cpu1120" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+P6200+%40+2.13GHz&amp;id=1120">Intel Pentium P6200 @ 2.13GHz
</a></td><td>833</td><td>2700</td><td>
<a href="cpu.php?cpu=Intel+Pentium+P6200+%40+2.13GHz&amp;id=1120#price">33.37
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+P6200+%40+2.13GHz&amp;id=1120#price">$24.95</a></td></tr><tr id="cpu1121" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+P6300+%40+2.27GHz&amp;id=1121">Intel Pentium P6300 @ 2.27GHz
</a></td><td>967</td><td>2584</td><td>NA</td><td>NA</td></tr><tr id="cpu3144" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+Silver+J5005+%40+1.50GHz&amp;id=3144">Intel Pentium Silver J5005 @ 1.50GHz
</a></td><td>3,083</td><td>1414</td><td>
<a href="cpu.php?cpu=Intel+Pentium+Silver+J5005+%40+1.50GHz&amp;id=3144#price">5.91
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+Silver+J5005+%40+1.50GHz&amp;id=3144#price">$521.99*</a></td></tr><tr id="cpu3665" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+Silver+J5040+%40+2.00GHz&amp;id=3665">Intel Pentium Silver J5040 @ 2.00GHz
</a></td><td>3,646</td><td>1260</td><td>NA</td><td>NA</td></tr><tr id="cpu3204" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+Silver+N5000+%40+1.10GHz&amp;id=3204">Intel Pentium Silver N5000 @ 1.10GHz
</a></td><td>2,598</td><td>1577</td><td>
<a href="cpu.php?cpu=Intel+Pentium+Silver+N5000+%40+1.10GHz&amp;id=3204#price">16.14
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+Silver+N5000+%40+1.10GHz&amp;id=3204#price">$161.00*</a></td></tr><tr id="cpu3670" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+Silver+N5030+%40+1.10GHz&amp;id=3670">Intel Pentium Silver N5030 @ 1.10GHz
</a></td><td>2,642</td><td>1562</td><td>NA</td><td>NA</td></tr><tr id="cpu4177" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+Silver+N6000+%40+1.10GHz&amp;id=4177">Intel Pentium Silver N6000 @ 1.10GHz
</a></td><td>3,592</td><td>1272</td><td>NA</td><td>NA</td></tr><tr id="cpu598" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+SU2700+%40+1.30GHz&amp;id=598">Intel Pentium SU2700 @ 1.30GHz
</a></td><td>239</td><td>3340</td><td>NA</td><td>NA</td></tr><tr id="cpu599" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+SU4100+%40+1.30GHz&amp;id=599">Intel Pentium SU4100 @ 1.30GHz
</a></td><td>476</td><td>3049</td><td>NA</td><td>NA</td></tr><tr id="cpu585" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+T2060+%40+1.60GHz&amp;id=585">Intel Pentium T2060 @ 1.60GHz
</a></td><td>330</td><td>3216</td><td>NA</td><td>NA</td></tr><tr id="cpu586" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+T2080+%40+1.73GHz&amp;id=586">Intel Pentium T2080 @ 1.73GHz
</a></td><td>348</td><td>3186</td><td>
<a href="cpu.php?cpu=Intel+Pentium+T2080+%40+1.73GHz&amp;id=586#price">2.18
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+T2080+%40+1.73GHz&amp;id=586#price">$159.95*</a></td></tr><tr id="cpu587" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+T2130+%40+1.86GHz&amp;id=587">Intel Pentium T2130 @ 1.86GHz
</a></td><td>382</td><td>3149</td><td>NA</td><td>NA</td></tr><tr id="cpu1138" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+T2310+%40+1.46GHz&amp;id=1138">Intel Pentium T2310 @ 1.46GHz
</a></td><td>467</td><td>3059</td><td>NA</td><td>NA</td></tr><tr id="cpu1139" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+T2330+%40+1.60GHz&amp;id=1139">Intel Pentium T2330 @ 1.60GHz
</a></td><td>529</td><td>3003</td><td>NA</td><td>NA</td></tr><tr id="cpu1140" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+T2370+%40+1.73GHz&amp;id=1140">Intel Pentium T2370 @ 1.73GHz
</a></td><td>502</td><td>3026</td><td>
<a href="cpu.php?cpu=Intel+Pentium+T2370+%40+1.73GHz&amp;id=1140#price">14.35
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+T2370+%40+1.73GHz&amp;id=1140#price">$35.00*</a></td></tr><tr id="cpu1141" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+T2390+%40+1.86GHz&amp;id=1141">Intel Pentium T2390 @ 1.86GHz
</a></td><td>543</td><td>2991</td><td>NA</td><td>NA</td></tr><tr id="cpu1142" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+T2410+%40+2.00GHz&amp;id=1142">Intel Pentium T2410 @ 2.00GHz
</a></td><td>569</td><td>2971</td><td>NA</td><td>NA</td></tr><tr id="cpu1143" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+T3200+%40+2.00GHz&amp;id=1143">Intel Pentium T3200 @ 2.00GHz
</a></td><td>612</td><td>2923</td><td>
<a href="cpu.php?cpu=Intel+Pentium+T3200+%40+2.00GHz&amp;id=1143#price">51.02
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+T3200+%40+2.00GHz&amp;id=1143#price">$12.00*</a></td></tr><tr id="cpu1144" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+T3400+%40+2.16GHz&amp;id=1144">Intel Pentium T3400 @ 2.16GHz
</a></td><td>613</td><td>2922</td><td>
<a href="cpu.php?cpu=Intel+Pentium+T3400+%40+2.16GHz&amp;id=1144#price">7.67
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+T3400+%40+2.16GHz&amp;id=1144#price">$79.95</a></td></tr><tr id="cpu1399" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+T4200+%40+2.00GHz&amp;id=1399">Intel Pentium T4200 @ 2.00GHz
</a></td><td>717</td><td>2814</td><td>
<a href="cpu.php?cpu=Intel+Pentium+T4200+%40+2.00GHz&amp;id=1399#price">59.72
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+T4200+%40+2.00GHz&amp;id=1399#price">$12.00*</a></td></tr><tr id="cpu1400" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+T4300+%40+2.10GHz&amp;id=1400">Intel Pentium T4300 @ 2.10GHz
</a></td><td>768</td><td>2768</td><td>
<a href="cpu.php?cpu=Intel+Pentium+T4300+%40+2.10GHz&amp;id=1400#price">7.76
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+T4300+%40+2.10GHz&amp;id=1400#price">$98.95*</a></td></tr><tr id="cpu1122" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+T4400+%40+2.20GHz&amp;id=1122">Intel Pentium T4400 @ 2.20GHz
</a></td><td>750</td><td>2782</td><td>NA</td><td>NA</td></tr><tr id="cpu1402" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+T4500+%40+2.30GHz&amp;id=1402">Intel Pentium T4500 @ 2.30GHz
</a></td><td>770</td><td>2763</td><td>
<a href="cpu.php?cpu=Intel+Pentium+T4500+%40+2.30GHz&amp;id=1402#price">25.71
</a></td><td>
<a href="cpu.php?cpu=Intel+Pentium+T4500+%40+2.30GHz&amp;id=1402#price">$29.95</a></td></tr><tr id="cpu1123" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+U5400+%40+1.20GHz&amp;id=1123">Intel Pentium U5400 @ 1.20GHz
</a></td><td>439</td><td>3092</td><td>NA</td><td>NA</td></tr><tr id="cpu1124" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Pentium+U5600+%40+1.33GHz&amp;id=1124">Intel Pentium U5600 @ 1.33GHz
</a></td><td>611</td><td>2925</td><td>NA</td><td>NA</td></tr><tr id="cpu580" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+T1400+%40+1.73GHz&amp;id=580">Intel T1400 @ 1.73GHz
</a></td><td>475</td><td>3053</td><td>
<a href="cpu.php?cpu=Intel+T1400+%40+1.73GHz&amp;id=580#price">31.70
</a></td><td>
<a href="cpu.php?cpu=Intel+T1400+%40+1.73GHz&amp;id=580#price">$15.00*</a></td></tr><tr id="cpu581" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+T1500+%40+1.86GHz&amp;id=581">Intel T1500 @ 1.86GHz
</a></td><td>548</td><td>2988</td><td>NA</td><td>NA</td></tr><tr id="cpu1815" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+T2050+%40+2.00GHz&amp;id=1815">Intel T2050 @ 2.00GHz
</a></td><td>516</td><td>3013</td><td>NA</td><td>NA</td></tr><tr id="cpu1315" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+2.00GHz&amp;id=1315">Intel Xeon 2.00GHz
</a></td><td>152</td><td>3466</td><td>NA</td><td>NA</td></tr><tr id="cpu1712" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+XEON+2.20GHz&amp;id=1712">Intel XEON 2.20GHz
</a></td><td>164</td><td>3439</td><td>NA</td><td>NA</td></tr><tr id="cpu1316" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+2.40GHz&amp;id=1316">Intel Xeon 2.40GHz
</a></td><td>180</td><td>3422</td><td>
<a href="cpu.php?cpu=Intel+Xeon+2.40GHz&amp;id=1316#price">19.73
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+2.40GHz&amp;id=1316#price">$9.10*</a></td></tr><tr id="cpu1317" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+2.80GHz&amp;id=1317">Intel Xeon 2.80GHz
</a></td><td>260</td><td>3311</td><td>NA</td><td>NA</td></tr><tr id="cpu1318" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+3.00GHz&amp;id=1318">Intel Xeon 3.00GHz
</a></td><td>425</td><td>3104</td><td>NA</td><td>NA</td></tr><tr id="cpu1320" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+3.20GHz&amp;id=1320">Intel Xeon 3.20GHz
</a></td><td>478</td><td>3047</td><td>NA</td><td>NA</td></tr><tr id="cpu1321" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+3.40GHz&amp;id=1321">Intel Xeon 3.40GHz
</a></td><td>375</td><td>3156</td><td>NA</td><td>NA</td></tr><tr id="cpu1322" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+3.60GHz&amp;id=1322">Intel Xeon 3.60GHz
</a></td><td>403</td><td>3123</td><td>
<a href="cpu.php?cpu=Intel+Xeon+3.60GHz&amp;id=1322#price">0.47
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+3.60GHz&amp;id=1322#price">$851.00*</a></td></tr><tr id="cpu1323" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+3.73GHz&amp;id=1323">Intel Xeon 3.73GHz
</a></td><td>901</td><td>2643</td><td>NA</td><td>NA</td></tr><tr id="cpu1324" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+3.80GHz&amp;id=1324">Intel Xeon 3.80GHz
</a></td><td>393</td><td>3138</td><td>
<a href="cpu.php?cpu=Intel+Xeon+3.80GHz&amp;id=1324#price">0.46
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+3.80GHz&amp;id=1324#price">$851.00*</a></td></tr><tr id="cpu1176" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+3040+%40+1.86GHz&amp;id=1176">Intel Xeon 3040 @ 1.86GHz
</a></td><td>789</td><td>2745</td><td>
<a href="cpu.php?cpu=Intel+Xeon+3040+%40+1.86GHz&amp;id=1176#price">31.52
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+3040+%40+1.86GHz&amp;id=1176#price">$25.04*</a></td></tr><tr id="cpu1177" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+3050+%40+2.13GHz&amp;id=1177">Intel Xeon 3050 @ 2.13GHz
</a></td><td>841</td><td>2690</td><td>
<a href="cpu.php?cpu=Intel+Xeon+3050+%40+2.13GHz&amp;id=1177#price">5.32
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+3050+%40+2.13GHz&amp;id=1177#price">$157.95*</a></td></tr><tr id="cpu1178" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+3060+%40+2.40GHz&amp;id=1178">Intel Xeon 3060 @ 2.40GHz
</a></td><td>939</td><td>2611</td><td>
<a href="cpu.php?cpu=Intel+Xeon+3060+%40+2.40GHz&amp;id=1178#price">40.84
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+3060+%40+2.40GHz&amp;id=1178#price">$22.99*</a></td></tr><tr id="cpu1179" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+3065+%40+2.33GHz&amp;id=1179">Intel Xeon 3065 @ 2.33GHz
</a></td><td>867</td><td>2668</td><td>
<a href="cpu.php?cpu=Intel+Xeon+3065+%40+2.33GHz&amp;id=1179#price">41.49
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+3065+%40+2.33GHz&amp;id=1179#price">$20.90*</a></td></tr><tr id="cpu1180" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+3070+%40+2.66GHz&amp;id=1180">Intel Xeon 3070 @ 2.66GHz
</a></td><td>1,025</td><td>2522</td><td>
<a href="cpu.php?cpu=Intel+Xeon+3070+%40+2.66GHz&amp;id=1180#price">28.32
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+3070+%40+2.66GHz&amp;id=1180#price">$36.19</a></td></tr><tr id="cpu1703" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+3075+%40+2.66GHz&amp;id=1703">Intel Xeon 3075 @ 2.66GHz
</a></td><td>1,096</td><td>2465</td><td>
<a href="cpu.php?cpu=Intel+Xeon+3075+%40+2.66GHz&amp;id=1703#price">3.13
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+3075+%40+2.66GHz&amp;id=1703#price">$349.95*</a></td></tr><tr id="cpu2642" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+3085+%40+3.00GHz&amp;id=2642">Intel Xeon 3085 @ 3.00GHz
</a></td><td>1,070</td><td>2487</td><td>NA</td><td>NA</td></tr><tr id="cpu1181" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+5110+%40+1.60GHz&amp;id=1181">Intel Xeon 5110 @ 1.60GHz
</a></td><td>600</td><td>2934</td><td>
<a href="cpu.php?cpu=Intel+Xeon+5110+%40+1.60GHz&amp;id=1181#price">17.14
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+5110+%40+1.60GHz&amp;id=1181#price">$35.00*</a></td></tr><tr id="cpu1182" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+5120+%40+1.86GHz&amp;id=1182">Intel Xeon 5120 @ 1.86GHz
</a></td><td>763</td><td>2773</td><td>
<a href="cpu.php?cpu=Intel+Xeon+5120+%40+1.86GHz&amp;id=1182#price">0.53
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+5120+%40+1.86GHz&amp;id=1182#price">$1,444.90</a></td></tr><tr id="cpu1183" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+5130+%40+2.00GHz&amp;id=1183">Intel Xeon 5130 @ 2.00GHz
</a></td><td>769</td><td>2765</td><td>
<a href="cpu.php?cpu=Intel+Xeon+5130+%40+2.00GHz&amp;id=1183#price">15.70
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+5130+%40+2.00GHz&amp;id=1183#price">$48.99*</a></td></tr><tr id="cpu2098" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+5133+%40+2.20GHz&amp;id=2098">Intel Xeon 5133 @ 2.20GHz
</a></td><td>887</td><td>2651</td><td>NA</td><td>NA</td></tr><tr id="cpu1184" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+5140+%40+2.33GHz&amp;id=1184">Intel Xeon 5140 @ 2.33GHz
</a></td><td>857</td><td>2677</td><td>
<a href="cpu.php?cpu=Intel+Xeon+5140+%40+2.33GHz&amp;id=1184#price">23.16
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+5140+%40+2.33GHz&amp;id=1184#price">$36.99*</a></td></tr><tr id="cpu1185" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+5148+%40+2.33GHz&amp;id=1185">Intel Xeon 5148 @ 2.33GHz
</a></td><td>912</td><td>2634</td><td>
<a href="cpu.php?cpu=Intel+Xeon+5148+%40+2.33GHz&amp;id=1185#price">45.62
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+5148+%40+2.33GHz&amp;id=1185#price">$20.00*</a></td></tr><tr id="cpu1186" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+5150+%40+2.66GHz&amp;id=1186">Intel Xeon 5150 @ 2.66GHz
</a></td><td>728</td><td>2806</td><td>
<a href="cpu.php?cpu=Intel+Xeon+5150+%40+2.66GHz&amp;id=1186#price">23.50
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+5150+%40+2.66GHz&amp;id=1186#price">$30.99*</a></td></tr><tr id="cpu1187" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+5160+%40+3.00GHz&amp;id=1187">Intel Xeon 5160 @ 3.00GHz
</a></td><td>963</td><td>2588</td><td>
<a href="cpu.php?cpu=Intel+Xeon+5160+%40+3.00GHz&amp;id=1187#price">22.14
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+5160+%40+3.00GHz&amp;id=1187#price">$43.50*</a></td></tr><tr id="cpu3483" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+%40+2.00GHz&amp;id=3483">Intel Xeon @ 2.00GHz
</a></td><td>7,363</td><td>716</td><td>NA</td><td>NA</td></tr><tr id="cpu3212" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+%40+2.20GHz&amp;id=3212">Intel Xeon @ 2.20GHz
</a></td><td>1,324</td><td>2284</td><td>NA</td><td>NA</td></tr><tr id="cpu3174" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Bronze+3104+%40+1.70GHz&amp;id=3174">Intel Xeon Bronze 3104 @ 1.70GHz
</a></td><td>4,887</td><td>1044</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Bronze+3104+%40+1.70GHz&amp;id=3174#price">15.92
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Bronze+3104+%40+1.70GHz&amp;id=3174#price">$306.86</a></td></tr><tr id="cpu3230" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Bronze+3106+%40+1.70GHz&amp;id=3230">Intel Xeon Bronze 3106 @ 1.70GHz
</a></td><td>6,532</td><td>824</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Bronze+3106+%40+1.70GHz&amp;id=3230#price">19.79
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Bronze+3106+%40+1.70GHz&amp;id=3230#price">$329.99</a></td></tr><tr id="cpu3649" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Bronze+3204+%40+1.90GHz&amp;id=3649">Intel Xeon Bronze 3204 @ 1.90GHz
</a></td><td>5,060</td><td>1021</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Bronze+3204+%40+1.90GHz&amp;id=3649#price">22.49
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Bronze+3204+%40+1.90GHz&amp;id=3649#price">$225.00*</a></td></tr><tr id="cpu2799" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+D-1518+%40+2.20GHz&amp;id=2799">Intel Xeon D-1518 @ 2.20GHz
</a></td><td>4,784</td><td>1059</td><td>NA</td><td>NA</td></tr><tr id="cpu2662" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+D-1520+%40+2.20GHz&amp;id=2662">Intel Xeon D-1520 @ 2.20GHz
</a></td><td>3,324</td><td>1329</td><td>NA</td><td>NA</td></tr><tr id="cpu2712" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+D-1521+%40+2.40GHz&amp;id=2712">Intel Xeon D-1521 @ 2.40GHz
</a></td><td>6,017</td><td>897</td><td>NA</td><td>NA</td></tr><tr id="cpu2764" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+D-1528+%40+1.90GHz&amp;id=2764">Intel Xeon D-1528 @ 1.90GHz
</a></td><td>5,910</td><td>913</td><td>NA</td><td>NA</td></tr><tr id="cpu3107" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+D-1531+%40+2.20GHz&amp;id=3107">Intel Xeon D-1531 @ 2.20GHz
</a></td><td>7,967</td><td>656</td><td>
<a href="cpu.php?cpu=Intel+Xeon+D-1531+%40+2.20GHz&amp;id=3107#price">22.89
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+D-1531+%40+2.20GHz&amp;id=3107#price">$348.00*</a></td></tr><tr id="cpu3244" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+D-1537+%40+1.70GHz&amp;id=3244">Intel Xeon D-1537 @ 1.70GHz
</a></td><td>7,176</td><td>741</td><td>
<a href="cpu.php?cpu=Intel+Xeon+D-1537+%40+1.70GHz&amp;id=3244#price">12.57
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+D-1537+%40+1.70GHz&amp;id=3244#price">$571.00*</a></td></tr><tr id="cpu3537" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+D-1539+%40+1.60GHz&amp;id=3537">Intel Xeon D-1539 @ 1.60GHz
</a></td><td>7,175</td><td>742</td><td>
<a href="cpu.php?cpu=Intel+Xeon+D-1539+%40+1.60GHz&amp;id=3537#price">14.76
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+D-1539+%40+1.60GHz&amp;id=3537#price">$486.00*</a></td></tr><tr id="cpu2507" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+D-1540+%40+2.00GHz&amp;id=2507">Intel Xeon D-1540 @ 2.00GHz
</a></td><td>6,982</td><td>771</td><td>NA</td><td>NA</td></tr><tr id="cpu2718" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+D-1541+%40+2.10GHz&amp;id=2718">Intel Xeon D-1541 @ 2.10GHz
</a></td><td>9,544</td><td>551</td><td>NA</td><td>NA</td></tr><tr id="cpu3429" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+D-1548+%40+2.00GHz&amp;id=3429">Intel Xeon D-1548 @ 2.00GHz
</a></td><td>9,075</td><td>579</td><td>
<a href="cpu.php?cpu=Intel+Xeon+D-1548+%40+2.00GHz&amp;id=3429#price">16.35
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+D-1548+%40+2.00GHz&amp;id=3429#price">$555.00*</a></td></tr><tr id="cpu3519" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+D-1557+%40+1.50GHz&amp;id=3519">Intel Xeon D-1557 @ 1.50GHz
</a></td><td>7,118</td><td>748</td><td>
<a href="cpu.php?cpu=Intel+Xeon+D-1557+%40+1.50GHz&amp;id=3519#price">10.26
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+D-1557+%40+1.50GHz&amp;id=3519#price">$694.00*</a></td></tr><tr id="cpu3066" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+D-1559+%40+1.50GHz&amp;id=3066">Intel Xeon D-1559 @ 1.50GHz
</a></td><td>5,647</td><td>941</td><td>NA</td><td>NA</td></tr><tr id="cpu3006" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+D-1567+%40+2.10GHz&amp;id=3006">Intel Xeon D-1567 @ 2.10GHz
</a></td><td>9,236</td><td>569</td><td>NA</td><td>NA</td></tr><tr id="cpu3844" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+D-1577+%40+1.30GHz&amp;id=3844">Intel Xeon D-1577 @ 1.30GHz
</a></td><td>11,645</td><td>449</td><td>
<a href="cpu.php?cpu=Intel+Xeon+D-1577+%40+1.30GHz&amp;id=3844#price">9.90
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+D-1577+%40+1.30GHz&amp;id=3844#price">$1,176.00*</a></td></tr><tr id="cpu2835" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+D-1587+%40+1.70GHz&amp;id=2835">Intel Xeon D-1587 @ 1.70GHz
</a></td><td>9,223</td><td>570</td><td>NA</td><td>NA</td></tr><tr id="cpu3889" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+D-1602+%40+2.50GHz&amp;id=3889">Intel Xeon D-1602 @ 2.50GHz
</a></td><td>2,459</td><td>1627</td><td>
<a href="cpu.php?cpu=Intel+Xeon+D-1602+%40+2.50GHz&amp;id=3889#price">23.20
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+D-1602+%40+2.50GHz&amp;id=3889#price">$106.00*</a></td></tr><tr id="cpu4278" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+D-1622+%40+2.60GHz&amp;id=4278">Intel Xeon D-1622 @ 2.60GHz
</a></td><td>6,205</td><td>868</td><td>
<a href="cpu.php?cpu=Intel+Xeon+D-1622+%40+2.60GHz&amp;id=4278#price">36.50
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+D-1622+%40+2.60GHz&amp;id=4278#price">$170.00*</a></td></tr><tr id="cpu3319" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+D-2123IT+%40+2.20GHz&amp;id=3319">Intel Xeon D-2123IT @ 2.20GHz
</a></td><td>7,731</td><td>677</td><td>
<a href="cpu.php?cpu=Intel+Xeon+D-2123IT+%40+2.20GHz&amp;id=3319#price">36.30
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+D-2123IT+%40+2.20GHz&amp;id=3319#price">$213.00*</a></td></tr><tr id="cpu3379" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+D-2141I+%40+2.20GHz&amp;id=3379">Intel Xeon D-2141I @ 2.20GHz
</a></td><td>12,177</td><td>429</td><td>
<a href="cpu.php?cpu=Intel+Xeon+D-2141I+%40+2.20GHz&amp;id=3379#price">21.94
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+D-2141I+%40+2.20GHz&amp;id=3379#price">$555.00*</a></td></tr><tr id="cpu3312" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+D-2143IT+%40+2.20GHz&amp;id=3312">Intel Xeon D-2143IT @ 2.20GHz
</a></td><td>13,107</td><td>397</td><td>
<a href="cpu.php?cpu=Intel+Xeon+D-2143IT+%40+2.20GHz&amp;id=3312#price">23.16
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+D-2143IT+%40+2.20GHz&amp;id=3312#price">$566.00*</a></td></tr><tr id="cpu3530" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+D-2146NT+%40+2.30GHz&amp;id=3530">Intel Xeon D-2146NT @ 2.30GHz
</a></td><td>11,704</td><td>446</td><td>
<a href="cpu.php?cpu=Intel+Xeon+D-2146NT+%40+2.30GHz&amp;id=3530#price">18.26
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+D-2146NT+%40+2.30GHz&amp;id=3530#price">$641.00*</a></td></tr><tr id="cpu3644" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+D-2166NT+%40+2.00GHz&amp;id=3644">Intel Xeon D-2166NT @ 2.00GHz
</a></td><td>15,105</td><td>320</td><td>
<a href="cpu.php?cpu=Intel+Xeon+D-2166NT+%40+2.00GHz&amp;id=3644#price">15.03
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+D-2166NT+%40+2.00GHz&amp;id=3644#price">$1,005.00*</a></td></tr><tr id="cpu3268" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+D-2183IT+%40+2.20GHz&amp;id=3268">Intel Xeon D-2183IT @ 2.20GHz
</a></td><td>18,385</td><td>240</td><td>
<a href="cpu.php?cpu=Intel+Xeon+D-2183IT+%40+2.20GHz&amp;id=3268#price">10.42
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+D-2183IT+%40+2.20GHz&amp;id=3268#price">$1,764.00*</a></td></tr><tr id="cpu3663" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+D-2187NT+%40+2.00GHz&amp;id=3663">Intel Xeon D-2187NT @ 2.00GHz
</a></td><td>18,070</td><td>249</td><td>
<a href="cpu.php?cpu=Intel+Xeon+D-2187NT+%40+2.00GHz&amp;id=3663#price">9.08
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+D-2187NT+%40+2.00GHz&amp;id=3663#price">$1,989.00*</a></td></tr><tr id="cpu3656" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1205+v6+%40+3.00GHz&amp;id=3656">Intel Xeon E3-1205 v6 @ 3.00GHz
</a></td><td>5,682</td><td>935</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1205+v6+%40+3.00GHz&amp;id=3656#price">29.44
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1205+v6+%40+3.00GHz&amp;id=3656#price">$193.00*</a></td></tr><tr id="cpu1196" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1220+%40+3.10GHz&amp;id=1196">Intel Xeon E3-1220 @ 3.10GHz
</a></td><td>3,788</td><td>1229</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1220+%40+3.10GHz&amp;id=1196#price">26.55
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1220+%40+3.10GHz&amp;id=1196#price">$142.67</a></td></tr><tr id="cpu1188" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1220+V2+%40+3.10GHz&amp;id=1188">Intel Xeon E3-1220 V2 @ 3.10GHz
</a></td><td>4,692</td><td>1075</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1220+V2+%40+3.10GHz&amp;id=1188#price">36.10
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1220+V2+%40+3.10GHz&amp;id=1188#price">$129.95</a></td></tr><tr id="cpu2022" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1220+v3+%40+3.10GHz&amp;id=2022">Intel Xeon E3-1220 v3 @ 3.10GHz
</a></td><td>5,111</td><td>1015</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1220+v3+%40+3.10GHz&amp;id=2022#price">85.39
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1220+v3+%40+3.10GHz&amp;id=2022#price">$59.85</a></td></tr><tr id="cpu2692" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1220+v5+%40+3.00GHz&amp;id=2692">Intel Xeon E3-1220 v5 @ 3.00GHz
</a></td><td>5,483</td><td>959</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1220+v5+%40+3.00GHz&amp;id=2692#price">27.63
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1220+v5+%40+3.00GHz&amp;id=2692#price">$198.42</a></td></tr><tr id="cpu3131" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1220+v6+%40+3.00GHz&amp;id=3131">Intel Xeon E3-1220 v6 @ 3.00GHz
</a></td><td>5,717</td><td>932</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1220+v6+%40+3.00GHz&amp;id=3131#price">26.07
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1220+v6+%40+3.00GHz&amp;id=3131#price">$219.32</a></td></tr><tr id="cpu1197" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1220L+%40+2.20GHz&amp;id=1197">Intel Xeon E3-1220L @ 2.20GHz
</a></td><td>2,050</td><td>1832</td><td>NA</td><td>NA</td></tr><tr id="cpu2183" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1220L+V2+%40+2.30GHz&amp;id=2183">Intel Xeon E3-1220L V2 @ 2.30GHz
</a></td><td>2,845</td><td>1493</td><td>NA</td><td>NA</td></tr><tr id="cpu2251" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1220L+v3+%40+1.10GHz&amp;id=2251">Intel Xeon E3-1220L v3 @ 1.10GHz
</a></td><td>1,407</td><td>2231</td><td>NA</td><td>NA</td></tr><tr id="cpu1198" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1225+%40+3.10GHz&amp;id=1198">Intel Xeon E3-1225 @ 3.10GHz
</a></td><td>3,778</td><td>1230</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1225+%40+3.10GHz&amp;id=1198#price">17.72
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1225+%40+3.10GHz&amp;id=1198#price">$213.19</a></td></tr><tr id="cpu1485" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1225+V2+%40+3.20GHz&amp;id=1485">Intel Xeon E3-1225 V2 @ 3.20GHz
</a></td><td>4,751</td><td>1069</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1225+V2+%40+3.20GHz&amp;id=1485#price">21.10
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1225+V2+%40+3.20GHz&amp;id=1485#price">$225.19</a></td></tr><tr id="cpu1993" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1225+v3+%40+3.20GHz&amp;id=1993">Intel Xeon E3-1225 v3 @ 3.20GHz
</a></td><td>5,272</td><td>990</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1225+v3+%40+3.20GHz&amp;id=1993#price">58.58
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1225+v3+%40+3.20GHz&amp;id=1993#price">$89.99</a></td></tr><tr id="cpu2707" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1225+v5+%40+3.30GHz&amp;id=2707">Intel Xeon E3-1225 v5 @ 3.30GHz
</a></td><td>5,870</td><td>917</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1225+v5+%40+3.30GHz&amp;id=2707#price">34.54
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1225+v5+%40+3.30GHz&amp;id=2707#price">$169.95</a></td></tr><tr id="cpu3019" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1225+v6+%40+3.30GHz&amp;id=3019">Intel Xeon E3-1225 v6 @ 3.30GHz
</a></td><td>6,264</td><td>862</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1225+v6+%40+3.30GHz&amp;id=3019#price">29.87
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1225+v6+%40+3.30GHz&amp;id=3019#price">$209.70</a></td></tr><tr id="cpu2297" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1226+v3+%40+3.30GHz&amp;id=2297">Intel Xeon E3-1226 v3 @ 3.30GHz
</a></td><td>5,412</td><td>968</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1226+v3+%40+3.30GHz&amp;id=2297#price">54.20
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1226+v3+%40+3.30GHz&amp;id=2297#price">$99.85</a></td></tr><tr id="cpu1199" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1230+%40+3.20GHz&amp;id=1199">Intel Xeon E3-1230 @ 3.20GHz
</a></td><td>5,010</td><td>1027</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1230+%40+3.20GHz&amp;id=1199#price">18.54
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1230+%40+3.20GHz&amp;id=1199#price">$270.19</a></td></tr><tr id="cpu1189" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1230+V2+%40+3.30GHz&amp;id=1189">Intel Xeon E3-1230 V2 @ 3.30GHz
</a></td><td>6,177</td><td>874</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1230+V2+%40+3.30GHz&amp;id=1189#price">30.25
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1230+V2+%40+3.30GHz&amp;id=1189#price">$204.19</a></td></tr><tr id="cpu1942" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1230+v3+%40+3.30GHz&amp;id=1942">Intel Xeon E3-1230 v3 @ 3.30GHz
</a></td><td>6,784</td><td>795</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1230+v3+%40+3.30GHz&amp;id=1942#price">17.90
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1230+v3+%40+3.30GHz&amp;id=1942#price">$379.00</a></td></tr><tr id="cpu2693" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1230+v5+%40+3.40GHz&amp;id=2693">Intel Xeon E3-1230 v5 @ 3.40GHz
</a></td><td>7,907</td><td>661</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1230+v5+%40+3.40GHz&amp;id=2693#price">10.88
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1230+v5+%40+3.40GHz&amp;id=2693#price">$727.00</a></td></tr><tr id="cpu3032" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1230+v6+%40+3.50GHz&amp;id=3032">Intel Xeon E3-1230 v6 @ 3.50GHz
</a></td><td>8,266</td><td>630</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1230+v6+%40+3.50GHz&amp;id=3032#price">30.98
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1230+v6+%40+3.50GHz&amp;id=3032#price">$266.87</a></td></tr><tr id="cpu2116" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1230L+v3+%40+1.80GHz&amp;id=2116">Intel Xeon E3-1230L v3 @ 1.80GHz
</a></td><td>4,764</td><td>1064</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1230L+v3+%40+1.80GHz&amp;id=2116#price">10.62
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1230L+v3+%40+1.80GHz&amp;id=2116#price">$448.50</a></td></tr><tr id="cpu2246" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1231+v3+%40+3.40GHz&amp;id=2246">Intel Xeon E3-1231 v3 @ 3.40GHz
</a></td><td>6,972</td><td>772</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1231+v3+%40+3.40GHz&amp;id=2246#price">69.83
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1231+v3+%40+3.40GHz&amp;id=2246#price">$99.85</a></td></tr><tr id="cpu1200" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1235+%40+3.20GHz&amp;id=1200">Intel Xeon E3-1235 @ 3.20GHz
</a></td><td>4,725</td><td>1072</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1235+%40+3.20GHz&amp;id=1200#price">20.19
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1235+%40+3.20GHz&amp;id=1200#price">$234.00</a></td></tr><tr id="cpu2985" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1235L+v5+%40+2.00GHz&amp;id=2985">Intel Xeon E3-1235L v5 @ 2.00GHz
</a></td><td>5,013</td><td>1026</td><td>NA</td><td>NA</td></tr><tr id="cpu1201" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1240+%40+3.30GHz&amp;id=1201">Intel Xeon E3-1240 @ 3.30GHz
</a></td><td>5,263</td><td>992</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1240+%40+3.30GHz&amp;id=1201#price">29.41
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1240+%40+3.30GHz&amp;id=1201#price">$178.95</a></td></tr><tr id="cpu1190" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1240+V2+%40+3.40GHz&amp;id=1190">Intel Xeon E3-1240 V2 @ 3.40GHz
</a></td><td>6,302</td><td>856</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1240+V2+%40+3.40GHz&amp;id=1190#price">63.02
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1240+V2+%40+3.40GHz&amp;id=1190#price">$99.99</a></td></tr><tr id="cpu1952" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1240+v3+%40+3.40GHz&amp;id=1952">Intel Xeon E3-1240 v3 @ 3.40GHz
</a></td><td>6,987</td><td>769</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1240+v3+%40+3.40GHz&amp;id=1952#price">10.26
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1240+v3+%40+3.40GHz&amp;id=1952#price">$681.00*</a></td></tr><tr id="cpu2636" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1240+v5+%40+3.50GHz&amp;id=2636">Intel Xeon E3-1240 v5 @ 3.50GHz
</a></td><td>8,282</td><td>628</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1240+v5+%40+3.50GHz&amp;id=2636#price">23.67
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1240+v5+%40+3.50GHz&amp;id=2636#price">$349.95</a></td></tr><tr id="cpu3053" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1240+v6+%40+3.70GHz&amp;id=3053">Intel Xeon E3-1240 v6 @ 3.70GHz
</a></td><td>8,777</td><td>599</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1240+v6+%40+3.70GHz&amp;id=3053#price">27.26
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1240+v6+%40+3.70GHz&amp;id=3053#price">$321.95</a></td></tr><tr id="cpu2495" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1240L+v3+%40+2.00GHz&amp;id=2495">Intel Xeon E3-1240L v3 @ 2.00GHz
</a></td><td>5,062</td><td>1020</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1240L+v3+%40+2.00GHz&amp;id=2495#price">5.65
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1240L+v3+%40+2.00GHz&amp;id=2495#price">$895.50*</a></td></tr><tr id="cpu3087" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1240L+v5+%40+2.10GHz&amp;id=3087">Intel Xeon E3-1240L v5 @ 2.10GHz
</a></td><td>6,072</td><td>892</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1240L+v5+%40+2.10GHz&amp;id=3087#price">21.84
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1240L+v5+%40+2.10GHz&amp;id=3087#price">$278.00*</a></td></tr><tr id="cpu2341" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1241+v3+%40+3.50GHz&amp;id=2341">Intel Xeon E3-1241 v3 @ 3.50GHz
</a></td><td>7,118</td><td>747</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1241+v3+%40+3.50GHz&amp;id=2341#price">54.91
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1241+v3+%40+3.50GHz&amp;id=2341#price">$129.63</a></td></tr><tr id="cpu1202" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1245+%40+3.30GHz&amp;id=1202">Intel Xeon E3-1245 @ 3.30GHz
</a></td><td>5,310</td><td>981</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1245+%40+3.30GHz&amp;id=1202#price">21.67
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1245+%40+3.30GHz&amp;id=1202#price">$245.00</a></td></tr><tr id="cpu1191" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1245+V2+%40+3.40GHz&amp;id=1191">Intel Xeon E3-1245 V2 @ 3.40GHz
</a></td><td>6,184</td><td>872</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1245+V2+%40+3.40GHz&amp;id=1191#price">16.83
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1245+V2+%40+3.40GHz&amp;id=1191#price">$367.50</a></td></tr><tr id="cpu1926" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1245+v3+%40+3.40GHz&amp;id=1926">Intel Xeon E3-1245 v3 @ 3.40GHz
</a></td><td>7,021</td><td>762</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1245+v3+%40+3.40GHz&amp;id=1926#price">60.02
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1245+v3+%40+3.40GHz&amp;id=1926#price">$116.98</a></td></tr><tr id="cpu2674" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1245+v5+%40+3.50GHz&amp;id=2674">Intel Xeon E3-1245 v5 @ 3.50GHz
</a></td><td>8,035</td><td>650</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1245+v5+%40+3.50GHz&amp;id=2674#price">40.17
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1245+v5+%40+3.50GHz&amp;id=2674#price">$199.99</a></td></tr><tr id="cpu3025" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1245+v6+%40+3.70GHz&amp;id=3025">Intel Xeon E3-1245 v6 @ 3.70GHz
</a></td><td>8,533</td><td>611</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1245+v6+%40+3.70GHz&amp;id=3025#price">29.43
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1245+v6+%40+3.70GHz&amp;id=3025#price">$289.99</a></td></tr><tr id="cpu2279" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1246+v3+%40+3.50GHz&amp;id=2279">Intel Xeon E3-1246 v3 @ 3.50GHz
</a></td><td>7,168</td><td>743</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1246+v3+%40+3.50GHz&amp;id=2279#price">47.90
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1246+v3+%40+3.50GHz&amp;id=2279#price">$149.64</a></td></tr><tr id="cpu1203" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1260L+%40+2.40GHz&amp;id=1203">Intel Xeon E3-1260L @ 2.40GHz
</a></td><td>3,981</td><td>1198</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1260L+%40+2.40GHz&amp;id=1203#price">31.85
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1260L+%40+2.40GHz&amp;id=1203#price">$125.00*</a></td></tr><tr id="cpu2804" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1260L+v5+%40+2.90GHz&amp;id=2804">Intel Xeon E3-1260L v5 @ 2.90GHz
</a></td><td>7,757</td><td>676</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1260L+v5+%40+2.90GHz&amp;id=2804#price">10.54
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1260L+v5+%40+2.90GHz&amp;id=2804#price">$736.16*</a></td></tr><tr id="cpu2558" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1265L+%40+2.40GHz&amp;id=2558">Intel Xeon E3-1265L @ 2.40GHz
</a></td><td>3,589</td><td>1274</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1265L+%40+2.40GHz&amp;id=2558#price">3.91
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1265L+%40+2.40GHz&amp;id=2558#price">$918.35*</a></td></tr><tr id="cpu1486" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1265L+V2+%40+2.50GHz&amp;id=1486">Intel Xeon E3-1265L V2 @ 2.50GHz
</a></td><td>4,582</td><td>1089</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1265L+V2+%40+2.50GHz&amp;id=1486#price">30.55
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1265L+V2+%40+2.50GHz&amp;id=1486#price">$149.99</a></td></tr><tr id="cpu2088" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1265L+v3+%40+2.50GHz&amp;id=2088">Intel Xeon E3-1265L v3 @ 2.50GHz
</a></td><td>6,011</td><td>898</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1265L+v3+%40+2.50GHz&amp;id=2088#price">8.59
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1265L+v3+%40+2.50GHz&amp;id=2088#price">$699.95</a></td></tr><tr id="cpu3289" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1265L+v4+%40+2.30GHz&amp;id=3289">Intel Xeon E3-1265L v4 @ 2.30GHz
</a></td><td>6,493</td><td>827</td><td>NA</td><td>NA</td></tr><tr id="cpu2363" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1268L+v3+%40+2.30GHz&amp;id=2363">Intel Xeon E3-1268L v3 @ 2.30GHz
</a></td><td>5,333</td><td>977</td><td>NA</td><td>NA</td></tr><tr id="cpu3202" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1268L+v5+%40+2.40GHz&amp;id=3202">Intel Xeon E3-1268L v5 @ 2.40GHz
</a></td><td>6,600</td><td>816</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1268L+v5+%40+2.40GHz&amp;id=3202#price">14.46
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1268L+v5+%40+2.40GHz&amp;id=3202#price">$456.54*</a></td></tr><tr id="cpu1204" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1270+%40+3.40GHz&amp;id=1204">Intel Xeon E3-1270 @ 3.40GHz
</a></td><td>5,370</td><td>973</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1270+%40+3.40GHz&amp;id=1204#price">27.54
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1270+%40+3.40GHz&amp;id=1204#price">$195.00</a></td></tr><tr id="cpu1192" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1270+V2+%40+3.50GHz&amp;id=1192">Intel Xeon E3-1270 V2 @ 3.50GHz
</a></td><td>6,442</td><td>836</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1270+V2+%40+3.50GHz&amp;id=1192#price">23.95
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1270+V2+%40+3.50GHz&amp;id=1192#price">$269.00</a></td></tr><tr id="cpu1969" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1270+v3+%40+3.50GHz&amp;id=1969">Intel Xeon E3-1270 v3 @ 3.50GHz
</a></td><td>7,213</td><td>737</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1270+v3+%40+3.50GHz&amp;id=1969#price">12.33
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1270+v3+%40+3.50GHz&amp;id=1969#price">$585.00</a></td></tr><tr id="cpu2651" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1270+v5+%40+3.60GHz&amp;id=2651">Intel Xeon E3-1270 v5 @ 3.60GHz
</a></td><td>8,360</td><td>621</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1270+v5+%40+3.60GHz&amp;id=2651#price">41.80
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1270+v5+%40+3.60GHz&amp;id=2651#price">$199.99</a></td></tr><tr id="cpu3014" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1270+v6+%40+3.80GHz&amp;id=3014">Intel Xeon E3-1270 v6 @ 3.80GHz
</a></td><td>9,017</td><td>586</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1270+v6+%40+3.80GHz&amp;id=3014#price">28.20
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1270+v6+%40+3.80GHz&amp;id=3014#price">$319.71</a></td></tr><tr id="cpu3396" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1270L+v4+%40+3.00GHz&amp;id=3396">Intel Xeon E3-1270L v4 @ 3.00GHz
</a></td><td>7,662</td><td>686</td><td>NA</td><td>NA</td></tr><tr id="cpu2334" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1271+v3+%40+3.60GHz&amp;id=2334">Intel Xeon E3-1271 v3 @ 3.60GHz
</a></td><td>7,423</td><td>709</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1271+v3+%40+3.60GHz&amp;id=2334#price">49.49
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1271+v3+%40+3.60GHz&amp;id=2334#price">$149.99</a></td></tr><tr id="cpu1205" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1275+%40+3.40GHz&amp;id=1205">Intel Xeon E3-1275 @ 3.40GHz
</a></td><td>5,359</td><td>976</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1275+%40+3.40GHz&amp;id=1205#price">7.16
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1275+%40+3.40GHz&amp;id=1205#price">$749.00</a></td></tr><tr id="cpu1193" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1275+V2+%40+3.50GHz&amp;id=1193">Intel Xeon E3-1275 V2 @ 3.50GHz
</a></td><td>6,397</td><td>843</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1275+V2+%40+3.50GHz&amp;id=1193#price">42.65
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1275+V2+%40+3.50GHz&amp;id=1193#price">$149.99</a></td></tr><tr id="cpu1979" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1275+v3+%40+3.50GHz&amp;id=1979">Intel Xeon E3-1275 v3 @ 3.50GHz
</a></td><td>7,067</td><td>755</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1275+v3+%40+3.50GHz&amp;id=1979#price">35.34
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1275+v3+%40+3.50GHz&amp;id=1979#price">$199.99</a></td></tr><tr id="cpu2672" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1275+v5+%40+3.60GHz&amp;id=2672">Intel Xeon E3-1275 v5 @ 3.60GHz
</a></td><td>8,389</td><td>620</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1275+v5+%40+3.60GHz&amp;id=2672#price">18.89
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1275+v5+%40+3.60GHz&amp;id=2672#price">$444.04</a></td></tr><tr id="cpu3015" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1275+v6+%40+3.80GHz&amp;id=3015">Intel Xeon E3-1275 v6 @ 3.80GHz
</a></td><td>9,206</td><td>574</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1275+v6+%40+3.80GHz&amp;id=3015#price">24.52
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1275+v6+%40+3.80GHz&amp;id=3015#price">$375.46</a></td></tr><tr id="cpu2490" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1275L+v3+%40+2.70GHz&amp;id=2490">Intel Xeon E3-1275L v3 @ 2.70GHz
</a></td><td>5,949</td><td>904</td><td>NA</td><td>NA</td></tr><tr id="cpu2269" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1276+v3+%40+3.60GHz&amp;id=2269">Intel Xeon E3-1276 v3 @ 3.60GHz
</a></td><td>7,381</td><td>714</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1276+v3+%40+3.60GHz&amp;id=2269#price">46.17
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1276+v3+%40+3.60GHz&amp;id=2269#price">$159.87</a></td></tr><tr id="cpu1206" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1280+%40+3.50GHz&amp;id=1206">Intel Xeon E3-1280 @ 3.50GHz
</a></td><td>5,510</td><td>955</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1280+%40+3.50GHz&amp;id=1206#price">15.39
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1280+%40+3.50GHz&amp;id=1206#price">$358.00</a></td></tr><tr id="cpu1779" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1280+V2+%40+3.60GHz&amp;id=1779">Intel Xeon E3-1280 V2 @ 3.60GHz
</a></td><td>6,424</td><td>839</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1280+V2+%40+3.60GHz&amp;id=1779#price">40.15
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1280+V2+%40+3.60GHz&amp;id=1779#price">$159.99</a></td></tr><tr id="cpu1964" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1280+v3+%40+3.60GHz&amp;id=1964">Intel Xeon E3-1280 v3 @ 3.60GHz
</a></td><td>6,965</td><td>773</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1280+v3+%40+3.60GHz&amp;id=1964#price">27.97
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1280+v3+%40+3.60GHz&amp;id=1964#price">$249.00*</a></td></tr><tr id="cpu2773" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1280+v5+%40+3.70GHz&amp;id=2773">Intel Xeon E3-1280 v5 @ 3.70GHz
</a></td><td>8,320</td><td>624</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1280+v5+%40+3.70GHz&amp;id=2773#price">21.06
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1280+v5+%40+3.70GHz&amp;id=2773#price">$395.00*</a></td></tr><tr id="cpu2988" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1280+v6+%40+3.90GHz&amp;id=2988">Intel Xeon E3-1280 v6 @ 3.90GHz
</a></td><td>9,087</td><td>578</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1280+v6+%40+3.90GHz&amp;id=2988#price">16.14
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1280+v6+%40+3.90GHz&amp;id=2988#price">$563.08</a></td></tr><tr id="cpu2516" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1281+v3+%40+3.70GHz&amp;id=2516">Intel Xeon E3-1281 v3 @ 3.70GHz
</a></td><td>7,209</td><td>738</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1281+v3+%40+3.70GHz&amp;id=2516#price">13.20
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1281+v3+%40+3.70GHz&amp;id=2516#price">$546.25</a></td></tr><tr id="cpu2894" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1285+v3+%40+3.60GHz&amp;id=2894">Intel Xeon E3-1285 v3 @ 3.60GHz
</a></td><td>6,919</td><td>781</td><td>NA</td><td>NA</td></tr><tr id="cpu3282" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1285+v4+%40+3.50GHz&amp;id=3282">Intel Xeon E3-1285 v4 @ 3.50GHz
</a></td><td>7,614</td><td>690</td><td>NA</td><td>NA</td></tr><tr id="cpu3158" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1285+v6+%40+4.10GHz&amp;id=3158">Intel Xeon E3-1285 v6 @ 4.10GHz
</a></td><td>9,276</td><td>567</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1285+v6+%40+4.10GHz&amp;id=3158#price">17.23
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1285+v6+%40+4.10GHz&amp;id=3158#price">$538.31</a></td></tr><tr id="cpu2417" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1285L+v3+%40+3.10GHz&amp;id=2417">Intel Xeon E3-1285L v3 @ 3.10GHz
</a></td><td>6,848</td><td>792</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1285L+v3+%40+3.10GHz&amp;id=2417#price">7.62
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1285L+v3+%40+3.10GHz&amp;id=2417#price">$898.50</a></td></tr><tr id="cpu2743" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1285L+v4+%40+3.40GHz&amp;id=2743">Intel Xeon E3-1285L v4 @ 3.40GHz
</a></td><td>7,975</td><td>655</td><td>NA</td><td>NA</td></tr><tr id="cpu2401" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1286+v3+%40+3.70GHz&amp;id=2401">Intel Xeon E3-1286 v3 @ 3.70GHz
</a></td><td>7,418</td><td>710</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1286+v3+%40+3.70GHz&amp;id=2401#price">8.84
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1286+v3+%40+3.70GHz&amp;id=2401#price">$839.00*</a></td></tr><tr id="cpu3177" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1286L+v3+%40+3.20GHz&amp;id=3177">Intel Xeon E3-1286L v3 @ 3.20GHz
</a></td><td>6,450</td><td>835</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1286L+v3+%40+3.20GHz&amp;id=3177#price">8.33
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1286L+v3+%40+3.20GHz&amp;id=3177#price">$774.00*</a></td></tr><tr id="cpu1208" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1290+%40+3.60GHz&amp;id=1208">Intel Xeon E3-1290 @ 3.60GHz
</a></td><td>4,988</td><td>1031</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1290+%40+3.60GHz&amp;id=1208#price">5.64
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1290+%40+3.60GHz&amp;id=1208#price">$885.00*</a></td></tr><tr id="cpu1774" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1290+V2+%40+3.70GHz&amp;id=1774">Intel Xeon E3-1290 V2 @ 3.70GHz
</a></td><td>6,620</td><td>814</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1290+V2+%40+3.70GHz&amp;id=1774#price">7.48
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1290+V2+%40+3.70GHz&amp;id=1774#price">$885.00*</a></td></tr><tr id="cpu2980" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1505L+v5+%40+2.00GHz&amp;id=2980">Intel Xeon E3-1505L v5 @ 2.00GHz
</a></td><td>4,838</td><td>1051</td><td>NA</td><td>NA</td></tr><tr id="cpu3020" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1505L+v6+%40+2.20GHz&amp;id=3020">Intel Xeon E3-1505L v6 @ 2.20GHz
</a></td><td>6,088</td><td>889</td><td>NA</td><td>NA</td></tr><tr id="cpu2637" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1505M+v5+%40+2.80GHz&amp;id=2637">Intel Xeon E3-1505M v5 @ 2.80GHz
</a></td><td>7,025</td><td>760</td><td>NA</td><td>NA</td></tr><tr id="cpu2931" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1505M+v6+%40+3.00GHz&amp;id=2931">Intel Xeon E3-1505M v6 @ 3.00GHz
</a></td><td>7,015</td><td>765</td><td>NA</td><td>NA</td></tr><tr id="cpu2954" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1515M+v5+%40+2.80GHz&amp;id=2954">Intel Xeon E3-1515M v5 @ 2.80GHz
</a></td><td>7,918</td><td>660</td><td>NA</td><td>NA</td></tr><tr id="cpu2667" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1535M+v5+%40+2.90GHz&amp;id=2667">Intel Xeon E3-1535M v5 @ 2.90GHz
</a></td><td>7,530</td><td>698</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1535M+v5+%40+2.90GHz&amp;id=2667#price">12.09
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1535M+v5+%40+2.90GHz&amp;id=2667#price">$623.00*</a></td></tr><tr id="cpu2999" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1535M+v6+%40+3.10GHz&amp;id=2999">Intel Xeon E3-1535M v6 @ 3.10GHz
</a></td><td>8,287</td><td>626</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1535M+v6+%40+3.10GHz&amp;id=2999#price">13.30
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1535M+v6+%40+3.10GHz&amp;id=2999#price">$623.00*</a></td></tr><tr id="cpu2711" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1545M+v5+%40+2.90GHz&amp;id=2711">Intel Xeon E3-1545M v5 @ 2.90GHz
</a></td><td>7,806</td><td>669</td><td>NA</td><td>NA</td></tr><tr id="cpu2801" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1575M+v5+%40+3.00GHz&amp;id=2801">Intel Xeon E3-1575M v5 @ 3.00GHz
</a></td><td>7,721</td><td>678</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1575M+v5+%40+3.00GHz&amp;id=2801#price">6.40
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1575M+v5+%40+3.00GHz&amp;id=2801#price">$1,207.00*</a></td></tr><tr id="cpu3011" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1585+v5+%40+3.50GHz&amp;id=3011">Intel Xeon E3-1585 v5 @ 3.50GHz
</a></td><td>8,408</td><td>618</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1585+v5+%40+3.50GHz&amp;id=3011#price">15.12
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1585+v5+%40+3.50GHz&amp;id=3011#price">$556.00*</a></td></tr><tr id="cpu3277" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3-1585L+v5+%40+3.00GHz&amp;id=3277">Intel Xeon E3-1585L v5 @ 3.00GHz
</a></td><td>8,021</td><td>653</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1585L+v5+%40+3.00GHz&amp;id=3277#price">18.02
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3-1585L+v5+%40+3.00GHz&amp;id=3277#price">$445.00*</a></td></tr><tr id="cpu1945" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-1410+%40+2.80GHz&amp;id=1945">Intel Xeon E5-1410 @ 2.80GHz
</a></td><td>4,634</td><td>1083</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1410+%40+2.80GHz&amp;id=1945#price">103.00
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1410+%40+2.80GHz&amp;id=1945#price">$44.99*</a></td></tr><tr id="cpu2589" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-1410+v2+%40+2.80GHz&amp;id=2589">Intel Xeon E5-1410 v2 @ 2.80GHz
</a></td><td>5,842</td><td>921</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1410+v2+%40+2.80GHz&amp;id=2589#price">304.26
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1410+v2+%40+2.80GHz&amp;id=2589#price">$19.20*</a></td></tr><tr id="cpu3556" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-1428L+v2+%40+2.20GHz&amp;id=3556">Intel Xeon E5-1428L v2 @ 2.20GHz
</a></td><td>6,566</td><td>820</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1428L+v2+%40+2.20GHz&amp;id=3556#price">322.34
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1428L+v2+%40+2.20GHz&amp;id=3556#price">$20.37*</a></td></tr><tr id="cpu1209" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-1603+%40+2.80GHz&amp;id=1209">Intel Xeon E5-1603 @ 2.80GHz
</a></td><td>3,482</td><td>1295</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1603+%40+2.80GHz&amp;id=1209#price">99.52
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1603+%40+2.80GHz&amp;id=1209#price">$34.99*</a></td></tr><tr id="cpu2457" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-1603+v3+%40+2.80GHz&amp;id=2457">Intel Xeon E5-1603 v3 @ 2.80GHz
</a></td><td>4,509</td><td>1103</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1603+v3+%40+2.80GHz&amp;id=2457#price">350.09
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1603+v3+%40+2.80GHz&amp;id=2457#price">$12.88*</a></td></tr><tr id="cpu2959" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-1603+v4+%40+2.80GHz&amp;id=2959">Intel Xeon E5-1603 v4 @ 2.80GHz
</a></td><td>4,812</td><td>1056</td><td>NA</td><td>NA</td></tr><tr id="cpu1434" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-1607+%40+3.00GHz&amp;id=1434">Intel Xeon E5-1607 @ 3.00GHz
</a></td><td>3,737</td><td>1240</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1607+%40+3.00GHz&amp;id=1434#price">324.12
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1607+%40+3.00GHz&amp;id=1434#price">$11.53*</a></td></tr><tr id="cpu2192" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-1607+v2+%40+3.00GHz&amp;id=2192">Intel Xeon E5-1607 v2 @ 3.00GHz
</a></td><td>4,298</td><td>1139</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1607+v2+%40+3.00GHz&amp;id=2192#price">18.69
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1607+v2+%40+3.00GHz&amp;id=2192#price">$229.95</a></td></tr><tr id="cpu2493" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-1607+v3+%40+3.10GHz&amp;id=2493">Intel Xeon E5-1607 v3 @ 3.10GHz
</a></td><td>4,976</td><td>1032</td><td>NA</td><td>NA</td></tr><tr id="cpu2885" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-1607+v4+%40+3.10GHz&amp;id=2885">Intel Xeon E5-1607 v4 @ 3.10GHz
</a></td><td>5,438</td><td>966</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1607+v4+%40+3.10GHz&amp;id=2885#price">135.98
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1607+v4+%40+3.10GHz&amp;id=2885#price">$39.99*</a></td></tr><tr id="cpu1210" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-1620+%40+3.60GHz&amp;id=1210">Intel Xeon E5-1620 @ 3.60GHz
</a></td><td>5,868</td><td>918</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1620+%40+3.60GHz&amp;id=1210#price">40.85
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1620+%40+3.60GHz&amp;id=1210#price">$143.66</a></td></tr><tr id="cpu2047" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-1620+v2+%40+3.70GHz&amp;id=2047">Intel Xeon E5-1620 v2 @ 3.70GHz
</a></td><td>6,560</td><td>821</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1620+v2+%40+3.70GHz&amp;id=2047#price">21.22
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1620+v2+%40+3.70GHz&amp;id=2047#price">$309.19</a></td></tr><tr id="cpu2409" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-1620+v3+%40+3.50GHz&amp;id=2409">Intel Xeon E5-1620 v3 @ 3.50GHz
</a></td><td>7,003</td><td>768</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1620+v3+%40+3.50GHz&amp;id=2409#price">31.12
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1620+v3+%40+3.50GHz&amp;id=2409#price">$225.00</a></td></tr><tr id="cpu2777" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-1620+v4+%40+3.50GHz&amp;id=2777">Intel Xeon E5-1620 v4 @ 3.50GHz
</a></td><td>7,403</td><td>712</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1620+v4+%40+3.50GHz&amp;id=2777#price">23.43
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1620+v4+%40+3.50GHz&amp;id=2777#price">$315.98</a></td></tr><tr id="cpu2384" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-1630+v3+%40+3.70GHz&amp;id=2384">Intel Xeon E5-1630 v3 @ 3.70GHz
</a></td><td>7,463</td><td>705</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1630+v3+%40+3.70GHz&amp;id=2384#price">40.34
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1630+v3+%40+3.70GHz&amp;id=2384#price">$184.99*</a></td></tr><tr id="cpu2827" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-1630+v4+%40+3.70GHz&amp;id=2827">Intel Xeon E5-1630 v4 @ 3.70GHz
</a></td><td>7,546</td><td>695</td><td>NA</td><td>NA</td></tr><tr id="cpu1211" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-1650+%40+3.20GHz&amp;id=1211">Intel Xeon E5-1650 @ 3.20GHz
</a></td><td>8,091</td><td>644</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1650+%40+3.20GHz&amp;id=1211#price">14.09
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1650+%40+3.20GHz&amp;id=1211#price">$574.19*</a></td></tr><tr id="cpu2066" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-1650+v2+%40+3.50GHz&amp;id=2066">Intel Xeon E5-1650 v2 @ 3.50GHz
</a></td><td>9,267</td><td>568</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1650+v2+%40+3.50GHz&amp;id=2066#price">38.93
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1650+v2+%40+3.50GHz&amp;id=2066#price">$238.02</a></td></tr><tr id="cpu2389" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-1650+v3+%40+3.50GHz&amp;id=2389">Intel Xeon E5-1650 v3 @ 3.50GHz
</a></td><td>10,369</td><td>509</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1650+v3+%40+3.50GHz&amp;id=2389#price">12.65
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1650+v3+%40+3.50GHz&amp;id=2389#price">$819.95</a></td></tr><tr id="cpu2838" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-1650+v4+%40+3.60GHz&amp;id=2838">Intel Xeon E5-1650 v4 @ 3.60GHz
</a></td><td>11,255</td><td>467</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1650+v4+%40+3.60GHz&amp;id=2838#price">10.23
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1650+v4+%40+3.60GHz&amp;id=2838#price">$1,100.00*</a></td></tr><tr id="cpu1212" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-1660+%40+3.30GHz&amp;id=1212">Intel Xeon E5-1660 @ 3.30GHz
</a></td><td>8,394</td><td>619</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1660+%40+3.30GHz&amp;id=1212#price">31.41
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1660+%40+3.30GHz&amp;id=1212#price">$267.19</a></td></tr><tr id="cpu2120" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-1660+v2+%40+3.70GHz&amp;id=2120">Intel Xeon E5-1660 v2 @ 3.70GHz
</a></td><td>10,228</td><td>516</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1660+v2+%40+3.70GHz&amp;id=2120#price">30.26
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1660+v2+%40+3.70GHz&amp;id=2120#price">$338.01</a></td></tr><tr id="cpu2412" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-1660+v3+%40+3.00GHz&amp;id=2412">Intel Xeon E5-1660 v3 @ 3.00GHz
</a></td><td>11,617</td><td>453</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1660+v3+%40+3.00GHz&amp;id=2412#price">29.12
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1660+v3+%40+3.00GHz&amp;id=2412#price">$398.95*</a></td></tr><tr id="cpu2866" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-1660+v4+%40+3.20GHz&amp;id=2866">Intel Xeon E5-1660 v4 @ 3.20GHz
</a></td><td>13,367</td><td>390</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1660+v4+%40+3.20GHz&amp;id=2866#price">8.92
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1660+v4+%40+3.20GHz&amp;id=2866#price">$1,499.00*</a></td></tr><tr id="cpu2342" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-1680+v2+%40+3.00GHz&amp;id=2342">Intel Xeon E5-1680 v2 @ 3.00GHz
</a></td><td>12,408</td><td>418</td><td>NA</td><td>NA</td></tr><tr id="cpu2497" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-1680+v3+%40+3.20GHz&amp;id=2497">Intel Xeon E5-1680 v3 @ 3.20GHz
</a></td><td>13,081</td><td>399</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1680+v3+%40+3.20GHz&amp;id=2497#price">22.17
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1680+v3+%40+3.20GHz&amp;id=2497#price">$589.99*</a></td></tr><tr id="cpu2869" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-1680+v4+%40+3.40GHz&amp;id=2869">Intel Xeon E5-1680 v4 @ 3.40GHz
</a></td><td>14,417</td><td>349</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1680+v4+%40+3.40GHz&amp;id=2869#price">2.95
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-1680+v4+%40+3.40GHz&amp;id=2869#price">$4,886.00*</a></td></tr><tr id="cpu2755" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-1681+v3+%40+2.90GHz&amp;id=2755">Intel Xeon E5-1681 v3 @ 2.90GHz
</a></td><td>14,820</td><td>329</td><td>NA</td><td>NA</td></tr><tr id="cpu1827" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2403+%40+1.80GHz&amp;id=1827">Intel Xeon E5-2403 @ 1.80GHz
</a></td><td>2,464</td><td>1626</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2403+%40+1.80GHz&amp;id=1827#price">70.41
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2403+%40+1.80GHz&amp;id=1827#price">$34.99</a></td></tr><tr id="cpu2519" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2403+v2+%40+1.80GHz&amp;id=2519">Intel Xeon E5-2403 v2 @ 1.80GHz
</a></td><td>2,873</td><td>1481</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2403+v2+%40+1.80GHz&amp;id=2519#price">5.72
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2403+v2+%40+1.80GHz&amp;id=2519#price">$502.00*</a></td></tr><tr id="cpu1856" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2407+%40+2.20GHz&amp;id=1856">Intel Xeon E5-2407 @ 2.20GHz
</a></td><td>2,661</td><td>1558</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2407+%40+2.20GHz&amp;id=1856#price">8.19
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2407+%40+2.20GHz&amp;id=1856#price">$325.03</a></td></tr><tr id="cpu2354" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2407+v2+%40+2.40GHz&amp;id=2354">Intel Xeon E5-2407 v2 @ 2.40GHz
</a></td><td>3,504</td><td>1293</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2407+v2+%40+2.40GHz&amp;id=2354#price">14.07
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2407+v2+%40+2.40GHz&amp;id=2354#price">$249.00*</a></td></tr><tr id="cpu2729" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2418L+%40+2.00GHz&amp;id=2729">Intel Xeon E5-2418L @ 2.00GHz
</a></td><td>3,518</td><td>1289</td><td>NA</td><td>NA</td></tr><tr id="cpu1213" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2420+%40+1.90GHz&amp;id=1213">Intel Xeon E5-2420 @ 1.90GHz
</a></td><td>5,155</td><td>1005</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2420+%40+1.90GHz&amp;id=1213#price">13.56
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2420+%40+1.90GHz&amp;id=1213#price">$380.01</a></td></tr><tr id="cpu2217" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2420+v2+%40+2.20GHz&amp;id=2217">Intel Xeon E5-2420 v2 @ 2.20GHz
</a></td><td>6,508</td><td>826</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2420+v2+%40+2.20GHz&amp;id=2217#price">40.27
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2420+v2+%40+2.20GHz&amp;id=2217#price">$161.61</a></td></tr><tr id="cpu1788" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2430+%40+2.20GHz&amp;id=1788">Intel Xeon E5-2430 @ 2.20GHz
</a></td><td>5,867</td><td>919</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2430+%40+2.20GHz&amp;id=1788#price">26.61
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2430+%40+2.20GHz&amp;id=1788#price">$220.46</a></td></tr><tr id="cpu2304" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2430+v2+%40+2.50GHz&amp;id=2304">Intel Xeon E5-2430 v2 @ 2.50GHz
</a></td><td>6,864</td><td>789</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2430+v2+%40+2.50GHz&amp;id=2304#price">137.31
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2430+v2+%40+2.50GHz&amp;id=2304#price">$49.99</a></td></tr><tr id="cpu3139" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2430L+%40+2.00GHz&amp;id=3139">Intel Xeon E5-2430L @ 2.00GHz
</a></td><td>5,273</td><td>989</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2430L+%40+2.00GHz&amp;id=3139#price">163.36
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2430L+%40+2.00GHz&amp;id=3139#price">$32.28*</a></td></tr><tr id="cpu2494" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2430L+v2+%40+2.40GHz&amp;id=2494">Intel Xeon E5-2430L v2 @ 2.40GHz
</a></td><td>5,943</td><td>908</td><td>NA</td><td>NA</td></tr><tr id="cpu2194" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2440+%40+2.40GHz&amp;id=2194">Intel Xeon E5-2440 @ 2.40GHz
</a></td><td>5,841</td><td>922</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2440+%40+2.40GHz&amp;id=2194#price">34.36
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2440+%40+2.40GHz&amp;id=2194#price">$170.00</a></td></tr><tr id="cpu2411" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2440+v2+%40+1.90GHz&amp;id=2411">Intel Xeon E5-2440 v2 @ 1.90GHz
</a></td><td>6,927</td><td>777</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2440+v2+%40+1.90GHz&amp;id=2411#price">13.86
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2440+v2+%40+1.90GHz&amp;id=2411#price">$499.95</a></td></tr><tr id="cpu3208" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2448L+v2+%40+1.80GHz&amp;id=3208">Intel Xeon E5-2448L v2 @ 1.80GHz
</a></td><td>6,774</td><td>799</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2448L+v2+%40+1.80GHz&amp;id=3208#price">4.76
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2448L+v2+%40+1.80GHz&amp;id=3208#price">$1,424.00*</a></td></tr><tr id="cpu2514" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2450+%40+2.10GHz&amp;id=2514">Intel Xeon E5-2450 @ 2.10GHz
</a></td><td>7,321</td><td>721</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2450+%40+2.10GHz&amp;id=2514#price">36.61
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2450+%40+2.10GHz&amp;id=2514#price">$199.95*</a></td></tr><tr id="cpu2572" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2450L+%40+1.80GHz&amp;id=2572">Intel Xeon E5-2450L @ 1.80GHz
</a></td><td>5,769</td><td>927</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2450L+%40+1.80GHz&amp;id=2572#price">88.74
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2450L+%40+1.80GHz&amp;id=2572#price">$65.01*</a></td></tr><tr id="cpu2003" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2470+%40+2.30GHz&amp;id=2003">Intel Xeon E5-2470 @ 2.30GHz
</a></td><td>8,240</td><td>634</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2470+%40+2.30GHz&amp;id=2003#price">137.35
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2470+%40+2.30GHz&amp;id=2003#price">$59.99</a></td></tr><tr id="cpu2715" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2470+v2+%40+2.40GHz&amp;id=2715">Intel Xeon E5-2470 v2 @ 2.40GHz
</a></td><td>10,871</td><td>485</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2470+v2+%40+2.40GHz&amp;id=2715#price">90.60
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2470+v2+%40+2.40GHz&amp;id=2715#price">$119.99</a></td></tr><tr id="cpu1771" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2603+%40+1.80GHz&amp;id=1771">Intel Xeon E5-2603 @ 1.80GHz
</a></td><td>2,362</td><td>1670</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2603+%40+1.80GHz&amp;id=1771#price">20.51
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2603+%40+1.80GHz&amp;id=1771#price">$115.19</a></td></tr><tr id="cpu2420" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2603+v2+%40+1.80GHz&amp;id=2420">Intel Xeon E5-2603 v2 @ 1.80GHz
</a></td><td>2,751</td><td>1526</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2603+v2+%40+1.80GHz&amp;id=2420#price">69.02
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2603+v2+%40+1.80GHz&amp;id=2420#price">$39.86</a></td></tr><tr id="cpu2468" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2603+v3+%40+1.60GHz&amp;id=2468">Intel Xeon E5-2603 v3 @ 1.60GHz
</a></td><td>3,948</td><td>1205</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2603+v3+%40+1.60GHz&amp;id=2468#price">60.87
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2603+v3+%40+1.60GHz&amp;id=2468#price">$64.86</a></td></tr><tr id="cpu2834" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2603+v4+%40+1.70GHz&amp;id=2834">Intel Xeon E5-2603 v4 @ 1.70GHz
</a></td><td>4,695</td><td>1074</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2603+v4+%40+1.70GHz&amp;id=2834#price">14.54
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2603+v4+%40+1.70GHz&amp;id=2834#price">$323.00</a></td></tr><tr id="cpu3173" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2608L+v3+%40+2.00GHz&amp;id=3173">Intel Xeon E5-2608L v3 @ 2.00GHz
</a></td><td>6,415</td><td>841</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2608L+v3+%40+2.00GHz&amp;id=3173#price">14.55
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2608L+v3+%40+2.00GHz&amp;id=3173#price">$441.00*</a></td></tr><tr id="cpu1429" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2609+%40+2.40GHz&amp;id=1429">Intel Xeon E5-2609 @ 2.40GHz
</a></td><td>2,640</td><td>1563</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2609+%40+2.40GHz&amp;id=1429#price">30.00
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2609+%40+2.40GHz&amp;id=1429#price">$88.00</a></td></tr><tr id="cpu2202" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2609+v2+%40+2.50GHz&amp;id=2202">Intel Xeon E5-2609 v2 @ 2.50GHz
</a></td><td>3,666</td><td>1254</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2609+v2+%40+2.50GHz&amp;id=2202#price">42.24
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2609+v2+%40+2.50GHz&amp;id=2202#price">$86.78</a></td></tr><tr id="cpu2427" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2609+v3+%40+1.90GHz&amp;id=2427">Intel Xeon E5-2609 v3 @ 1.90GHz
</a></td><td>4,391</td><td>1121</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2609+v3+%40+1.90GHz&amp;id=2427#price">54.99
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2609+v3+%40+1.90GHz&amp;id=2427#price">$79.85</a></td></tr><tr id="cpu2850" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2609+v4+%40+1.70GHz&amp;id=2850">Intel Xeon E5-2609 v4 @ 1.70GHz
</a></td><td>5,974</td><td>901</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2609+v4+%40+1.70GHz&amp;id=2850#price">13.28
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2609+v4+%40+1.70GHz&amp;id=2850#price">$449.95</a></td></tr><tr id="cpu2965" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2618L+v3+%40+2.30GHz&amp;id=2965">Intel Xeon E5-2618L v3 @ 2.30GHz
</a></td><td>10,464</td><td>503</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2618L+v3+%40+2.30GHz&amp;id=2965#price">10.16
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2618L+v3+%40+2.30GHz&amp;id=2965#price">$1,029.95*</a></td></tr><tr id="cpu3101" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2618L+v4+%40+2.20GHz&amp;id=3101">Intel Xeon E5-2618L v4 @ 2.20GHz
</a></td><td>12,885</td><td>407</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2618L+v4+%40+2.20GHz&amp;id=3101#price">18.87
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2618L+v4+%40+2.20GHz&amp;id=3101#price">$682.67*</a></td></tr><tr id="cpu1214" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2620+%40+2.00GHz&amp;id=1214">Intel Xeon E5-2620 @ 2.00GHz
</a></td><td>5,258</td><td>994</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2620+%40+2.00GHz&amp;id=1214#price">45.33
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2620+%40+2.00GHz&amp;id=1214#price">$116.00</a></td></tr><tr id="cpu2051" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2620+v2+%40+2.10GHz&amp;id=2051">Intel Xeon E5-2620 v2 @ 2.10GHz
</a></td><td>6,219</td><td>865</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2620+v2+%40+2.10GHz&amp;id=2051#price">90.13
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2620+v2+%40+2.10GHz&amp;id=2051#price">$69.00</a></td></tr><tr id="cpu2418" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2620+v3+%40+2.40GHz&amp;id=2418">Intel Xeon E5-2620 v3 @ 2.40GHz
</a></td><td>7,906</td><td>662</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2620+v3+%40+2.40GHz&amp;id=2418#price">123.78
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2620+v3+%40+2.40GHz&amp;id=2418#price">$63.87</a></td></tr><tr id="cpu2766" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2620+v4+%40+2.10GHz&amp;id=2766">Intel Xeon E5-2620 v4 @ 2.10GHz
</a></td><td>8,868</td><td>592</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2620+v4+%40+2.10GHz&amp;id=2766#price">22.47
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2620+v4+%40+2.10GHz&amp;id=2766#price">$394.71</a></td></tr><tr id="cpu2492" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2623+v3+%40+3.00GHz&amp;id=2492">Intel Xeon E5-2623 v3 @ 3.00GHz
</a></td><td>6,578</td><td>819</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2623+v3+%40+3.00GHz&amp;id=2492#price">26.32
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2623+v3+%40+3.00GHz&amp;id=2492#price">$249.95</a></td></tr><tr id="cpu2808" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2623+v4+%40+2.60GHz&amp;id=2808">Intel Xeon E5-2623 v4 @ 2.60GHz
</a></td><td>7,469</td><td>702</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2623+v4+%40+2.60GHz&amp;id=2808#price">45.97
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2623+v4+%40+2.60GHz&amp;id=2808#price">$162.50</a></td></tr><tr id="cpu2576" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2628L+v2+%40+1.90GHz&amp;id=2576">Intel Xeon E5-2628L v2 @ 1.90GHz
</a></td><td>7,181</td><td>739</td><td>NA</td><td>NA</td></tr><tr id="cpu2560" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2628L+v3+%40+2.00GHz&amp;id=2560">Intel Xeon E5-2628L v3 @ 2.00GHz
</a></td><td>9,949</td><td>530</td><td>NA</td><td>NA</td></tr><tr id="cpu2964" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2628L+v4+%40+1.90GHz&amp;id=2964">Intel Xeon E5-2628L v4 @ 1.90GHz
</a></td><td>11,079</td><td>475</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2628L+v4+%40+1.90GHz&amp;id=2964#price">8.12
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2628L+v4+%40+1.90GHz&amp;id=2964#price">$1,364.00*</a></td></tr><tr id="cpu2867" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2629+v3+%40+2.40GHz&amp;id=2867">Intel Xeon E5-2629 v3 @ 2.40GHz
</a></td><td>9,062</td><td>581</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2629+v3+%40+2.40GHz&amp;id=2867#price">18.13
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2629+v3+%40+2.40GHz&amp;id=2867#price">$499.88*</a></td></tr><tr id="cpu1215" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2630+%40+2.30GHz&amp;id=1215">Intel Xeon E5-2630 @ 2.30GHz
</a></td><td>6,134</td><td>879</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2630+%40+2.30GHz&amp;id=1215#price">89.66
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2630+%40+2.30GHz&amp;id=1215#price">$68.42</a></td></tr><tr id="cpu2052" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2630+v2+%40+2.60GHz&amp;id=2052">Intel Xeon E5-2630 v2 @ 2.60GHz
</a></td><td>7,452</td><td>707</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2630+v2+%40+2.60GHz&amp;id=2052#price">108.00
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2630+v2+%40+2.60GHz&amp;id=2052#price">$69.00</a></td></tr><tr id="cpu2386" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2630+v3+%40+2.40GHz&amp;id=2386">Intel Xeon E5-2630 v3 @ 2.40GHz
</a></td><td>10,299</td><td>511</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2630+v3+%40+2.40GHz&amp;id=2386#price">133.99
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2630+v3+%40+2.40GHz&amp;id=2386#price">$76.86</a></td></tr><tr id="cpu2758" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2630+v4+%40+2.20GHz&amp;id=2758">Intel Xeon E5-2630 v4 @ 2.20GHz
</a></td><td>11,691</td><td>448</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2630+v4+%40+2.20GHz&amp;id=2758#price">31.18
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2630+v4+%40+2.20GHz&amp;id=2758#price">$374.95</a></td></tr><tr id="cpu2222" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2630L+%40+2.00GHz&amp;id=2222">Intel Xeon E5-2630L @ 2.00GHz
</a></td><td>5,305</td><td>984</td><td>NA</td><td>NA</td></tr><tr id="cpu2435" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2630L+v2+%40+2.40GHz&amp;id=2435">Intel Xeon E5-2630L v2 @ 2.40GHz
</a></td><td>6,337</td><td>853</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2630L+v2+%40+2.40GHz&amp;id=2435#price">140.58
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2630L+v2+%40+2.40GHz&amp;id=2435#price">$45.08</a></td></tr><tr id="cpu2818" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2630L+v3+%40+1.80GHz&amp;id=2818">Intel Xeon E5-2630L v3 @ 1.80GHz
</a></td><td>8,830</td><td>594</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2630L+v3+%40+1.80GHz&amp;id=2818#price">18.79
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2630L+v3+%40+1.80GHz&amp;id=2818#price">$469.90</a></td></tr><tr id="cpu2914" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2630L+v4+%40+1.80GHz&amp;id=2914">Intel Xeon E5-2630L v4 @ 1.80GHz
</a></td><td>10,864</td><td>486</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2630L+v4+%40+1.80GHz&amp;id=2914#price">52.23
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2630L+v4+%40+1.80GHz&amp;id=2914#price">$208.00</a></td></tr><tr id="cpu3236" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2637+%40+3.00GHz&amp;id=3236">Intel Xeon E5-2637 @ 3.00GHz
</a></td><td>2,978</td><td>1443</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2637+%40+3.00GHz&amp;id=3236#price">19.86
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2637+%40+3.00GHz&amp;id=3236#price">$149.95*</a></td></tr><tr id="cpu2178" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2637+v2+%40+3.50GHz&amp;id=2178">Intel Xeon E5-2637 v2 @ 3.50GHz
</a></td><td>6,666</td><td>809</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2637+v2+%40+3.50GHz&amp;id=2178#price">111.11
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2637+v2+%40+3.50GHz&amp;id=2178#price">$59.99*</a></td></tr><tr id="cpu2383" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2637+v3+%40+3.50GHz&amp;id=2383">Intel Xeon E5-2637 v3 @ 3.50GHz
</a></td><td>7,605</td><td>692</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2637+v3+%40+3.50GHz&amp;id=2383#price">79.88
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2637+v3+%40+3.50GHz&amp;id=2383#price">$95.20</a></td></tr><tr id="cpu2790" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2637+v4+%40+3.50GHz&amp;id=2790">Intel Xeon E5-2637 v4 @ 3.50GHz
</a></td><td>6,509</td><td>825</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2637+v4+%40+3.50GHz&amp;id=2790#price">25.16
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2637+v4+%40+3.50GHz&amp;id=2790#price">$258.70</a></td></tr><tr id="cpu1216" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2640+%40+2.50GHz&amp;id=1216">Intel Xeon E5-2640 @ 2.50GHz
</a></td><td>6,322</td><td>855</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2640+%40+2.50GHz&amp;id=1216#price">89.04
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2640+%40+2.50GHz&amp;id=1216#price">$71.00</a></td></tr><tr id="cpu2153" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2640+v2+%40+2.00GHz&amp;id=2153">Intel Xeon E5-2640 v2 @ 2.00GHz
</a></td><td>7,784</td><td>672</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2640+v2+%40+2.00GHz&amp;id=2153#price">112.81
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2640+v2+%40+2.00GHz&amp;id=2153#price">$69.00</a></td></tr><tr id="cpu2365" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2640+v3+%40+2.60GHz&amp;id=2365">Intel Xeon E5-2640 v3 @ 2.60GHz
</a></td><td>11,133</td><td>472</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2640+v3+%40+2.60GHz&amp;id=2365#price">132.53
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2640+v3+%40+2.60GHz&amp;id=2365#price">$84.00</a></td></tr><tr id="cpu2752" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2640+v4+%40+2.40GHz&amp;id=2752">Intel Xeon E5-2640 v4 @ 2.40GHz
</a></td><td>11,482</td><td>459</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2640+v4+%40+2.40GHz&amp;id=2752#price">22.96
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2640+v4+%40+2.40GHz&amp;id=2752#price">$500.00</a></td></tr><tr id="cpu1217" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2643+%40+3.30GHz&amp;id=1217">Intel Xeon E5-2643 @ 3.30GHz
</a></td><td>5,510</td><td>956</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2643+%40+3.30GHz&amp;id=1217#price">50.98
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2643+%40+3.30GHz&amp;id=1217#price">$108.09</a></td></tr><tr id="cpu2084" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2643+v2+%40+3.50GHz&amp;id=2084">Intel Xeon E5-2643 v2 @ 3.50GHz
</a></td><td>9,056</td><td>583</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2643+v2+%40+3.50GHz&amp;id=2084#price">22.70
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2643+v2+%40+3.50GHz&amp;id=2084#price">$398.95</a></td></tr><tr id="cpu2479" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2643+v3+%40+3.40GHz&amp;id=2479">Intel Xeon E5-2643 v3 @ 3.40GHz
</a></td><td>10,480</td><td>502</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2643+v3+%40+3.40GHz&amp;id=2479#price">4.19
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2643+v3+%40+3.40GHz&amp;id=2479#price">$2,499.95</a></td></tr><tr id="cpu2811" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2643+v4+%40+3.40GHz&amp;id=2811">Intel Xeon E5-2643 v4 @ 3.40GHz
</a></td><td>11,152</td><td>471</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2643+v4+%40+3.40GHz&amp;id=2811#price">10.72
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2643+v4+%40+3.40GHz&amp;id=2811#price">$1,039.95</a></td></tr><tr id="cpu2605" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2648L+%40+1.80GHz&amp;id=2605">Intel Xeon E5-2648L @ 1.80GHz
</a></td><td>4,235</td><td>1147</td><td>NA</td><td>NA</td></tr><tr id="cpu3157" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2648L+v2+%40+1.90GHz&amp;id=3157">Intel Xeon E5-2648L v2 @ 1.90GHz
</a></td><td>8,611</td><td>607</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2648L+v2+%40+1.90GHz&amp;id=3157#price">9.11
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2648L+v2+%40+1.90GHz&amp;id=3157#price">$945.00*</a></td></tr><tr id="cpu2748" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2648L+v3+%40+1.80GHz&amp;id=2748">Intel Xeon E5-2648L v3 @ 1.80GHz
</a></td><td>9,847</td><td>533</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2648L+v3+%40+1.80GHz&amp;id=2748#price">6.41
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2648L+v3+%40+1.80GHz&amp;id=2748#price">$1,536.65*</a></td></tr><tr id="cpu3044" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2648L+v4+%40+1.80GHz&amp;id=3044">Intel Xeon E5-2648L v4 @ 1.80GHz
</a></td><td>11,547</td><td>455</td><td>NA</td><td>NA</td></tr><tr id="cpu3194" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2649+v3+%40+2.30GHz&amp;id=3194">Intel Xeon E5-2649 v3 @ 2.30GHz
</a></td><td>12,399</td><td>419</td><td>NA</td><td>NA</td></tr><tr id="cpu1218" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2650+%40+2.00GHz&amp;id=1218">Intel Xeon E5-2650 @ 2.00GHz
</a></td><td>7,293</td><td>727</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2650+%40+2.00GHz&amp;id=1218#price">145.90
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2650+%40+2.00GHz&amp;id=1218#price">$49.99</a></td></tr><tr id="cpu2042" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2650+v2+%40+2.60GHz&amp;id=2042">Intel Xeon E5-2650 v2 @ 2.60GHz
</a></td><td>9,977</td><td>528</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2650+v2+%40+2.60GHz&amp;id=2042#price">99.77
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2650+v2+%40+2.60GHz&amp;id=2042#price">$100.00</a></td></tr><tr id="cpu2344" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2650+v3+%40+2.30GHz&amp;id=2344">Intel Xeon E5-2650 v3 @ 2.30GHz
</a></td><td>11,907</td><td>440</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2650+v3+%40+2.30GHz&amp;id=2344#price">73.02
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2650+v3+%40+2.30GHz&amp;id=2344#price">$163.07</a></td></tr><tr id="cpu2797" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2650+v4+%40+2.20GHz&amp;id=2797">Intel Xeon E5-2650 v4 @ 2.20GHz
</a></td><td>12,225</td><td>425</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2650+v4+%40+2.20GHz&amp;id=2797#price">8.16
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2650+v4+%40+2.20GHz&amp;id=2797#price">$1,498.50*</a></td></tr><tr id="cpu1776" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2650L+%40+1.80GHz&amp;id=1776">Intel Xeon E5-2650L @ 1.80GHz
</a></td><td>5,929</td><td>911</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2650L+%40+1.80GHz&amp;id=1776#price">85.92
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2650L+%40+1.80GHz&amp;id=1776#price">$69.00*</a></td></tr><tr id="cpu2989" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2650L+v2+%40+1.70GHz&amp;id=2989">Intel Xeon E5-2650L v2 @ 1.70GHz
</a></td><td>7,475</td><td>701</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2650L+v2+%40+1.70GHz&amp;id=2989#price">94.62
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2650L+v2+%40+1.70GHz&amp;id=2989#price">$79.00</a></td></tr><tr id="cpu2588" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2650L+v3+%40+1.80GHz&amp;id=2588">Intel Xeon E5-2650L v3 @ 1.80GHz
</a></td><td>11,829</td><td>444</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2650L+v3+%40+1.80GHz&amp;id=2588#price">60.68
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2650L+v3+%40+1.80GHz&amp;id=2588#price">$194.95*</a></td></tr><tr id="cpu3054" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2650L+v4+%40+1.70GHz&amp;id=3054">Intel Xeon E5-2650L v4 @ 1.70GHz
</a></td><td>11,918</td><td>439</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2650L+v4+%40+1.70GHz&amp;id=3054#price">17.03
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2650L+v4+%40+1.70GHz&amp;id=3054#price">$700.00</a></td></tr><tr id="cpu2739" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2651+v2+%40+1.80GHz&amp;id=2739">Intel Xeon E5-2651 v2 @ 1.80GHz
</a></td><td>9,216</td><td>572</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2651+v2+%40+1.80GHz&amp;id=2739#price">33.14
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2651+v2+%40+1.80GHz&amp;id=2739#price">$278.10*</a></td></tr><tr id="cpu1487" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2658+%40+2.10GHz&amp;id=1487">Intel Xeon E5-2658 @ 2.10GHz
</a></td><td>6,073</td><td>891</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2658+%40+2.10GHz&amp;id=1487#price">4.15
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2658+%40+2.10GHz&amp;id=1487#price">$1,462.00*</a></td></tr><tr id="cpu2110" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2658+v2+%40+2.40GHz&amp;id=2110">Intel Xeon E5-2658 v2 @ 2.40GHz
</a></td><td>10,280</td><td>513</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2658+v2+%40+2.40GHz&amp;id=2110#price">2.85
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2658+v2+%40+2.40GHz&amp;id=2110#price">$3,604.00*</a></td></tr><tr id="cpu2619" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2658+v3+%40+2.20GHz&amp;id=2619">Intel Xeon E5-2658 v3 @ 2.20GHz
</a></td><td>13,487</td><td>384</td><td>NA</td><td>NA</td></tr><tr id="cpu2904" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2658+v4+%40+2.30GHz&amp;id=2904">Intel Xeon E5-2658 v4 @ 2.30GHz
</a></td><td>14,168</td><td>359</td><td>NA</td><td>NA</td></tr><tr id="cpu1219" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2660+%40+2.20GHz&amp;id=1219">Intel Xeon E5-2660 @ 2.20GHz
</a></td><td>8,176</td><td>639</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2660+%40+2.20GHz&amp;id=1219#price">118.49
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2660+%40+2.20GHz&amp;id=1219#price">$69.00</a></td></tr><tr id="cpu2184" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2660+v2+%40+2.20GHz&amp;id=2184">Intel Xeon E5-2660 v2 @ 2.20GHz
</a></td><td>10,409</td><td>505</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2660+v2+%40+2.20GHz&amp;id=2184#price">164.02
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2660+v2+%40+2.20GHz&amp;id=2184#price">$63.46</a></td></tr><tr id="cpu2359" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2660+v3+%40+2.60GHz&amp;id=2359">Intel Xeon E5-2660 v3 @ 2.60GHz
</a></td><td>12,956</td><td>403</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2660+v3+%40+2.60GHz&amp;id=2359#price">80.97
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2660+v3+%40+2.60GHz&amp;id=2359#price">$160.00</a></td></tr><tr id="cpu2881" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2660+v4+%40+2.00GHz&amp;id=2881">Intel Xeon E5-2660 v4 @ 2.00GHz
</a></td><td>14,342</td><td>353</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2660+v4+%40+2.00GHz&amp;id=2881#price">30.84
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2660+v4+%40+2.00GHz&amp;id=2881#price">$465.00</a></td></tr><tr id="cpu2677" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2663+v3+%40+2.80GHz&amp;id=2677">Intel Xeon E5-2663 v3 @ 2.80GHz
</a></td><td>11,777</td><td>445</td><td>NA</td><td>NA</td></tr><tr id="cpu1439" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2665+%40+2.40GHz&amp;id=1439">Intel Xeon E5-2665 @ 2.40GHz
</a></td><td>8,443</td><td>613</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2665+%40+2.40GHz&amp;id=1439#price">51.34
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2665+%40+2.40GHz&amp;id=1439#price">$164.45</a></td></tr><tr id="cpu1488" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2667+%40+2.90GHz&amp;id=1488">Intel Xeon E5-2667 @ 2.90GHz
</a></td><td>7,450</td><td>708</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2667+%40+2.90GHz&amp;id=1488#price">73.62
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2667+%40+2.90GHz&amp;id=1488#price">$101.19</a></td></tr><tr id="cpu2154" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2667+v2+%40+3.30GHz&amp;id=2154">Intel Xeon E5-2667 v2 @ 3.30GHz
</a></td><td>12,208</td><td>427</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2667+v2+%40+3.30GHz&amp;id=2154#price">22.61
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2667+v2+%40+3.30GHz&amp;id=2154#price">$539.95</a></td></tr><tr id="cpu2441" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2667+v3+%40+3.20GHz&amp;id=2441">Intel Xeon E5-2667 v3 @ 3.20GHz
</a></td><td>12,734</td><td>411</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2667+v3+%40+3.20GHz&amp;id=2441#price">57.90
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2667+v3+%40+3.20GHz&amp;id=2441#price">$219.95*</a></td></tr><tr id="cpu2830" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2667+v4+%40+3.20GHz&amp;id=2830">Intel Xeon E5-2667 v4 @ 3.20GHz
</a></td><td>14,101</td><td>361</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2667+v4+%40+3.20GHz&amp;id=2830#price">19.06
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2667+v4+%40+3.20GHz&amp;id=2830#price">$739.95</a></td></tr><tr id="cpu2700" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2669+v3+%40+2.30GHz&amp;id=2700">Intel Xeon E5-2669 v3 @ 2.30GHz
</a></td><td>16,107</td><td>297</td><td>NA</td><td>NA</td></tr><tr id="cpu1220" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2670+%40+2.60GHz&amp;id=1220">Intel Xeon E5-2670 @ 2.60GHz
</a></td><td>8,953</td><td>588</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2670+%40+2.60GHz&amp;id=1220#price">61.32
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2670+%40+2.60GHz&amp;id=1220#price">$146.00</a></td></tr><tr id="cpu2152" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2670+v2+%40+2.50GHz&amp;id=2152">Intel Xeon E5-2670 v2 @ 2.50GHz
</a></td><td>11,513</td><td>457</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2670+v2+%40+2.50GHz&amp;id=2152#price">149.52
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2670+v2+%40+2.50GHz&amp;id=2152#price">$77.00</a></td></tr><tr id="cpu2337" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2670+v3+%40+2.30GHz&amp;id=2337">Intel Xeon E5-2670 v3 @ 2.30GHz
</a></td><td>14,033</td><td>365</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2670+v3+%40+2.30GHz&amp;id=2337#price">89.39
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2670+v3+%40+2.30GHz&amp;id=2337#price">$156.99</a></td></tr><tr id="cpu2741" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2673+v2+%40+3.30GHz&amp;id=2741">Intel Xeon E5-2673 v2 @ 3.30GHz
</a></td><td>11,919</td><td>438</td><td>NA</td><td>NA</td></tr><tr id="cpu2606" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2673+v3+%40+2.40GHz&amp;id=2606">Intel Xeon E5-2673 v3 @ 2.40GHz
</a></td><td>14,095</td><td>362</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2673+v3+%40+2.40GHz&amp;id=2606#price">20.14
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2673+v3+%40+2.40GHz&amp;id=2606#price">$700.00*</a></td></tr><tr id="cpu2888" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2673+v4+%40+2.30GHz&amp;id=2888">Intel Xeon E5-2673 v4 @ 2.30GHz
</a></td><td>17,533</td><td>263</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2673+v4+%40+2.30GHz&amp;id=2888#price">8.99
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2673+v4+%40+2.30GHz&amp;id=2888#price">$1,950.00*</a></td></tr><tr id="cpu2686" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2675+v3+%40+1.80GHz&amp;id=2686">Intel Xeon E5-2675 v3 @ 1.80GHz
</a></td><td>11,960</td><td>437</td><td>NA</td><td>NA</td></tr><tr id="cpu2643" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2676+v3+%40+2.40GHz&amp;id=2643">Intel Xeon E5-2676 v3 @ 2.40GHz
</a></td><td>14,407</td><td>351</td><td>NA</td><td>NA</td></tr><tr id="cpu3780" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2676+v4+%40+2.40GHz&amp;id=3780">Intel Xeon E5-2676 v4 @ 2.40GHz
</a></td><td>18,978</td><td>229</td><td>NA</td><td>NA</td></tr><tr id="cpu2584" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2678+v3+%40+2.50GHz&amp;id=2584">Intel Xeon E5-2678 v3 @ 2.50GHz
</a></td><td>14,841</td><td>328</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2678+v3+%40+2.50GHz&amp;id=2584#price">87.30
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2678+v3+%40+2.50GHz&amp;id=2584#price">$170.00*</a></td></tr><tr id="cpu2805" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2679+v4+%40+2.50GHz&amp;id=2805">Intel Xeon E5-2679 v4 @ 2.50GHz
</a></td><td>23,639</td><td>135</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2679+v4+%40+2.50GHz&amp;id=2805#price">8.75
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2679+v4+%40+2.50GHz&amp;id=2805#price">$2,702.00*</a></td></tr><tr id="cpu1221" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2680+%40+2.70GHz&amp;id=1221">Intel Xeon E5-2680 @ 2.70GHz
</a></td><td>9,332</td><td>562</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2680+%40+2.70GHz&amp;id=1221#price">96.42
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2680+%40+2.70GHz&amp;id=1221#price">$96.79</a></td></tr><tr id="cpu2061" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2680+v2+%40+2.80GHz&amp;id=2061">Intel Xeon E5-2680 v2 @ 2.80GHz
</a></td><td>12,601</td><td>413</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2680+v2+%40+2.80GHz&amp;id=2061#price">88.12
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2680+v2+%40+2.80GHz&amp;id=2061#price">$143.00</a></td></tr><tr id="cpu2390" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2680+v3+%40+2.50GHz&amp;id=2390">Intel Xeon E5-2680 v3 @ 2.50GHz
</a></td><td>15,496</td><td>312</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2680+v3+%40+2.50GHz&amp;id=2390#price">87.55
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2680+v3+%40+2.50GHz&amp;id=2390#price">$176.99</a></td></tr><tr id="cpu2779" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2680+v4+%40+2.40GHz&amp;id=2779">Intel Xeon E5-2680 v4 @ 2.40GHz
</a></td><td>17,925</td><td>252</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2680+v4+%40+2.40GHz&amp;id=2779#price">42.38
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2680+v4+%40+2.40GHz&amp;id=2779#price">$423.00</a></td></tr><tr id="cpu3892" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2680R+v4+%40+2.40GHz&amp;id=3892">Intel Xeon E5-2680R v4 @ 2.40GHz
</a></td><td>17,795</td><td>256</td><td>NA</td><td>NA</td></tr><tr id="cpu3081" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2682+v4+%40+2.50GHz&amp;id=3081">Intel Xeon E5-2682 v4 @ 2.50GHz
</a></td><td>19,551</td><td>216</td><td>NA</td><td>NA</td></tr><tr id="cpu2491" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2683+v3+%40+2.00GHz&amp;id=2491">Intel Xeon E5-2683 v3 @ 2.00GHz
</a></td><td>14,734</td><td>334</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2683+v3+%40+2.00GHz&amp;id=2491#price">40.93
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2683+v3+%40+2.00GHz&amp;id=2491#price">$359.99</a></td></tr><tr id="cpu2908" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2683+v4+%40+2.10GHz&amp;id=2908">Intel Xeon E5-2683 v4 @ 2.10GHz
</a></td><td>18,254</td><td>243</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2683+v4+%40+2.10GHz&amp;id=2908#price">39.68
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2683+v4+%40+2.10GHz&amp;id=2908#price">$460.00</a></td></tr><tr id="cpu2538" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2685+v3+%40+2.60GHz&amp;id=2538">Intel Xeon E5-2685 v3 @ 2.60GHz
</a></td><td>12,944</td><td>404</td><td>NA</td><td>NA</td></tr><tr id="cpu2568" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2686+v3+%40+2.00GHz&amp;id=2568">Intel Xeon E5-2686 v3 @ 2.00GHz
</a></td><td>17,678</td><td>259</td><td>NA</td><td>NA</td></tr><tr id="cpu2870" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2686+v4+%40+2.30GHz&amp;id=2870">Intel Xeon E5-2686 v4 @ 2.30GHz
</a></td><td>16,745</td><td>282</td><td>NA</td><td>NA</td></tr><tr id="cpu1222" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2687W+%40+3.10GHz&amp;id=1222">Intel Xeon E5-2687W @ 3.10GHz
</a></td><td>9,699</td><td>541</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2687W+%40+3.10GHz&amp;id=1222#price">42.17
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2687W+%40+3.10GHz&amp;id=1222#price">$230.00</a></td></tr><tr id="cpu2045" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2687W+v2+%40+3.40GHz&amp;id=2045">Intel Xeon E5-2687W v2 @ 3.40GHz
</a></td><td>12,240</td><td>424</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2687W+v2+%40+3.40GHz&amp;id=2045#price">28.32
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2687W+v2+%40+3.40GHz&amp;id=2045#price">$432.19</a></td></tr><tr id="cpu2387" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2687W+v3+%40+3.10GHz&amp;id=2387">Intel Xeon E5-2687W v3 @ 3.10GHz
</a></td><td>14,802</td><td>330</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2687W+v3+%40+3.10GHz&amp;id=2387#price">21.77
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2687W+v3+%40+3.10GHz&amp;id=2387#price">$679.95</a></td></tr><tr id="cpu2765" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2687W+v4+%40+3.00GHz&amp;id=2765">Intel Xeon E5-2687W v4 @ 3.00GHz
</a></td><td>17,791</td><td>257</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2687W+v4+%40+3.00GHz&amp;id=2765#price">15.96
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2687W+v4+%40+3.00GHz&amp;id=2765#price">$1,114.95</a></td></tr><tr id="cpu1881" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2689+%40+2.60GHz&amp;id=1881">Intel Xeon E5-2689 @ 2.60GHz
</a></td><td>9,767</td><td>538</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2689+%40+2.60GHz&amp;id=1881#price">53.45
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2689+%40+2.60GHz&amp;id=1881#price">$182.75*</a></td></tr><tr id="cpu2853" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2689+v4+%40+3.10GHz&amp;id=2853">Intel Xeon E5-2689 v4 @ 3.10GHz
</a></td><td>16,706</td><td>283</td><td>NA</td><td>NA</td></tr><tr id="cpu1223" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2690+%40+2.90GHz&amp;id=1223">Intel Xeon E5-2690 @ 2.90GHz
</a></td><td>9,955</td><td>529</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2690+%40+2.90GHz&amp;id=1223#price">96.93
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2690+%40+2.90GHz&amp;id=1223#price">$102.70</a></td></tr><tr id="cpu2057" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2690+v2+%40+3.00GHz&amp;id=2057">Intel Xeon E5-2690 v2 @ 3.00GHz
</a></td><td>13,406</td><td>386</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2690+v2+%40+3.00GHz&amp;id=2057#price">78.86
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2690+v2+%40+3.00GHz&amp;id=2057#price">$169.99</a></td></tr><tr id="cpu2364" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2690+v3+%40+2.60GHz&amp;id=2364">Intel Xeon E5-2690 v3 @ 2.60GHz
</a></td><td>16,434</td><td>289</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2690+v3+%40+2.60GHz&amp;id=2364#price">57.66
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2690+v3+%40+2.60GHz&amp;id=2364#price">$285.00</a></td></tr><tr id="cpu2780" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2690+v4+%40+2.60GHz&amp;id=2780">Intel Xeon E5-2690 v4 @ 2.60GHz
</a></td><td>20,776</td><td>192</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2690+v4+%40+2.60GHz&amp;id=2780#price">40.90
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2690+v4+%40+2.60GHz&amp;id=2780#price">$507.95</a></td></tr><tr id="cpu2761" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2692+v2+%40+2.20GHz&amp;id=2761">Intel Xeon E5-2692 v2 @ 2.20GHz
</a></td><td>12,119</td><td>431</td><td>NA</td><td>NA</td></tr><tr id="cpu2114" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2695+v2+%40+2.40GHz&amp;id=2114">Intel Xeon E5-2695 v2 @ 2.40GHz
</a></td><td>13,382</td><td>388</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2695+v2+%40+2.40GHz&amp;id=2114#price">64.34
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2695+v2+%40+2.40GHz&amp;id=2114#price">$208.00</a></td></tr><tr id="cpu2371" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2695+v3+%40+2.30GHz&amp;id=2371">Intel Xeon E5-2695 v3 @ 2.30GHz
</a></td><td>16,032</td><td>299</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2695+v3+%40+2.30GHz&amp;id=2371#price">52.92
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2695+v3+%40+2.30GHz&amp;id=2371#price">$302.95</a></td></tr><tr id="cpu2846" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2695+v4+%40+2.10GHz&amp;id=2846">Intel Xeon E5-2695 v4 @ 2.10GHz
</a></td><td>20,373</td><td>199</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2695+v4+%40+2.10GHz&amp;id=2846#price">29.10
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2695+v4+%40+2.10GHz&amp;id=2846#price">$700.00</a></td></tr><tr id="cpu2039" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2696+v2+%40+2.50GHz&amp;id=2039">Intel Xeon E5-2696 v2 @ 2.50GHz
</a></td><td>14,229</td><td>357</td><td>NA</td><td>NA</td></tr><tr id="cpu2526" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2696+v3+%40+2.30GHz&amp;id=2526">Intel Xeon E5-2696 v3 @ 2.30GHz
</a></td><td>23,820</td><td>132</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2696+v3+%40+2.30GHz&amp;id=2526#price">9.54
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2696+v3+%40+2.30GHz&amp;id=2526#price">$2,498.00*</a></td></tr><tr id="cpu2750" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2696+v4+%40+2.20GHz&amp;id=2750">Intel Xeon E5-2696 v4 @ 2.20GHz
</a></td><td>23,642</td><td>134</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2696+v4+%40+2.20GHz&amp;id=2750#price">8.45
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2696+v4+%40+2.20GHz&amp;id=2750#price">$2,797.99*</a></td></tr><tr id="cpu2009" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2697+v2+%40+2.70GHz&amp;id=2009">Intel Xeon E5-2697 v2 @ 2.70GHz
</a></td><td>14,185</td><td>358</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2697+v2+%40+2.70GHz&amp;id=2009#price">73.88
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2697+v2+%40+2.70GHz&amp;id=2009#price">$192.00</a></td></tr><tr id="cpu2333" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2697+v3+%40+2.60GHz&amp;id=2333">Intel Xeon E5-2697 v3 @ 2.60GHz
</a></td><td>19,040</td><td>227</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2697+v3+%40+2.60GHz&amp;id=2333#price">65.66
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2697+v3+%40+2.60GHz&amp;id=2333#price">$289.99</a></td></tr><tr id="cpu2783" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2697+v4+%40+2.30GHz&amp;id=2783">Intel Xeon E5-2697 v4 @ 2.30GHz
</a></td><td>20,556</td><td>196</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2697+v4+%40+2.30GHz&amp;id=2783#price">21.82
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2697+v4+%40+2.30GHz&amp;id=2783#price">$941.95</a></td></tr><tr id="cpu2814" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2697A+v4+%40+2.60GHz&amp;id=2814">Intel Xeon E5-2697A v4 @ 2.60GHz
</a></td><td>21,402</td><td>179</td><td>NA</td><td>NA</td></tr><tr id="cpu3910" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2697R+v4+%40+2.30GHz&amp;id=3910">Intel Xeon E5-2697R v4 @ 2.30GHz
</a></td><td>20,843</td><td>190</td><td>NA</td><td>NA</td></tr><tr id="cpu2368" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2698+v3+%40+2.30GHz&amp;id=2368">Intel Xeon E5-2698 v3 @ 2.30GHz
</a></td><td>19,782</td><td>207</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2698+v3+%40+2.30GHz&amp;id=2368#price">2.20
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2698+v3+%40+2.30GHz&amp;id=2368#price">$9,010.00</a></td></tr><tr id="cpu2806" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2698+v4+%40+2.20GHz&amp;id=2806">Intel Xeon E5-2698 v4 @ 2.20GHz
</a></td><td>22,546</td><td>159</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2698+v4+%40+2.20GHz&amp;id=2806#price">6.21
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2698+v4+%40+2.20GHz&amp;id=2806#price">$3,629.59*</a></td></tr><tr id="cpu2366" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2699+v3+%40+2.30GHz&amp;id=2366">Intel Xeon E5-2699 v3 @ 2.30GHz
</a></td><td>19,763</td><td>208</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2699+v3+%40+2.30GHz&amp;id=2366#price">61.78
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2699+v3+%40+2.30GHz&amp;id=2366#price">$319.88*</a></td></tr><tr id="cpu2753" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2699+v4+%40+2.20GHz&amp;id=2753">Intel Xeon E5-2699 v4 @ 2.20GHz
</a></td><td>24,612</td><td>120</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2699+v4+%40+2.20GHz&amp;id=2753#price">35.16
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2699+v4+%40+2.20GHz&amp;id=2753#price">$699.99*</a></td></tr><tr id="cpu3398" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-2699A+v4+%40+2.40GHz&amp;id=3398">Intel Xeon E5-2699A v4 @ 2.40GHz
</a></td><td>14,917</td><td>326</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2699A+v4+%40+2.40GHz&amp;id=3398#price">3.02
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-2699A+v4+%40+2.40GHz&amp;id=3398#price">$4,938.00*</a></td></tr><tr id="cpu2181" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-4603+%40+2.00GHz&amp;id=2181">Intel Xeon E5-4603 @ 2.00GHz
</a></td><td>3,391</td><td>1314</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-4603+%40+2.00GHz&amp;id=2181#price">25.65
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-4603+%40+2.00GHz&amp;id=2181#price">$132.19</a></td></tr><tr id="cpu2828" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-4607+v2+%40+2.60GHz&amp;id=2828">Intel Xeon E5-4607 v2 @ 2.60GHz
</a></td><td>6,986</td><td>770</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-4607+v2+%40+2.60GHz&amp;id=2828#price">5.46
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-4607+v2+%40+2.60GHz&amp;id=2828#price">$1,279.31*</a></td></tr><tr id="cpu3348" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-4610+%40+2.40GHz&amp;id=3348">Intel Xeon E5-4610 @ 2.40GHz
</a></td><td>6,460</td><td>833</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-4610+%40+2.40GHz&amp;id=3348#price">30.02
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-4610+%40+2.40GHz&amp;id=3348#price">$215.19</a></td></tr><tr id="cpu3527" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-4610+v3+%40+1.70GHz&amp;id=3527">Intel Xeon E5-4610 v3 @ 1.70GHz
</a></td><td>7,229</td><td>734</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-4610+v3+%40+1.70GHz&amp;id=3527#price">5.93
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-4610+v3+%40+1.70GHz&amp;id=3527#price">$1,219.00*</a></td></tr><tr id="cpu2150" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-4617+%40+2.90GHz&amp;id=2150">Intel Xeon E5-4617 @ 2.90GHz
</a></td><td>6,298</td><td>858</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-4617+%40+2.90GHz&amp;id=2150#price">175.52
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-4617+%40+2.90GHz&amp;id=2150#price">$35.88*</a></td></tr><tr id="cpu2615" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-4620+%40+2.20GHz&amp;id=2615">Intel Xeon E5-4620 @ 2.20GHz
</a></td><td>6,830</td><td>793</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-4620+%40+2.20GHz&amp;id=2615#price">73.56
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-4620+%40+2.20GHz&amp;id=2615#price">$92.84</a></td></tr><tr id="cpu3640" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-4620+v3+%40+2.00GHz&amp;id=3640">Intel Xeon E5-4620 v3 @ 2.00GHz
</a></td><td>10,509</td><td>501</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-4620+v3+%40+2.00GHz&amp;id=3640#price">149.96
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-4620+v3+%40+2.00GHz&amp;id=3640#price">$70.08*</a></td></tr><tr id="cpu2510" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-4627+v2+%40+3.30GHz&amp;id=2510">Intel Xeon E5-4627 v2 @ 3.30GHz
</a></td><td>9,320</td><td>563</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-4627+v2+%40+3.30GHz&amp;id=2510#price">18.68
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-4627+v2+%40+3.30GHz&amp;id=2510#price">$498.95*</a></td></tr><tr id="cpu2913" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-4627+v3+%40+2.60GHz&amp;id=2913">Intel Xeon E5-4627 v3 @ 2.60GHz
</a></td><td>11,344</td><td>463</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-4627+v3+%40+2.60GHz&amp;id=2913#price">4.73
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-4627+v3+%40+2.60GHz&amp;id=2913#price">$2,400.00*</a></td></tr><tr id="cpu3005" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-4627+v4+%40+2.60GHz&amp;id=3005">Intel Xeon E5-4627 v4 @ 2.60GHz
</a></td><td>12,969</td><td>402</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-4627+v4+%40+2.60GHz&amp;id=3005#price">12.97
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-4627+v4+%40+2.60GHz&amp;id=3005#price">$999.99*</a></td></tr><tr id="cpu1224" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-4640+%40+2.40GHz&amp;id=1224">Intel Xeon E5-4640 @ 2.40GHz
</a></td><td>7,308</td><td>725</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-4640+%40+2.40GHz&amp;id=1224#price">121.83
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-4640+%40+2.40GHz&amp;id=1224#price">$59.99</a></td></tr><tr id="cpu3031" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-4640+v3+%40+1.90GHz&amp;id=3031">Intel Xeon E5-4640 v3 @ 1.90GHz
</a></td><td>10,372</td><td>508</td><td>NA</td><td>NA</td></tr><tr id="cpu3024" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-4648+v3+%40+1.70GHz&amp;id=3024">Intel Xeon E5-4648 v3 @ 1.70GHz
</a></td><td>9,061</td><td>582</td><td>NA</td><td>NA</td></tr><tr id="cpu1225" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-4650+%40+2.70GHz&amp;id=1225">Intel Xeon E5-4650 @ 2.70GHz
</a></td><td>8,574</td><td>610</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-4650+%40+2.70GHz&amp;id=1225#price">107.19
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-4650+%40+2.70GHz&amp;id=1225#price">$79.99</a></td></tr><tr id="cpu3206" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-4650+v3+%40+2.10GHz&amp;id=3206">Intel Xeon E5-4650 v3 @ 2.10GHz
</a></td><td>10,838</td><td>488</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-4650+v3+%40+2.10GHz&amp;id=3206#price">2.82
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-4650+v3+%40+2.10GHz&amp;id=3206#price">$3,838.00*</a></td></tr><tr id="cpu3039" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-4650L+%40+2.60GHz&amp;id=3039">Intel Xeon E5-4650L @ 2.60GHz
</a></td><td>8,415</td><td>617</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-4650L+%40+2.60GHz&amp;id=3039#price">140.28
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-4650L+%40+2.60GHz&amp;id=3039#price">$59.99</a></td></tr><tr id="cpu3250" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-4655+v3+%40+2.90GHz&amp;id=3250">Intel Xeon E5-4655 v3 @ 2.90GHz
</a></td><td>9,377</td><td>559</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-4655+v3+%40+2.90GHz&amp;id=3250#price">2.03
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-4655+v3+%40+2.90GHz&amp;id=3250#price">$4,616.00*</a></td></tr><tr id="cpu2480" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-4657L+v2+%40+2.40GHz&amp;id=2480">Intel Xeon E5-4657L v2 @ 2.40GHz
</a></td><td>12,495</td><td>416</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-4657L+v2+%40+2.40GHz&amp;id=2480#price">16.63
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-4657L+v2+%40+2.40GHz&amp;id=2480#price">$751.19*</a></td></tr><tr id="cpu3010" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-4660+v3+%40+2.10GHz&amp;id=3010">Intel Xeon E5-4660 v3 @ 2.10GHz
</a></td><td>14,256</td><td>356</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-4660+v3+%40+2.10GHz&amp;id=3010#price">2.97
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-4660+v3+%40+2.10GHz&amp;id=3010#price">$4,800.00*</a></td></tr><tr id="cpu3163" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-4667+v3+%40+2.00GHz&amp;id=3163">Intel Xeon E5-4667 v3 @ 2.00GHz
</a></td><td>15,397</td><td>315</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-4667+v3+%40+2.00GHz&amp;id=3163#price">2.69
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-4667+v3+%40+2.00GHz&amp;id=3163#price">$5,729.00*</a></td></tr><tr id="cpu2678" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-4669+v3+%40+2.10GHz&amp;id=2678">Intel Xeon E5-4669 v3 @ 2.10GHz
</a></td><td>17,209</td><td>271</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-4669+v3+%40+2.10GHz&amp;id=2678#price">3.19
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5-4669+v3+%40+2.10GHz&amp;id=2678#price">$5,400.00*</a></td></tr><tr id="cpu2997" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5-4669+v4+%40+2.20GHz&amp;id=2997">Intel Xeon E5-4669 v4 @ 2.20GHz
</a></td><td>11,523</td><td>456</td><td>NA</td><td>NA</td></tr><tr id="cpu3160" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E7-+2830+%40+2.13GHz&amp;id=3160">Intel Xeon E7- 2830 @ 2.13GHz
</a></td><td>2,027</td><td>1848</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E7-+2830+%40+2.13GHz&amp;id=3160#price">1.14
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E7-+2830+%40+2.13GHz&amp;id=3160#price">$1,779.00*</a></td></tr><tr id="cpu1194" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3110+%40+3.00GHz&amp;id=1194">Intel Xeon E3110 @ 3.00GHz
</a></td><td>1,242</td><td>2346</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3110+%40+3.00GHz&amp;id=1194#price">6.21
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3110+%40+3.00GHz&amp;id=1194#price">$199.95*</a></td></tr><tr id="cpu2403" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3113+%40+3.00GHz&amp;id=2403">Intel Xeon E3113 @ 3.00GHz
</a></td><td>1,429</td><td>2216</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3113+%40+3.00GHz&amp;id=2403#price">145.96
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E3113+%40+3.00GHz&amp;id=2403#price">$9.79*</a></td></tr><tr id="cpu1195" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E3120+%40+3.16GHz&amp;id=1195">Intel Xeon E3120 @ 3.16GHz
</a></td><td>1,330</td><td>2276</td><td>NA</td><td>NA</td></tr><tr id="cpu1226" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5205+%40+1.86GHz&amp;id=1226">Intel Xeon E5205 @ 1.86GHz
</a></td><td>838</td><td>2692</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5205+%40+1.86GHz&amp;id=1226#price">58.75
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5205+%40+1.86GHz&amp;id=1226#price">$14.27*</a></td></tr><tr id="cpu1227" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5240+%40+3.00GHz&amp;id=1227">Intel Xeon E5240 @ 3.00GHz
</a></td><td>1,448</td><td>2203</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5240+%40+3.00GHz&amp;id=1227#price">16.32
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5240+%40+3.00GHz&amp;id=1227#price">$88.78*</a></td></tr><tr id="cpu1704" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5310+%40+1.60GHz&amp;id=1704">Intel Xeon E5310 @ 1.60GHz
</a></td><td>1,306</td><td>2297</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5310+%40+1.60GHz&amp;id=1704#price">26.65
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5310+%40+1.60GHz&amp;id=1704#price">$49.00*</a></td></tr><tr id="cpu1228" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5320+%40+1.86GHz&amp;id=1228">Intel Xeon E5320 @ 1.86GHz
</a></td><td>1,402</td><td>2234</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5320+%40+1.86GHz&amp;id=1228#price">36.19
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5320+%40+1.86GHz&amp;id=1228#price">$38.75*</a></td></tr><tr id="cpu1229" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5335+%40+2.00GHz&amp;id=1229">Intel Xeon E5335 @ 2.00GHz
</a></td><td>1,549</td><td>2144</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5335+%40+2.00GHz&amp;id=1229#price">87.15
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5335+%40+2.00GHz&amp;id=1229#price">$17.77*</a></td></tr><tr id="cpu1230" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5345+%40+2.33GHz&amp;id=1230">Intel Xeon E5345 @ 2.33GHz
</a></td><td>1,814</td><td>1975</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5345+%40+2.33GHz&amp;id=1230#price">45.36
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5345+%40+2.33GHz&amp;id=1230#price">$39.99*</a></td></tr><tr id="cpu1231" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5405+%40+2.00GHz&amp;id=1231">Intel Xeon E5405 @ 2.00GHz
</a></td><td>1,630</td><td>2091</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5405+%40+2.00GHz&amp;id=1231#price">40.81
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5405+%40+2.00GHz&amp;id=1231#price">$39.95*</a></td></tr><tr id="cpu1232" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5410+%40+2.33GHz&amp;id=1232">Intel Xeon E5410 @ 2.33GHz
</a></td><td>1,923</td><td>1905</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5410+%40+2.33GHz&amp;id=1232#price">179.92
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5410+%40+2.33GHz&amp;id=1232#price">$10.69*</a></td></tr><tr id="cpu1233" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5420+%40+2.50GHz&amp;id=1233">Intel Xeon E5420 @ 2.50GHz
</a></td><td>1,920</td><td>1907</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5420+%40+2.50GHz&amp;id=1233#price">7.68
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5420+%40+2.50GHz&amp;id=1233#price">$249.95*</a></td></tr><tr id="cpu1234" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5430+%40+2.66GHz&amp;id=1234">Intel Xeon E5430 @ 2.66GHz
</a></td><td>2,217</td><td>1747</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5430+%40+2.66GHz&amp;id=1234#price">9.64
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5430+%40+2.66GHz&amp;id=1234#price">$229.95*</a></td></tr><tr id="cpu1235" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5440+%40+2.83GHz&amp;id=1235">Intel Xeon E5440 @ 2.83GHz
</a></td><td>2,242</td><td>1727</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5440+%40+2.83GHz&amp;id=1235#price">59.01
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5440+%40+2.83GHz&amp;id=1235#price">$37.99*</a></td></tr><tr id="cpu1236" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5450+%40+3.00GHz&amp;id=1236">Intel Xeon E5450 @ 3.00GHz
</a></td><td>2,454</td><td>1631</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5450+%40+3.00GHz&amp;id=1236#price">66.34
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5450+%40+3.00GHz&amp;id=1236#price">$36.99*</a></td></tr><tr id="cpu1237" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5462+%40+2.80GHz&amp;id=1237">Intel Xeon E5462 @ 2.80GHz
</a></td><td>2,027</td><td>1850</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5462+%40+2.80GHz&amp;id=1237#price">74.24
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5462+%40+2.80GHz&amp;id=1237#price">$27.30*</a></td></tr><tr id="cpu1705" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5472+%40+3.00GHz&amp;id=1705">Intel Xeon E5472 @ 3.00GHz
</a></td><td>2,432</td><td>1640</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5472+%40+3.00GHz&amp;id=1705#price">121.35
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5472+%40+3.00GHz&amp;id=1705#price">$20.04*</a></td></tr><tr id="cpu1238" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5502+%40+1.87GHz&amp;id=1238">Intel Xeon E5502 @ 1.87GHz
</a></td><td>837</td><td>2694</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5502+%40+1.87GHz&amp;id=1238#price">10.46
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5502+%40+1.87GHz&amp;id=1238#price">$80.00</a></td></tr><tr id="cpu1239" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5503+%40+2.00GHz&amp;id=1239">Intel Xeon E5503 @ 2.00GHz
</a></td><td>804</td><td>2726</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5503+%40+2.00GHz&amp;id=1239#price">6.18
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5503+%40+2.00GHz&amp;id=1239#price">$130.19</a></td></tr><tr id="cpu1240" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5504+%40+2.00GHz&amp;id=1240">Intel Xeon E5504 @ 2.00GHz
</a></td><td>1,529</td><td>2154</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5504+%40+2.00GHz&amp;id=1240#price">23.56
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5504+%40+2.00GHz&amp;id=1240#price">$64.89</a></td></tr><tr id="cpu1241" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5506+%40+2.13GHz&amp;id=1241">Intel Xeon E5506 @ 2.13GHz
</a></td><td>1,923</td><td>1906</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5506+%40+2.13GHz&amp;id=1241#price">217.51
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5506+%40+2.13GHz&amp;id=1241#price">$8.84*</a></td></tr><tr id="cpu1242" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5507+%40+2.27GHz&amp;id=1242">Intel Xeon E5507 @ 2.27GHz
</a></td><td>1,928</td><td>1902</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5507+%40+2.27GHz&amp;id=1242#price">19.28
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5507+%40+2.27GHz&amp;id=1242#price">$100.00</a></td></tr><tr id="cpu1243" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5520+%40+2.27GHz&amp;id=1243">Intel Xeon E5520 @ 2.27GHz
</a></td><td>2,514</td><td>1608</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5520+%40+2.27GHz&amp;id=1243#price">36.21
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5520+%40+2.27GHz&amp;id=1243#price">$69.43</a></td></tr><tr id="cpu1244" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5530+%40+2.40GHz&amp;id=1244">Intel Xeon E5530 @ 2.40GHz
</a></td><td>2,603</td><td>1574</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5530+%40+2.40GHz&amp;id=1244#price">86.80
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5530+%40+2.40GHz&amp;id=1244#price">$29.99</a></td></tr><tr id="cpu1245" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5540+%40+2.53GHz&amp;id=1245">Intel Xeon E5540 @ 2.53GHz
</a></td><td>2,679</td><td>1554</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5540+%40+2.53GHz&amp;id=1245#price">29.86
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5540+%40+2.53GHz&amp;id=1245#price">$89.75*</a></td></tr><tr id="cpu1246" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5603+%40+1.60GHz&amp;id=1246">Intel Xeon E5603 @ 1.60GHz
</a></td><td>1,935</td><td>1900</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5603+%40+1.60GHz&amp;id=1246#price">20.32
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5603+%40+1.60GHz&amp;id=1246#price">$95.19</a></td></tr><tr id="cpu1247" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5606+%40+2.13GHz&amp;id=1247">Intel Xeon E5606 @ 2.13GHz
</a></td><td>2,493</td><td>1616</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5606+%40+2.13GHz&amp;id=1247#price">10.84
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5606+%40+2.13GHz&amp;id=1247#price">$230.00</a></td></tr><tr id="cpu1248" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5607+%40+2.27GHz&amp;id=1248">Intel Xeon E5607 @ 2.27GHz
</a></td><td>2,686</td><td>1550</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5607+%40+2.27GHz&amp;id=1248#price">22.35
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5607+%40+2.27GHz&amp;id=1248#price">$120.19</a></td></tr><tr id="cpu1249" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5620+%40+2.40GHz&amp;id=1249">Intel Xeon E5620 @ 2.40GHz
</a></td><td>3,702</td><td>1248</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5620+%40+2.40GHz&amp;id=1249#price">160.97
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5620+%40+2.40GHz&amp;id=1249#price">$23.00</a></td></tr><tr id="cpu1250" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5630+%40+2.53GHz&amp;id=1250">Intel Xeon E5630 @ 2.53GHz
</a></td><td>3,720</td><td>1242</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5630+%40+2.53GHz&amp;id=1250#price">21.88
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5630+%40+2.53GHz&amp;id=1250#price">$170.00</a></td></tr><tr id="cpu1251" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5640+%40+2.67GHz&amp;id=1251">Intel Xeon E5640 @ 2.67GHz
</a></td><td>4,018</td><td>1189</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5640+%40+2.67GHz&amp;id=1251#price">71.62
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5640+%40+2.67GHz&amp;id=1251#price">$56.10</a></td></tr><tr id="cpu1252" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5645+%40+2.40GHz&amp;id=1252">Intel Xeon E5645 @ 2.40GHz
</a></td><td>4,915</td><td>1038</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5645+%40+2.40GHz&amp;id=1252#price">122.91
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5645+%40+2.40GHz&amp;id=1252#price">$39.99</a></td></tr><tr id="cpu1253" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E5649+%40+2.53GHz&amp;id=1253">Intel Xeon E5649 @ 2.53GHz
</a></td><td>4,936</td><td>1037</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5649+%40+2.53GHz&amp;id=1253#price">35.77
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E5649+%40+2.53GHz&amp;id=1253#price">$138.00*</a></td></tr><tr id="cpu2726" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E7320+%40+2.13GHz&amp;id=2726">Intel Xeon E7320 @ 2.13GHz
</a></td><td>1,469</td><td>2194</td><td>NA</td><td>NA</td></tr><tr id="cpu3342" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E-2104G+%40+3.20GHz&amp;id=3342">Intel Xeon E-2104G @ 3.20GHz
</a></td><td>6,215</td><td>866</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2104G+%40+3.20GHz&amp;id=3342#price">16.40
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2104G+%40+3.20GHz&amp;id=3342#price">$379.00*</a></td></tr><tr id="cpu3432" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E-2124+%40+3.30GHz&amp;id=3432">Intel Xeon E-2124 @ 3.30GHz
</a></td><td>7,036</td><td>758</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2124+%40+3.30GHz&amp;id=3432#price">33.51
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2124+%40+3.30GHz&amp;id=3432#price">$209.99*</a></td></tr><tr id="cpu3364" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E-2124G+%40+3.40GHz&amp;id=3364">Intel Xeon E-2124G @ 3.40GHz
</a></td><td>7,547</td><td>694</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2124G+%40+3.40GHz&amp;id=3364#price">31.09
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2124G+%40+3.40GHz&amp;id=3364#price">$242.75*</a></td></tr><tr id="cpu3360" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E-2126G+%40+3.30GHz&amp;id=3360">Intel Xeon E-2126G @ 3.30GHz
</a></td><td>10,922</td><td>482</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2126G+%40+3.30GHz&amp;id=3360#price">36.90
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2126G+%40+3.30GHz&amp;id=3360#price">$296.00*</a></td></tr><tr id="cpu3391" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E-2134+%40+3.50GHz&amp;id=3391">Intel Xeon E-2134 @ 3.50GHz
</a></td><td>8,253</td><td>632</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2134+%40+3.50GHz&amp;id=3391#price">30.57
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2134+%40+3.50GHz&amp;id=3391#price">$269.99</a></td></tr><tr id="cpu3363" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E-2136+%40+3.30GHz&amp;id=3363">Intel Xeon E-2136 @ 3.30GHz
</a></td><td>13,506</td><td>382</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2136+%40+3.30GHz&amp;id=3363#price">44.73
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2136+%40+3.30GHz&amp;id=3363#price">$301.94</a></td></tr><tr id="cpu3399" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E-2144G+%40+3.60GHz&amp;id=3399">Intel Xeon E-2144G @ 3.60GHz
</a></td><td>9,288</td><td>566</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2144G+%40+3.60GHz&amp;id=3399#price">30.84
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2144G+%40+3.60GHz&amp;id=3399#price">$301.17*</a></td></tr><tr id="cpu3314" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E-2146G+%40+3.50GHz&amp;id=3314">Intel Xeon E-2146G @ 3.50GHz
</a></td><td>13,388</td><td>387</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2146G+%40+3.50GHz&amp;id=3314#price">40.09
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2146G+%40+3.50GHz&amp;id=3314#price">$333.99</a></td></tr><tr id="cpu3320" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E-2174G+%40+3.80GHz&amp;id=3320">Intel Xeon E-2174G @ 3.80GHz
</a></td><td>9,496</td><td>553</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2174G+%40+3.80GHz&amp;id=3320#price">27.85
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2174G+%40+3.80GHz&amp;id=3320#price">$340.99</a></td></tr><tr id="cpu3336" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E-2176G+%40+3.70GHz&amp;id=3336">Intel Xeon E-2176G @ 3.70GHz
</a></td><td>13,698</td><td>380</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2176G+%40+3.70GHz&amp;id=3336#price">34.24
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2176G+%40+3.70GHz&amp;id=3336#price">$400.00</a></td></tr><tr id="cpu3242" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E-2176M+%40+2.70GHz&amp;id=3242">Intel Xeon E-2176M @ 2.70GHz
</a></td><td>10,942</td><td>481</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2176M+%40+2.70GHz&amp;id=3242#price">24.32
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2176M+%40+2.70GHz&amp;id=3242#price">$450.00*</a></td></tr><tr id="cpu3346" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E-2186G+%40+3.80GHz&amp;id=3346">Intel Xeon E-2186G @ 3.80GHz
</a></td><td>14,017</td><td>367</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2186G+%40+3.80GHz&amp;id=3346#price">25.82
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2186G+%40+3.80GHz&amp;id=3346#price">$542.78*</a></td></tr><tr id="cpu3232" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E-2186M+%40+2.90GHz&amp;id=3232">Intel Xeon E-2186M @ 2.90GHz
</a></td><td>11,024</td><td>476</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2186M+%40+2.90GHz&amp;id=3232#price">17.70
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2186M+%40+2.90GHz&amp;id=3232#price">$623.00*</a></td></tr><tr id="cpu3512" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E-2224+%40+3.40GHz&amp;id=3512">Intel Xeon E-2224 @ 3.40GHz
</a></td><td>7,297</td><td>726</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2224+%40+3.40GHz&amp;id=3512#price">31.77
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2224+%40+3.40GHz&amp;id=3512#price">$229.71*</a></td></tr><tr id="cpu3490" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E-2224G+%40+3.50GHz&amp;id=3490">Intel Xeon E-2224G @ 3.50GHz
</a></td><td>7,466</td><td>704</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2224G+%40+3.50GHz&amp;id=3490#price">27.90
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2224G+%40+3.50GHz&amp;id=3490#price">$267.56*</a></td></tr><tr id="cpu3572" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E-2226G+%40+3.40GHz&amp;id=3572">Intel Xeon E-2226G @ 3.40GHz
</a></td><td>11,119</td><td>473</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2226G+%40+3.40GHz&amp;id=3572#price">25.53
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2226G+%40+3.40GHz&amp;id=3572#price">$435.46</a></td></tr><tr id="cpu3853" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E-2234+%40+3.60GHz&amp;id=3853">Intel Xeon E-2234 @ 3.60GHz
</a></td><td>9,818</td><td>534</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2234+%40+3.60GHz&amp;id=3853#price">33.28
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2234+%40+3.60GHz&amp;id=3853#price">$294.99*</a></td></tr><tr id="cpu3607" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E-2236+%40+3.40GHz&amp;id=3607">Intel Xeon E-2236 @ 3.40GHz
</a></td><td>14,412</td><td>350</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2236+%40+3.40GHz&amp;id=3607#price">36.03
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2236+%40+3.40GHz&amp;id=3607#price">$399.95</a></td></tr><tr id="cpu3580" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E-2244G+%40+3.80GHz&amp;id=3580">Intel Xeon E-2244G @ 3.80GHz
</a></td><td>9,986</td><td>526</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2244G+%40+3.80GHz&amp;id=3580#price">30.75
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2244G+%40+3.80GHz&amp;id=3580#price">$324.79*</a></td></tr><tr id="cpu3523" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E-2246G+%40+3.60GHz&amp;id=3523">Intel Xeon E-2246G @ 3.60GHz
</a></td><td>13,957</td><td>371</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2246G+%40+3.60GHz&amp;id=3523#price">44.88
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2246G+%40+3.60GHz&amp;id=3523#price">$311.00*</a></td></tr><tr id="cpu3622" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E-2254ML+%40+1.70GHz&amp;id=3622">Intel Xeon E-2254ML @ 1.70GHz
</a></td><td>6,333</td><td>854</td><td>NA</td><td>NA</td></tr><tr id="cpu3584" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E-2274G+%40+4.00GHz&amp;id=3584">Intel Xeon E-2274G @ 4.00GHz
</a></td><td>9,639</td><td>546</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2274G+%40+4.00GHz&amp;id=3584#price">28.86
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2274G+%40+4.00GHz&amp;id=3584#price">$334.00*</a></td></tr><tr id="cpu3596" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E-2276G+%40+3.80GHz&amp;id=3596">Intel Xeon E-2276G @ 3.80GHz
</a></td><td>13,300</td><td>393</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2276G+%40+3.80GHz&amp;id=3596#price">20.47
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2276G+%40+3.80GHz&amp;id=3596#price">$649.73*</a></td></tr><tr id="cpu3489" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E-2276M+%40+2.80GHz&amp;id=3489">Intel Xeon E-2276M @ 2.80GHz
</a></td><td>12,103</td><td>433</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2276M+%40+2.80GHz&amp;id=3489#price">26.89
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2276M+%40+2.80GHz&amp;id=3489#price">$450.00*</a></td></tr><tr id="cpu4427" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E-2276ME+%40+2.80GHz&amp;id=4427">Intel Xeon E-2276ME @ 2.80GHz
</a></td><td>9,680</td><td>544</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2276ME+%40+2.80GHz&amp;id=4427#price">21.51
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2276ME+%40+2.80GHz&amp;id=4427#price">$450.00*</a></td></tr><tr id="cpu3606" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E-2278G+%40+3.40GHz&amp;id=3606">Intel Xeon E-2278G @ 3.40GHz
</a></td><td>17,609</td><td>260</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2278G+%40+3.40GHz&amp;id=3606#price">35.65
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2278G+%40+3.40GHz&amp;id=3606#price">$494.00*</a></td></tr><tr id="cpu3763" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E-2278GE+%40+3.30GHz&amp;id=3763">Intel Xeon E-2278GE @ 3.30GHz
</a></td><td>17,210</td><td>270</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2278GE+%40+3.30GHz&amp;id=3763#price">34.84
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2278GE+%40+3.30GHz&amp;id=3763#price">$494.00*</a></td></tr><tr id="cpu3595" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E-2278GEL+%40+2.00GHz&amp;id=3595">Intel Xeon E-2278GEL @ 2.00GHz
</a></td><td>12,024</td><td>436</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2278GEL+%40+2.00GHz&amp;id=3595#price">24.34
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2278GEL+%40+2.00GHz&amp;id=3595#price">$494.00*</a></td></tr><tr id="cpu3590" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E-2286G+%40+4.00GHz&amp;id=3590">Intel Xeon E-2286G @ 4.00GHz
</a></td><td>14,431</td><td>347</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2286G+%40+4.00GHz&amp;id=3590#price">17.12
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2286G+%40+4.00GHz&amp;id=3590#price">$843.00*</a></td></tr><tr id="cpu3491" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E-2286M+%40+2.40GHz&amp;id=3491">Intel Xeon E-2286M @ 2.40GHz
</a></td><td>15,739</td><td>306</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2286M+%40+2.40GHz&amp;id=3491#price">11.46
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2286M+%40+2.40GHz&amp;id=3491#price">$1,373.18*</a></td></tr><tr id="cpu3546" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+E-2288G+%40+3.70GHz&amp;id=3546">Intel Xeon E-2288G @ 3.70GHz
</a></td><td>17,107</td><td>272</td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2288G+%40+3.70GHz&amp;id=3546#price">31.74
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+E-2288G+%40+3.70GHz&amp;id=3546#price">$539.00*</a></td></tr><tr id="cpu3108" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+5117+%40+2.00GHz&amp;id=3108">Intel Xeon Gold 5117 @ 2.00GHz
</a></td><td>15,816</td><td>304</td><td>NA</td><td>NA</td></tr><tr id="cpu3148" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+5118+%40+2.30GHz&amp;id=3148">Intel Xeon Gold 5118 @ 2.30GHz
</a></td><td>16,015</td><td>300</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+5118+%40+2.30GHz&amp;id=3148#price">16.72
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+5118+%40+2.30GHz&amp;id=3148#price">$958.09</a></td></tr><tr id="cpu3154" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+5120+%40+2.20GHz&amp;id=3154">Intel Xeon Gold 5120 @ 2.20GHz
</a></td><td>16,990</td><td>277</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+5120+%40+2.20GHz&amp;id=3154#price">10.88
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+5120+%40+2.20GHz&amp;id=3154#price">$1,561.00*</a></td></tr><tr id="cpu3229" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+5120T+%40+2.20GHz&amp;id=3229">Intel Xeon Gold 5120T @ 2.20GHz
</a></td><td>17,540</td><td>262</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+5120T+%40+2.20GHz&amp;id=3229#price">10.16
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+5120T+%40+2.20GHz&amp;id=3229#price">$1,727.00*</a></td></tr><tr id="cpu3128" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+5122+%40+3.60GHz&amp;id=3128">Intel Xeon Gold 5122 @ 3.60GHz
</a></td><td>8,598</td><td>609</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+5122+%40+3.60GHz&amp;id=3128#price">6.65
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+5122+%40+3.60GHz&amp;id=3128#price">$1,292.66</a></td></tr><tr id="cpu3620" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+5215+%40+2.50GHz&amp;id=3620">Intel Xeon Gold 5215 @ 2.50GHz
</a></td><td>16,058</td><td>298</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+5215+%40+2.50GHz&amp;id=3620#price">12.36
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+5215+%40+2.50GHz&amp;id=3620#price">$1,299.00</a></td></tr><tr id="cpu3585" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+5217+%40+3.00GHz&amp;id=3585">Intel Xeon Gold 5217 @ 3.00GHz
</a></td><td>15,036</td><td>322</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+5217+%40+3.00GHz&amp;id=3585#price">10.52
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+5217+%40+3.00GHz&amp;id=3585#price">$1,429.95</a></td></tr><tr id="cpu3536" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+5218+%40+2.30GHz&amp;id=3536">Intel Xeon Gold 5218 @ 2.30GHz
</a></td><td>22,117</td><td>166</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+5218+%40+2.30GHz&amp;id=3536#price">20.24
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+5218+%40+2.30GHz&amp;id=3536#price">$1,092.50</a></td></tr><tr id="cpu4260" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+5218R+%40+2.10GHz&amp;id=4260">Intel Xeon Gold 5218R @ 2.10GHz
</a></td><td>25,191</td><td>115</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+5218R+%40+2.10GHz&amp;id=4260#price">23.32
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+5218R+%40+2.10GHz&amp;id=4260#price">$1,080.00</a></td></tr><tr id="cpu3534" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+5220+%40+2.20GHz&amp;id=3534">Intel Xeon Gold 5220 @ 2.20GHz
</a></td><td>25,740</td><td>104</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+5220+%40+2.20GHz&amp;id=3534#price">17.45
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+5220+%40+2.20GHz&amp;id=3534#price">$1,475.00</a></td></tr><tr id="cpu3475" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+5222+%40+3.80GHz&amp;id=3475">Intel Xeon Gold 5222 @ 3.80GHz
</a></td><td>9,428</td><td>555</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+5222+%40+3.80GHz&amp;id=3475#price">7.57
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+5222+%40+3.80GHz&amp;id=3475#price">$1,245.00</a></td></tr><tr id="cpu4492" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+5315Y+%40+3.20GHz&amp;id=4492">Intel Xeon Gold 5315Y @ 3.20GHz
</a></td><td>21,225</td><td>183</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+5315Y+%40+3.20GHz&amp;id=4492#price">23.72
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+5315Y+%40+3.20GHz&amp;id=4492#price">$895.00*</a></td></tr><tr id="cpu4326" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+5317+%40+3.00GHz&amp;id=4326">Intel Xeon Gold 5317 @ 3.00GHz
</a></td><td>30,555</td><td>68</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+5317+%40+3.00GHz&amp;id=4326#price">28.31
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+5317+%40+3.00GHz&amp;id=4326#price">$1,079.19*</a></td></tr><tr id="cpu3219" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+6126+%40+2.60GHz&amp;id=3219">Intel Xeon Gold 6126 @ 2.60GHz
</a></td><td>19,223</td><td>224</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6126+%40+2.60GHz&amp;id=3219#price">14.79
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6126+%40+2.60GHz&amp;id=3219#price">$1,300.00</a></td></tr><tr id="cpu3104" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+6128+%40+3.40GHz&amp;id=3104">Intel Xeon Gold 6128 @ 3.40GHz
</a></td><td>14,273</td><td>355</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6128+%40+3.40GHz&amp;id=3104#price">8.30
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6128+%40+3.40GHz&amp;id=3104#price">$1,719.00</a></td></tr><tr id="cpu3126" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+6130+%40+2.10GHz&amp;id=3126">Intel Xeon Gold 6130 @ 2.10GHz
</a></td><td>20,721</td><td>193</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6130+%40+2.10GHz&amp;id=3126#price">18.02
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6130+%40+2.10GHz&amp;id=3126#price">$1,150.00</a></td></tr><tr id="cpu3855" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+6130T+%40+2.10GHz&amp;id=3855">Intel Xeon Gold 6130T @ 2.10GHz
</a></td><td>21,803</td><td>169</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6130T+%40+2.10GHz&amp;id=3855#price">10.97
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6130T+%40+2.10GHz&amp;id=3855#price">$1,988.00*</a></td></tr><tr id="cpu3227" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+6132+%40+2.60GHz&amp;id=3227">Intel Xeon Gold 6132 @ 2.60GHz
</a></td><td>19,552</td><td>215</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6132+%40+2.60GHz&amp;id=3227#price">9.21
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6132+%40+2.60GHz&amp;id=3227#price">$2,122.90</a></td></tr><tr id="cpu4302" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+6133+%40+2.50GHz&amp;id=4302">Intel Xeon Gold 6133 @ 2.50GHz
</a></td><td>1,172</td><td>2401</td><td>NA</td><td>NA</td></tr><tr id="cpu3008" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+6134+%40+3.20GHz&amp;id=3008">Intel Xeon Gold 6134 @ 3.20GHz
</a></td><td>16,513</td><td>286</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6134+%40+3.20GHz&amp;id=3008#price">8.69
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6134+%40+3.20GHz&amp;id=3008#price">$1,899.72</a></td></tr><tr id="cpu3065" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+6136+%40+3.00GHz&amp;id=3065">Intel Xeon Gold 6136 @ 3.00GHz
</a></td><td>21,799</td><td>170</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6136+%40+3.00GHz&amp;id=3065#price">8.62
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6136+%40+3.00GHz&amp;id=3065#price">$2,529.39</a></td></tr><tr id="cpu3381" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+6137+%40+3.90GHz&amp;id=3381">Intel Xeon Gold 6137 @ 3.90GHz
</a></td><td>19,365</td><td>219</td><td>NA</td><td>NA</td></tr><tr id="cpu3137" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+6138+%40+2.00GHz&amp;id=3137">Intel Xeon Gold 6138 @ 2.00GHz
</a></td><td>24,115</td><td>127</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6138+%40+2.00GHz&amp;id=3137#price">16.08
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6138+%40+2.00GHz&amp;id=3137#price">$1,499.69</a></td></tr><tr id="cpu3703" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+6138T+%40+2.00GHz&amp;id=3703">Intel Xeon Gold 6138T @ 2.00GHz
</a></td><td>24,800</td><td>118</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6138T+%40+2.00GHz&amp;id=3703#price">9.04
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6138T+%40+2.00GHz&amp;id=3703#price">$2,742.00*</a></td></tr><tr id="cpu3132" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+6140+%40+2.30GHz&amp;id=3132">Intel Xeon Gold 6140 @ 2.30GHz
</a></td><td>22,733</td><td>153</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6140+%40+2.30GHz&amp;id=3132#price">14.35
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6140+%40+2.30GHz&amp;id=3132#price">$1,584.07</a></td></tr><tr id="cpu3502" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+6143+%40+2.80GHz&amp;id=3502">Intel Xeon Gold 6143 @ 2.80GHz
</a></td><td>24,786</td><td>119</td><td>NA</td><td>NA</td></tr><tr id="cpu3110" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+6144+%40+3.50GHz&amp;id=3110">Intel Xeon Gold 6144 @ 3.50GHz
</a></td><td>18,656</td><td>237</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6144+%40+3.50GHz&amp;id=3110#price">6.52
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6144+%40+3.50GHz&amp;id=3110#price">$2,860.00</a></td></tr><tr id="cpu3205" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+6146+%40+3.20GHz&amp;id=3205">Intel Xeon Gold 6146 @ 3.20GHz
</a></td><td>23,432</td><td>141</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6146+%40+3.20GHz&amp;id=3205#price">7.62
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6146+%40+3.20GHz&amp;id=3205#price">$3,075.00</a></td></tr><tr id="cpu3176" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+6148+%40+2.40GHz&amp;id=3176">Intel Xeon Gold 6148 @ 2.40GHz
</a></td><td>24,133</td><td>126</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6148+%40+2.40GHz&amp;id=3176#price">8.32
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6148+%40+2.40GHz&amp;id=3176#price">$2,902.00</a></td></tr><tr id="cpu3169" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+6152+%40+2.10GHz&amp;id=3169">Intel Xeon Gold 6152 @ 2.10GHz
</a></td><td>22,291</td><td>162</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6152+%40+2.10GHz&amp;id=3169#price">6.51
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6152+%40+2.10GHz&amp;id=3169#price">$3,422.01</a></td></tr><tr id="cpu3127" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+6154+%40+3.00GHz&amp;id=3127">Intel Xeon Gold 6154 @ 3.00GHz
</a></td><td>26,298</td><td>98</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6154+%40+3.00GHz&amp;id=3127#price">7.32
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6154+%40+3.00GHz&amp;id=3127#price">$3,595.00</a></td></tr><tr id="cpu3742" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+6208U+%40+2.90GHz&amp;id=3742">Intel Xeon Gold 6208U @ 2.90GHz
</a></td><td>26,901</td><td>90</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6208U+%40+2.90GHz&amp;id=3742#price">21.45
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6208U+%40+2.90GHz&amp;id=3742#price">$1,254.08</a></td></tr><tr id="cpu3540" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+6210U+%40+2.50GHz&amp;id=3540">Intel Xeon Gold 6210U @ 2.50GHz
</a></td><td>28,915</td><td>78</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6210U+%40+2.50GHz&amp;id=3540#price">21.85
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6210U+%40+2.50GHz&amp;id=3540#price">$1,323.37</a></td></tr><tr id="cpu3608" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+6212U+%40+2.40GHz&amp;id=3608">Intel Xeon Gold 6212U @ 2.40GHz
</a></td><td>27,470</td><td>84</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6212U+%40+2.40GHz&amp;id=3608#price">13.73
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6212U+%40+2.40GHz&amp;id=3608#price">$2,000.00*</a></td></tr><tr id="cpu3682" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+6226+%40+2.70GHz&amp;id=3682">Intel Xeon Gold 6226 @ 2.70GHz
</a></td><td>19,810</td><td>206</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6226+%40+2.70GHz&amp;id=3682#price">11.44
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6226+%40+2.70GHz&amp;id=3682#price">$1,730.99</a></td></tr><tr id="cpu3728" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+6226R+%40+2.90GHz&amp;id=3728">Intel Xeon Gold 6226R @ 2.90GHz
</a></td><td>25,570</td><td>105</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6226R+%40+2.90GHz&amp;id=3728#price">18.70
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6226R+%40+2.90GHz&amp;id=3728#price">$1,367.05</a></td></tr><tr id="cpu3468" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+6230+%40+2.10GHz&amp;id=3468">Intel Xeon Gold 6230 @ 2.10GHz
</a></td><td>25,992</td><td>102</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6230+%40+2.10GHz&amp;id=3468#price">14.44
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6230+%40+2.10GHz&amp;id=3468#price">$1,799.75</a></td></tr><tr id="cpu4070" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+6230R+%40+2.10GHz&amp;id=4070">Intel Xeon Gold 6230R @ 2.10GHz
</a></td><td>32,113</td><td>57</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6230R+%40+2.10GHz&amp;id=4070#price">17.75
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6230R+%40+2.10GHz&amp;id=4070#price">$1,809.00</a></td></tr><tr id="cpu3631" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+6238+%40+2.10GHz&amp;id=3631">Intel Xeon Gold 6238 @ 2.10GHz
</a></td><td>27,617</td><td>83</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6238+%40+2.10GHz&amp;id=3631#price">10.75
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6238+%40+2.10GHz&amp;id=3631#price">$2,570.00</a></td></tr><tr id="cpu3516" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+6242+%40+2.80GHz&amp;id=3516">Intel Xeon Gold 6242 @ 2.80GHz
</a></td><td>26,288</td><td>99</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6242+%40+2.80GHz&amp;id=3516#price">12.22
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6242+%40+2.80GHz&amp;id=3516#price">$2,151.08</a></td></tr><tr id="cpu3861" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+6242R+%40+3.10GHz&amp;id=3861">Intel Xeon Gold 6242R @ 3.10GHz
</a></td><td>35,505</td><td>43</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6242R+%40+3.10GHz&amp;id=3861#price">16.03
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6242R+%40+3.10GHz&amp;id=3861#price">$2,214.36</a></td></tr><tr id="cpu3521" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+6246+%40+3.30GHz&amp;id=3521">Intel Xeon Gold 6246 @ 3.30GHz
</a></td><td>24,446</td><td>123</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6246+%40+3.30GHz&amp;id=3521#price">7.81
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6246+%40+3.30GHz&amp;id=3521#price">$3,128.88</a></td></tr><tr id="cpu3854" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+6246R+%40+3.40GHz&amp;id=3854">Intel Xeon Gold 6246R @ 3.40GHz
</a></td><td>30,145</td><td>71</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6246R+%40+3.40GHz&amp;id=3854#price">9.44
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6246R+%40+3.40GHz&amp;id=3854#price">$3,192.02</a></td></tr><tr id="cpu3517" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+6248+%40+2.50GHz&amp;id=3517">Intel Xeon Gold 6248 @ 2.50GHz
</a></td><td>31,285</td><td>62</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6248+%40+2.50GHz&amp;id=3517#price">12.36
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6248+%40+2.50GHz&amp;id=3517#price">$2,532.01</a></td></tr><tr id="cpu3732" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+6248R+%40+3.00GHz&amp;id=3732">Intel Xeon Gold 6248R @ 3.00GHz
</a></td><td>38,521</td><td>37</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6248R+%40+3.00GHz&amp;id=3732#price">15.28
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6248R+%40+3.00GHz&amp;id=3732#price">$2,520.38</a></td></tr><tr id="cpu3532" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+6252+%40+2.10GHz&amp;id=3532">Intel Xeon Gold 6252 @ 2.10GHz
</a></td><td>32,410</td><td>54</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6252+%40+2.10GHz&amp;id=3532#price">11.40
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6252+%40+2.10GHz&amp;id=3532#price">$2,842.19</a></td></tr><tr id="cpu3482" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+6254+%40+3.10GHz&amp;id=3482">Intel Xeon Gold 6254 @ 3.10GHz
</a></td><td>29,356</td><td>76</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6254+%40+3.10GHz&amp;id=3482#price">8.64
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6254+%40+3.10GHz&amp;id=3482#price">$3,395.95</a></td></tr><tr id="cpu4488" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+6334+%40+3.60GHz&amp;id=4488">Intel Xeon Gold 6334 @ 3.60GHz
</a></td><td>22,160</td><td>164</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6334+%40+3.60GHz&amp;id=4488#price">8.34
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6334+%40+3.60GHz&amp;id=4488#price">$2,658.32*</a></td></tr><tr id="cpu4484" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+6336Y+%40+2.40GHz&amp;id=4484">Intel Xeon Gold 6336Y @ 2.40GHz
</a></td><td>45,517</td><td>28</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6336Y+%40+2.40GHz&amp;id=4484#price">20.45
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6336Y+%40+2.40GHz&amp;id=4484#price">$2,226.11*</a></td></tr><tr id="cpu4485" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+6342+%40+2.80GHz&amp;id=4485">Intel Xeon Gold 6342 @ 2.80GHz
</a></td><td>48,330</td><td>22</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6342+%40+2.80GHz&amp;id=4485#price">15.88
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6342+%40+2.80GHz&amp;id=4485#price">$3,043.52*</a></td></tr><tr id="cpu4494" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Gold+6348+%40+2.60GHz&amp;id=4494">Intel Xeon Gold 6348 @ 2.60GHz
</a></td><td>53,112</td><td>21</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6348+%40+2.60GHz&amp;id=4494#price">16.70
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Gold+6348+%40+2.60GHz&amp;id=4494#price">$3,180.00</a></td></tr><tr id="cpu2044" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+L3110+%40+3.00GHz&amp;id=2044">Intel Xeon L3110 @ 3.00GHz
</a></td><td>1,338</td><td>2265</td><td>NA</td><td>NA</td></tr><tr id="cpu1254" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+L3360+%40+2.83GHz&amp;id=1254">Intel Xeon L3360 @ 2.83GHz
</a></td><td>2,273</td><td>1708</td><td>
<a href="cpu.php?cpu=Intel+Xeon+L3360+%40+2.83GHz&amp;id=1254#price">25.47
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+L3360+%40+2.83GHz&amp;id=1254#price">$89.23*</a></td></tr><tr id="cpu1899" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+L3406+%40+2.27GHz&amp;id=1899">Intel Xeon L3406 @ 2.27GHz
</a></td><td>928</td><td>2623</td><td>
<a href="cpu.php?cpu=Intel+Xeon+L3406+%40+2.27GHz&amp;id=1899#price">3.50
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+L3406+%40+2.27GHz&amp;id=1899#price">$265.19</a></td></tr><tr id="cpu1255" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+L3426+%40+1.87GHz&amp;id=1255">Intel Xeon L3426 @ 1.87GHz
</a></td><td>2,423</td><td>1645</td><td>
<a href="cpu.php?cpu=Intel+Xeon+L3426+%40+1.87GHz&amp;id=1255#price">10.67
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+L3426+%40+1.87GHz&amp;id=1255#price">$227.00</a></td></tr><tr id="cpu1257" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+L5240+%40+3.00GHz&amp;id=1257">Intel Xeon L5240 @ 3.00GHz
</a></td><td>1,337</td><td>2268</td><td>
<a href="cpu.php?cpu=Intel+Xeon+L5240+%40+3.00GHz&amp;id=1257#price">42.57
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+L5240+%40+3.00GHz&amp;id=1257#price">$31.40*</a></td></tr><tr id="cpu2778" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+L5310+%40+1.60GHz&amp;id=2778">Intel Xeon L5310 @ 1.60GHz
</a></td><td>1,385</td><td>2246</td><td>
<a href="cpu.php?cpu=Intel+Xeon+L5310+%40+1.60GHz&amp;id=2778#price">12.31
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+L5310+%40+1.60GHz&amp;id=2778#price">$112.50*</a></td></tr><tr id="cpu1258" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+L5320+%40+1.86GHz&amp;id=1258">Intel Xeon L5320 @ 1.86GHz
</a></td><td>1,118</td><td>2447</td><td>
<a href="cpu.php?cpu=Intel+Xeon+L5320+%40+1.86GHz&amp;id=1258#price">15.97
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+L5320+%40+1.86GHz&amp;id=1258#price">$69.99*</a></td></tr><tr id="cpu1977" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+L5335+%40+2.00GHz&amp;id=1977">Intel Xeon L5335 @ 2.00GHz
</a></td><td>1,678</td><td>2058</td><td>
<a href="cpu.php?cpu=Intel+Xeon+L5335+%40+2.00GHz&amp;id=1977#price">89.29
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+L5335+%40+2.00GHz&amp;id=1977#price">$18.79*</a></td></tr><tr id="cpu2231" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+L5408+%40+2.13GHz&amp;id=2231">Intel Xeon L5408 @ 2.13GHz
</a></td><td>1,761</td><td>1998</td><td>NA</td><td>NA</td></tr><tr id="cpu1706" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+L5410+%40+2.33GHz&amp;id=1706">Intel Xeon L5410 @ 2.33GHz
</a></td><td>1,916</td><td>1913</td><td>
<a href="cpu.php?cpu=Intel+Xeon+L5410+%40+2.33GHz&amp;id=1706#price">19.15
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+L5410+%40+2.33GHz&amp;id=1706#price">$100.08*</a></td></tr><tr id="cpu1259" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+L5420+%40+2.50GHz&amp;id=1259">Intel Xeon L5420 @ 2.50GHz
</a></td><td>2,038</td><td>1841</td><td>
<a href="cpu.php?cpu=Intel+Xeon+L5420+%40+2.50GHz&amp;id=1259#price">74.11
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+L5420+%40+2.50GHz&amp;id=1259#price">$27.50*</a></td></tr><tr id="cpu2170" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+L5430+%40+2.66GHz&amp;id=2170">Intel Xeon L5430 @ 2.66GHz
</a></td><td>2,210</td><td>1751</td><td>
<a href="cpu.php?cpu=Intel+Xeon+L5430+%40+2.66GHz&amp;id=2170#price">13.99
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+L5430+%40+2.66GHz&amp;id=2170#price">$157.95*</a></td></tr><tr id="cpu1260" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+L5520+%40+2.27GHz&amp;id=1260">Intel Xeon L5520 @ 2.27GHz
</a></td><td>2,312</td><td>1689</td><td>
<a href="cpu.php?cpu=Intel+Xeon+L5520+%40+2.27GHz&amp;id=1260#price">23.12
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+L5520+%40+2.27GHz&amp;id=1260#price">$100.00</a></td></tr><tr id="cpu1261" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+L5530+%40+2.40GHz&amp;id=1261">Intel Xeon L5530 @ 2.40GHz
</a></td><td>2,522</td><td>1601</td><td>
<a href="cpu.php?cpu=Intel+Xeon+L5530+%40+2.40GHz&amp;id=1261#price">130.94
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+L5530+%40+2.40GHz&amp;id=1261#price">$19.26*</a></td></tr><tr id="cpu1883" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+L5609+%40+1.87GHz&amp;id=1883">Intel Xeon L5609 @ 1.87GHz
</a></td><td>3,298</td><td>1338</td><td>NA</td><td>NA</td></tr><tr id="cpu2086" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+L5630+%40+2.13GHz&amp;id=2086">Intel Xeon L5630 @ 2.13GHz
</a></td><td>2,836</td><td>1494</td><td>
<a href="cpu.php?cpu=Intel+Xeon+L5630+%40+2.13GHz&amp;id=2086#price">29.86
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+L5630+%40+2.13GHz&amp;id=2086#price">$94.99</a></td></tr><tr id="cpu1262" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+L5638+%40+2.00GHz&amp;id=1262">Intel Xeon L5638 @ 2.00GHz
</a></td><td>3,225</td><td>1366</td><td>
<a href="cpu.php?cpu=Intel+Xeon+L5638+%40+2.00GHz&amp;id=1262#price">46.14
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+L5638+%40+2.00GHz&amp;id=1262#price">$69.90*</a></td></tr><tr id="cpu1983" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+L5639+%40+2.13GHz&amp;id=1983">Intel Xeon L5639 @ 2.13GHz
</a></td><td>4,419</td><td>1117</td><td>NA</td><td>NA</td></tr><tr id="cpu1263" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+L5640+%40+2.27GHz&amp;id=1263">Intel Xeon L5640 @ 2.27GHz
</a></td><td>4,591</td><td>1088</td><td>
<a href="cpu.php?cpu=Intel+Xeon+L5640+%40+2.27GHz&amp;id=1263#price">27.01
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+L5640+%40+2.27GHz&amp;id=1263#price">$170.00</a></td></tr><tr id="cpu2431" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+L7455+%40+2.13GHz&amp;id=2431">Intel Xeon L7455 @ 2.13GHz
</a></td><td>2,494</td><td>1615</td><td>NA</td><td>NA</td></tr><tr id="cpu2524" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+MV+3.20GHz&amp;id=2524">Intel Xeon MV 3.20GHz
</a></td><td>582</td><td>2957</td><td>NA</td><td>NA</td></tr><tr id="cpu3352" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Platinum+8124M+%40+3.00GHz&amp;id=3352">Intel Xeon Platinum 8124M @ 3.00GHz
</a></td><td>25,456</td><td>110</td><td>NA</td><td>NA</td></tr><tr id="cpu3458" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Platinum+8151+%40+3.40GHz&amp;id=3458">Intel Xeon Platinum 8151 @ 3.40GHz
</a></td><td>6,591</td><td>817</td><td>NA</td><td>NA</td></tr><tr id="cpu3085" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Platinum+8160+%40+2.10GHz&amp;id=3085">Intel Xeon Platinum 8160 @ 2.10GHz
</a></td><td>26,485</td><td>95</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Platinum+8160+%40+2.10GHz&amp;id=3085#price">7.02
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Platinum+8160+%40+2.10GHz&amp;id=3085#price">$3,774.00</a></td></tr><tr id="cpu3389" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Platinum+8167M+%40+2.00GHz&amp;id=3389">Intel Xeon Platinum 8167M @ 2.00GHz
</a></td><td>25,396</td><td>112</td><td>NA</td><td>NA</td></tr><tr id="cpu3111" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Platinum+8168+%40+2.70GHz&amp;id=3111">Intel Xeon Platinum 8168 @ 2.70GHz
</a></td><td>33,503</td><td>47</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Platinum+8168+%40+2.70GHz&amp;id=3111#price">4.24
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Platinum+8168+%40+2.70GHz&amp;id=3111#price">$7,894.95</a></td></tr><tr id="cpu3182" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Platinum+8173M+%40+2.00GHz&amp;id=3182">Intel Xeon Platinum 8173M @ 2.00GHz
</a></td><td>27,377</td><td>86</td><td>NA</td><td>NA</td></tr><tr id="cpu3311" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Platinum+8175M+%40+2.50GHz&amp;id=3311">Intel Xeon Platinum 8175M @ 2.50GHz
</a></td><td>26,659</td><td>92</td><td>NA</td><td>NA</td></tr><tr id="cpu3473" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Platinum+8176+%40+2.10GHz&amp;id=3473">Intel Xeon Platinum 8176 @ 2.10GHz
</a></td><td>23,179</td><td>148</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Platinum+8176+%40+2.10GHz&amp;id=3473#price">2.66
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Platinum+8176+%40+2.10GHz&amp;id=3473#price">$8,725.00*</a></td></tr><tr id="cpu3671" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Platinum+8259CL+%40+2.50GHz&amp;id=3671">Intel Xeon Platinum 8259CL @ 2.50GHz
</a></td><td>31,500</td><td>61</td><td>NA</td><td>NA</td></tr><tr id="cpu3858" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Platinum+8260M+%40+2.30GHz&amp;id=3858">Intel Xeon Platinum 8260M @ 2.30GHz
</a></td><td>33,970</td><td>44</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Platinum+8260M+%40+2.30GHz&amp;id=3858#price">4.41
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Platinum+8260M+%40+2.30GHz&amp;id=3858#price">$7,705.00*</a></td></tr><tr id="cpu3472" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Platinum+8268+%40+2.90GHz&amp;id=3472">Intel Xeon Platinum 8268 @ 2.90GHz
</a></td><td>30,103</td><td>73</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Platinum+8268+%40+2.90GHz&amp;id=3472#price">5.01
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Platinum+8268+%40+2.90GHz&amp;id=3472#price">$6,005.98*</a></td></tr><tr id="cpu3662" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Platinum+8280+%40+2.70GHz&amp;id=3662">Intel Xeon Platinum 8280 @ 2.70GHz
</a></td><td>37,575</td><td>38</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Platinum+8280+%40+2.70GHz&amp;id=3662#price">4.94
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Platinum+8280+%40+2.70GHz&amp;id=3662#price">$7,610.00</a></td></tr><tr id="cpu4493" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Platinum+8358+%40+2.60GHz&amp;id=4493">Intel Xeon Platinum 8358 @ 2.60GHz
</a></td><td>57,007</td><td>17</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Platinum+8358+%40+2.60GHz&amp;id=4493#price">14.43
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Platinum+8358+%40+2.60GHz&amp;id=4493#price">$3,950.00*</a></td></tr><tr id="cpu4483" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Platinum+8380+%40+2.30GHz&amp;id=4483">Intel Xeon Platinum 8380 @ 2.30GHz
</a></td><td>62,317</td><td>13</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Platinum+8380+%40+2.30GHz&amp;id=4483#price">7.69
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Platinum+8380+%40+2.30GHz&amp;id=4483#price">$8,099.00*</a></td></tr><tr id="cpu3167" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Silver+4108+%40+1.80GHz&amp;id=3167">Intel Xeon Silver 4108 @ 1.80GHz
</a></td><td>9,302</td><td>564</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Silver+4108+%40+1.80GHz&amp;id=3167#price">20.67
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Silver+4108+%40+1.80GHz&amp;id=3167#price">$450.00</a></td></tr><tr id="cpu3228" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Silver+4109T+%40+2.00GHz&amp;id=3228">Intel Xeon Silver 4109T @ 2.00GHz
</a></td><td>10,348</td><td>510</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Silver+4109T+%40+2.00GHz&amp;id=3228#price">17.13
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Silver+4109T+%40+2.00GHz&amp;id=3228#price">$604.15</a></td></tr><tr id="cpu3106" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Silver+4110+%40+2.10GHz&amp;id=3106">Intel Xeon Silver 4110 @ 2.10GHz
</a></td><td>10,160</td><td>518</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Silver+4110+%40+2.10GHz&amp;id=3106#price">24.19
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Silver+4110+%40+2.10GHz&amp;id=3106#price">$420.00</a></td></tr><tr id="cpu3199" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Silver+4112+%40+2.60GHz&amp;id=3199">Intel Xeon Silver 4112 @ 2.60GHz
</a></td><td>6,420</td><td>840</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Silver+4112+%40+2.60GHz&amp;id=3199#price">10.79
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Silver+4112+%40+2.60GHz&amp;id=3199#price">$595.00</a></td></tr><tr id="cpu3095" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Silver+4114+%40+2.20GHz&amp;id=3095">Intel Xeon Silver 4114 @ 2.20GHz
</a></td><td>12,581</td><td>414</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Silver+4114+%40+2.20GHz&amp;id=3095#price">21.00
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Silver+4114+%40+2.20GHz&amp;id=3095#price">$599.00</a></td></tr><tr id="cpu3179" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Silver+4116+%40+2.10GHz&amp;id=3179">Intel Xeon Silver 4116 @ 2.10GHz
</a></td><td>14,785</td><td>333</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Silver+4116+%40+2.10GHz&amp;id=3179#price">16.52
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Silver+4116+%40+2.10GHz&amp;id=3179#price">$895.00</a></td></tr><tr id="cpu4154" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Silver+4116T+%40+2.10GHz&amp;id=4154">Intel Xeon Silver 4116T @ 2.10GHz
</a></td><td>15,187</td><td>318</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Silver+4116T+%40+2.10GHz&amp;id=4154#price">13.66
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Silver+4116T+%40+2.10GHz&amp;id=4154#price">$1,112.00*</a></td></tr><tr id="cpu3189" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Silver+4123+%40+3.00GHz&amp;id=3189">Intel Xeon Silver 4123 @ 3.00GHz
</a></td><td>14,405</td><td>352</td><td>NA</td><td>NA</td></tr><tr id="cpu3507" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Silver+4208+%40+2.10GHz&amp;id=3507">Intel Xeon Silver 4208 @ 2.10GHz
</a></td><td>11,163</td><td>470</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Silver+4208+%40+2.10GHz&amp;id=3507#price">22.49
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Silver+4208+%40+2.10GHz&amp;id=3507#price">$496.31</a></td></tr><tr id="cpu3524" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Silver+4210+%40+2.20GHz&amp;id=3524">Intel Xeon Silver 4210 @ 2.20GHz
</a></td><td>14,304</td><td>354</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Silver+4210+%40+2.20GHz&amp;id=3524#price">26.27
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Silver+4210+%40+2.20GHz&amp;id=3524#price">$544.51</a></td></tr><tr id="cpu3752" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Silver+4210R+%40+2.40GHz&amp;id=3752">Intel Xeon Silver 4210R @ 2.40GHz
</a></td><td>14,983</td><td>324</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Silver+4210R+%40+2.40GHz&amp;id=3752#price">25.48
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Silver+4210R+%40+2.40GHz&amp;id=3752#price">$587.98</a></td></tr><tr id="cpu3535" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Silver+4214+%40+2.20GHz&amp;id=3535">Intel Xeon Silver 4214 @ 2.20GHz
</a></td><td>16,140</td><td>295</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Silver+4214+%40+2.20GHz&amp;id=3535#price">23.36
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Silver+4214+%40+2.20GHz&amp;id=3535#price">$690.99</a></td></tr><tr id="cpu3711" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Silver+4214R+%40+2.40GHz&amp;id=3711">Intel Xeon Silver 4214R @ 2.40GHz
</a></td><td>18,857</td><td>232</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Silver+4214R+%40+2.40GHz&amp;id=3711#price">28.15
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Silver+4214R+%40+2.40GHz&amp;id=3711#price">$670.00</a></td></tr><tr id="cpu3764" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Silver+4214Y+%40+2.20GHz&amp;id=3764">Intel Xeon Silver 4214Y @ 2.20GHz
</a></td><td>15,248</td><td>317</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Silver+4214Y+%40+2.20GHz&amp;id=3764#price">19.85
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Silver+4214Y+%40+2.20GHz&amp;id=3764#price">$768.00*</a></td></tr><tr id="cpu3476" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Silver+4215+%40+2.50GHz&amp;id=3476">Intel Xeon Silver 4215 @ 2.50GHz
</a></td><td>14,439</td><td>346</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Silver+4215+%40+2.50GHz&amp;id=3476#price">24.35
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Silver+4215+%40+2.50GHz&amp;id=3476#price">$592.95</a></td></tr><tr id="cpu3533" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Silver+4216+%40+2.10GHz&amp;id=3533">Intel Xeon Silver 4216 @ 2.10GHz
</a></td><td>18,561</td><td>238</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Silver+4216+%40+2.10GHz&amp;id=3533#price">20.99
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Silver+4216+%40+2.10GHz&amp;id=3533#price">$884.27</a></td></tr><tr id="cpu4322" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Silver+4310+%40+2.10GHz&amp;id=4322">Intel Xeon Silver 4310 @ 2.10GHz
</a></td><td>24,113</td><td>128</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Silver+4310+%40+2.10GHz&amp;id=4322#price">44.82
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Silver+4310+%40+2.10GHz&amp;id=4322#price">$537.99</a></td></tr><tr id="cpu4489" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Silver+4314+%40+2.40GHz&amp;id=4489">Intel Xeon Silver 4314 @ 2.40GHz
</a></td><td>30,677</td><td>66</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Silver+4314+%40+2.40GHz&amp;id=4489#price">41.40
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Silver+4314+%40+2.40GHz&amp;id=4489#price">$740.99</a></td></tr><tr id="cpu4481" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+Silver+4316+%40+2.30GHz&amp;id=4481">Intel Xeon Silver 4316 @ 2.30GHz
</a></td><td>37,264</td><td>39</td><td>
<a href="cpu.php?cpu=Intel+Xeon+Silver+4316+%40+2.30GHz&amp;id=4481#price">32.45
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+Silver+4316+%40+2.30GHz&amp;id=4481#price">$1,148.26</a></td></tr><tr id="cpu1264" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W3503+%40+2.40GHz&amp;id=1264">Intel Xeon W3503 @ 2.40GHz
</a></td><td>1,052</td><td>2504</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W3503+%40+2.40GHz&amp;id=1264#price">105.35
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W3503+%40+2.40GHz&amp;id=1264#price">$9.99*</a></td></tr><tr id="cpu1265" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W3505+%40+2.53GHz&amp;id=1265">Intel Xeon W3505 @ 2.53GHz
</a></td><td>1,130</td><td>2437</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W3505+%40+2.53GHz&amp;id=1265#price">76.06
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W3505+%40+2.53GHz&amp;id=1265#price">$14.86*</a></td></tr><tr id="cpu1266" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W3520+%40+2.67GHz&amp;id=1266">Intel Xeon W3520 @ 2.67GHz
</a></td><td>2,746</td><td>1529</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W3520+%40+2.67GHz&amp;id=1266#price">146.46
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W3520+%40+2.67GHz&amp;id=1266#price">$18.75*</a></td></tr><tr id="cpu1267" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W3530+%40+2.80GHz&amp;id=1267">Intel Xeon W3530 @ 2.80GHz
</a></td><td>2,983</td><td>1439</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W3530+%40+2.80GHz&amp;id=1267#price">165.84
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W3530+%40+2.80GHz&amp;id=1267#price">$17.99*</a></td></tr><tr id="cpu1268" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W3540+%40+2.93GHz&amp;id=1268">Intel Xeon W3540 @ 2.93GHz
</a></td><td>2,890</td><td>1473</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W3540+%40+2.93GHz&amp;id=1268#price">5.65
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W3540+%40+2.93GHz&amp;id=1268#price">$511.44</a></td></tr><tr id="cpu1269" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W3550+%40+3.07GHz&amp;id=1269">Intel Xeon W3550 @ 3.07GHz
</a></td><td>3,168</td><td>1379</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W3550+%40+3.07GHz&amp;id=1269#price">63.43
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W3550+%40+3.07GHz&amp;id=1269#price">$49.95*</a></td></tr><tr id="cpu1270" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W3565+%40+3.20GHz&amp;id=1270">Intel Xeon W3565 @ 3.20GHz
</a></td><td>3,300</td><td>1336</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W3565+%40+3.20GHz&amp;id=1270#price">55.05
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W3565+%40+3.20GHz&amp;id=1270#price">$59.95*</a></td></tr><tr id="cpu1271" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W3570+%40+3.20GHz&amp;id=1271">Intel Xeon W3570 @ 3.20GHz
</a></td><td>3,354</td><td>1322</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W3570+%40+3.20GHz&amp;id=1271#price">7.14
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W3570+%40+3.20GHz&amp;id=1271#price">$469.95*</a></td></tr><tr id="cpu1272" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W3580+%40+3.33GHz&amp;id=1272">Intel Xeon W3580 @ 3.33GHz
</a></td><td>3,471</td><td>1297</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W3580+%40+3.33GHz&amp;id=1272#price">16.18
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W3580+%40+3.33GHz&amp;id=1272#price">$214.50*</a></td></tr><tr id="cpu1273" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W3670+%40+3.20GHz&amp;id=1273">Intel Xeon W3670 @ 3.20GHz
</a></td><td>6,484</td><td>830</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W3670+%40+3.20GHz&amp;id=1273#price">21.97
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W3670+%40+3.20GHz&amp;id=1273#price">$295.19</a></td></tr><tr id="cpu1274" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W3680+%40+3.33GHz&amp;id=1274">Intel Xeon W3680 @ 3.33GHz
</a></td><td>6,776</td><td>797</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W3680+%40+3.33GHz&amp;id=1274#price">141.53
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W3680+%40+3.33GHz&amp;id=1274#price">$47.88</a></td></tr><tr id="cpu1275" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W3690+%40+3.47GHz&amp;id=1275">Intel Xeon W3690 @ 3.47GHz
</a></td><td>7,158</td><td>744</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W3690+%40+3.47GHz&amp;id=1275#price">38.90
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W3690+%40+3.47GHz&amp;id=1275#price">$184.04</a></td></tr><tr id="cpu1276" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W5580+%40+3.20GHz&amp;id=1276">Intel Xeon W5580 @ 3.20GHz
</a></td><td>3,386</td><td>1316</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W5580+%40+3.20GHz&amp;id=1276#price">10.42
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W5580+%40+3.20GHz&amp;id=1276#price">$324.97*</a></td></tr><tr id="cpu1277" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W5590+%40+3.33GHz&amp;id=1277">Intel Xeon W5590 @ 3.33GHz
</a></td><td>3,234</td><td>1364</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W5590+%40+3.33GHz&amp;id=1277#price">2.30
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W5590+%40+3.33GHz&amp;id=1277#price">$1,406.34</a></td></tr><tr id="cpu3827" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-1250+%40+3.30GHz&amp;id=3827">Intel Xeon W-1250 @ 3.30GHz
</a></td><td>13,919</td><td>373</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-1250+%40+3.30GHz&amp;id=3827#price">44.56
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-1250+%40+3.30GHz&amp;id=3827#price">$312.39*</a></td></tr><tr id="cpu4362" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-1250P+%40+4.10GHz&amp;id=4362">Intel Xeon W-1250P @ 4.10GHz
</a></td><td>14,632</td><td>339</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-1250P+%40+4.10GHz&amp;id=4362#price">39.08
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-1250P+%40+4.10GHz&amp;id=4362#price">$374.40</a></td></tr><tr id="cpu3812" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-1270+%40+3.40GHz&amp;id=3812">Intel Xeon W-1270 @ 3.40GHz
</a></td><td>18,093</td><td>248</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-1270+%40+3.40GHz&amp;id=3812#price">49.98
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-1270+%40+3.40GHz&amp;id=3812#price">$362.00*</a></td></tr><tr id="cpu3839" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-1270P+%40+3.80GHz&amp;id=3839">Intel Xeon W-1270P @ 3.80GHz
</a></td><td>19,347</td><td>221</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-1270P+%40+3.80GHz&amp;id=3839#price">45.20
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-1270P+%40+3.80GHz&amp;id=3839#price">$428.00*</a></td></tr><tr id="cpu3815" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-1290+%40+3.20GHz&amp;id=3815">Intel Xeon W-1290 @ 3.20GHz
</a></td><td>21,674</td><td>174</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-1290+%40+3.20GHz&amp;id=3815#price">43.88
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-1290+%40+3.20GHz&amp;id=3815#price">$494.00*</a></td></tr><tr id="cpu4276" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-1290E+%40+3.50GHz&amp;id=4276">Intel Xeon W-1290E @ 3.50GHz
</a></td><td>22,138</td><td>165</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-1290E+%40+3.50GHz&amp;id=4276#price">44.28
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-1290E+%40+3.50GHz&amp;id=4276#price">$500.00*</a></td></tr><tr id="cpu3831" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-1290P+%40+3.70GHz&amp;id=3831">Intel Xeon W-1290P @ 3.70GHz
</a></td><td>23,476</td><td>139</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-1290P+%40+3.70GHz&amp;id=3831#price">23.48
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-1290P+%40+3.70GHz&amp;id=3831#price">$999.99*</a></td></tr><tr id="cpu3908" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-1290T+%40+1.90GHz&amp;id=3908">Intel Xeon W-1290T @ 1.90GHz
</a></td><td>18,409</td><td>239</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-1290T+%40+1.90GHz&amp;id=3908#price">37.27
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-1290T+%40+1.90GHz&amp;id=3908#price">$494.00*</a></td></tr><tr id="cpu4425" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-1350+%40+3.30GHz&amp;id=4425">Intel Xeon W-1350 @ 3.30GHz
</a></td><td>19,154</td><td>226</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-1350+%40+3.30GHz&amp;id=4425#price">75.11
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-1350+%40+3.30GHz&amp;id=4425#price">$255.00*</a></td></tr><tr id="cpu4377" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-1370P+%40+3.60GHz&amp;id=4377">Intel Xeon W-1370P @ 3.60GHz
</a></td><td>25,324</td><td>114</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-1370P+%40+3.60GHz&amp;id=4377#price">59.17
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-1370P+%40+3.60GHz&amp;id=4377#price">$428.00*</a></td></tr><tr id="cpu3276" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-2102+%40+2.90GHz&amp;id=3276">Intel Xeon W-2102 @ 2.90GHz
</a></td><td>5,153</td><td>1007</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-2102+%40+2.90GHz&amp;id=3276#price">17.95
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-2102+%40+2.90GHz&amp;id=3276#price">$286.99*</a></td></tr><tr id="cpu3343" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-2104+%40+3.20GHz&amp;id=3343">Intel Xeon W-2104 @ 3.20GHz
</a></td><td>6,202</td><td>869</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-2104+%40+3.20GHz&amp;id=3343#price">24.32
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-2104+%40+3.20GHz&amp;id=3343#price">$255.00*</a></td></tr><tr id="cpu3136" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-2123+%40+3.60GHz&amp;id=3136">Intel Xeon W-2123 @ 3.60GHz
</a></td><td>8,610</td><td>608</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-2123+%40+3.60GHz&amp;id=3136#price">14.16
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-2123+%40+3.60GHz&amp;id=3136#price">$608.00*</a></td></tr><tr id="cpu3146" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-2125+%40+4.00GHz&amp;id=3146">Intel Xeon W-2125 @ 4.00GHz
</a></td><td>10,208</td><td>517</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-2125+%40+4.00GHz&amp;id=3146#price">10.22
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-2125+%40+4.00GHz&amp;id=3146#price">$998.95*</a></td></tr><tr id="cpu3084" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-2133+%40+3.60GHz&amp;id=3084">Intel Xeon W-2133 @ 3.60GHz
</a></td><td>12,217</td><td>426</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-2133+%40+3.60GHz&amp;id=3084#price">19.80
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-2133+%40+3.60GHz&amp;id=3084#price">$617.00*</a></td></tr><tr id="cpu3121" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-2135+%40+3.70GHz&amp;id=3121">Intel Xeon W-2135 @ 3.70GHz
</a></td><td>14,136</td><td>360</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-2135+%40+3.70GHz&amp;id=3121#price">14.03
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-2135+%40+3.70GHz&amp;id=3121#price">$1,007.70*</a></td></tr><tr id="cpu3172" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-2140B+%40+3.20GHz&amp;id=3172">Intel Xeon W-2140B @ 3.20GHz
</a></td><td>17,306</td><td>267</td><td>NA</td><td>NA</td></tr><tr id="cpu3156" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-2145+%40+3.70GHz&amp;id=3156">Intel Xeon W-2145 @ 3.70GHz
</a></td><td>18,248</td><td>244</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-2145+%40+3.70GHz&amp;id=3156#price">14.90
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-2145+%40+3.70GHz&amp;id=3156#price">$1,224.67*</a></td></tr><tr id="cpu3162" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-2150B+%40+3.00GHz&amp;id=3162">Intel Xeon W-2150B @ 3.00GHz
</a></td><td>19,977</td><td>203</td><td>NA</td><td>NA</td></tr><tr id="cpu3178" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-2155+%40+3.30GHz&amp;id=3178">Intel Xeon W-2155 @ 3.30GHz
</a></td><td>21,137</td><td>185</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-2155+%40+3.30GHz&amp;id=3178#price">13.81
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-2155+%40+3.30GHz&amp;id=3178#price">$1,530.39*</a></td></tr><tr id="cpu3324" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-2170B+%40+2.50GHz&amp;id=3324">Intel Xeon W-2170B @ 2.50GHz
</a></td><td>23,300</td><td>145</td><td>NA</td><td>NA</td></tr><tr id="cpu3409" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-2175+%40+2.50GHz&amp;id=3409">Intel Xeon W-2175 @ 2.50GHz
</a></td><td>23,043</td><td>149</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-2175+%40+2.50GHz&amp;id=3409#price">58.34
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-2175+%40+2.50GHz&amp;id=3409#price">$395.00</a></td></tr><tr id="cpu4420" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-2191B+%40+2.30GHz&amp;id=4420">Intel Xeon W-2191B @ 2.30GHz
</a></td><td>28,656</td><td>79</td><td>NA</td><td>NA</td></tr><tr id="cpu3149" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-2195+%40+2.30GHz&amp;id=3149">Intel Xeon W-2195 @ 2.30GHz
</a></td><td>27,325</td><td>88</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-2195+%40+2.30GHz&amp;id=3149#price">13.77
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-2195+%40+2.30GHz&amp;id=3149#price">$1,983.82*</a></td></tr><tr id="cpu3692" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-2223+%40+3.60GHz&amp;id=3692">Intel Xeon W-2223 @ 3.60GHz
</a></td><td>8,669</td><td>604</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-2223+%40+3.60GHz&amp;id=3692#price">25.27
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-2223+%40+3.60GHz&amp;id=3692#price">$342.99</a></td></tr><tr id="cpu3678" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-2225+%40+4.10GHz&amp;id=3678">Intel Xeon W-2225 @ 4.10GHz
</a></td><td>11,226</td><td>468</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-2225+%40+4.10GHz&amp;id=3678#price">21.93
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-2225+%40+4.10GHz&amp;id=3678#price">$512.00*</a></td></tr><tr id="cpu3821" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-2235+%40+3.80GHz&amp;id=3821">Intel Xeon W-2235 @ 3.80GHz
</a></td><td>14,426</td><td>348</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-2235+%40+3.80GHz&amp;id=3821#price">22.28
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-2235+%40+3.80GHz&amp;id=3821#price">$647.40*</a></td></tr><tr id="cpu3691" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-2245+%40+3.90GHz&amp;id=3691">Intel Xeon W-2245 @ 3.90GHz
</a></td><td>19,457</td><td>218</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-2245+%40+3.90GHz&amp;id=3691#price">17.92
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-2245+%40+3.90GHz&amp;id=3691#price">$1,086.00*</a></td></tr><tr id="cpu3689" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-2255+%40+3.70GHz&amp;id=3689">Intel Xeon W-2255 @ 3.70GHz
</a></td><td>22,732</td><td>154</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-2255+%40+3.70GHz&amp;id=3689#price">29.22
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-2255+%40+3.70GHz&amp;id=3689#price">$778.00*</a></td></tr><tr id="cpu3817" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-2265+%40+3.50GHz&amp;id=3817">Intel Xeon W-2265 @ 3.50GHz
</a></td><td>26,048</td><td>100</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-2265+%40+3.50GHz&amp;id=3817#price">27.59
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-2265+%40+3.50GHz&amp;id=3817#price">$944.00*</a></td></tr><tr id="cpu3891" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-2275+%40+3.30GHz&amp;id=3891">Intel Xeon W-2275 @ 3.30GHz
</a></td><td>27,348</td><td>87</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-2275+%40+3.30GHz&amp;id=3891#price">24.59
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-2275+%40+3.30GHz&amp;id=3891#price">$1,112.00*</a></td></tr><tr id="cpu3701" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-2295+%40+3.00GHz&amp;id=3701">Intel Xeon W-2295 @ 3.00GHz
</a></td><td>31,594</td><td>58</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-2295+%40+3.00GHz&amp;id=3701#price">23.70
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-2295+%40+3.00GHz&amp;id=3701#price">$1,333.00*</a></td></tr><tr id="cpu3420" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-3175X+%40+3.10GHz&amp;id=3420">Intel Xeon W-3175X @ 3.10GHz
</a></td><td>36,360</td><td>41</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-3175X+%40+3.10GHz&amp;id=3420#price">11.69
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-3175X+%40+3.10GHz&amp;id=3420#price">$3,110.99</a></td></tr><tr id="cpu3823" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-3223+%40+3.50GHz&amp;id=3823">Intel Xeon W-3223 @ 3.50GHz
</a></td><td>16,979</td><td>278</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-3223+%40+3.50GHz&amp;id=3823#price">20.87
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-3223+%40+3.50GHz&amp;id=3823#price">$813.38*</a></td></tr><tr id="cpu3601" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-3235+%40+3.30GHz&amp;id=3601">Intel Xeon W-3235 @ 3.30GHz
</a></td><td>25,469</td><td>109</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-3235+%40+3.30GHz&amp;id=3601#price">16.55
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-3235+%40+3.30GHz&amp;id=3601#price">$1,539.30*</a></td></tr><tr id="cpu3850" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-3245+%40+3.20GHz&amp;id=3850">Intel Xeon W-3245 @ 3.20GHz
</a></td><td>30,246</td><td>69</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-3245+%40+3.20GHz&amp;id=3850#price">14.14
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-3245+%40+3.20GHz&amp;id=3850#price">$2,138.70*</a></td></tr><tr id="cpu3541" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-3265+%40+2.70GHz&amp;id=3541">Intel Xeon W-3265 @ 2.70GHz
</a></td><td>30,105</td><td>72</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-3265+%40+2.70GHz&amp;id=3541#price">6.61
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-3265+%40+2.70GHz&amp;id=3541#price">$4,551.37*</a></td></tr><tr id="cpu3642" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-3275M+%40+2.50GHz&amp;id=3642">Intel Xeon W-3275M @ 2.50GHz
</a></td><td>41,607</td><td>31</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-3275M+%40+2.50GHz&amp;id=3642#price">5.58
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-3275M+%40+2.50GHz&amp;id=3642#price">$7,453.00*</a></td></tr><tr id="cpu3818" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-10855M+%40+2.80GHz&amp;id=3818">Intel Xeon W-10855M @ 2.80GHz
</a></td><td>12,943</td><td>405</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-10855M+%40+2.80GHz&amp;id=3818#price">28.76
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-10855M+%40+2.80GHz&amp;id=3818#price">$450.00*</a></td></tr><tr id="cpu3762" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-10885M+%40+2.40GHz&amp;id=3762">Intel Xeon W-10885M @ 2.40GHz
</a></td><td>16,133</td><td>296</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-10885M+%40+2.40GHz&amp;id=3762#price">25.90
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-10885M+%40+2.40GHz&amp;id=3762#price">$623.00*</a></td></tr><tr id="cpu4417" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-11855M+%40+3.20GHz&amp;id=4417">Intel Xeon W-11855M @ 3.20GHz
</a></td><td>18,839</td><td>233</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-11855M+%40+3.20GHz&amp;id=4417#price">41.86
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-11855M+%40+3.20GHz&amp;id=4417#price">$450.00*</a></td></tr><tr id="cpu4419" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+W-11955M+%40+2.60GHz&amp;id=4419">Intel Xeon W-11955M @ 2.60GHz
</a></td><td>24,410</td><td>124</td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-11955M+%40+2.60GHz&amp;id=4419#price">39.18
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+W-11955M+%40+2.60GHz&amp;id=4419#price">$623.00*</a></td></tr><tr id="cpu1278" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X3210+%40+2.13GHz&amp;id=1278">Intel Xeon X3210 @ 2.13GHz
</a></td><td>1,599</td><td>2121</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X3210+%40+2.13GHz&amp;id=1278#price">8.61
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X3210+%40+2.13GHz&amp;id=1278#price">$185.71*</a></td></tr><tr id="cpu1279" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X3220+%40+2.40GHz&amp;id=1279">Intel Xeon X3220 @ 2.40GHz
</a></td><td>1,819</td><td>1971</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X3220+%40+2.40GHz&amp;id=1279#price">27.50
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X3220+%40+2.40GHz&amp;id=1279#price">$66.14*</a></td></tr><tr id="cpu1280" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X3230+%40+2.66GHz&amp;id=1280">Intel Xeon X3230 @ 2.66GHz
</a></td><td>2,060</td><td>1827</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X3230+%40+2.66GHz&amp;id=1280#price">5.89
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X3230+%40+2.66GHz&amp;id=1280#price">$349.95*</a></td></tr><tr id="cpu1281" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X3320+%40+2.50GHz&amp;id=1281">Intel Xeon X3320 @ 2.50GHz
</a></td><td>1,986</td><td>1876</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X3320+%40+2.50GHz&amp;id=1281#price">8.65
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X3320+%40+2.50GHz&amp;id=1281#price">$229.50*</a></td></tr><tr id="cpu2280" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X3323+%40+2.50GHz&amp;id=2280">Intel Xeon X3323 @ 2.50GHz
</a></td><td>1,837</td><td>1963</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X3323+%40+2.50GHz&amp;id=2280#price">94.86
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X3323+%40+2.50GHz&amp;id=2280#price">$19.36*</a></td></tr><tr id="cpu1282" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X3330+%40+2.66GHz&amp;id=1282">Intel Xeon X3330 @ 2.66GHz
</a></td><td>1,928</td><td>1903</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X3330+%40+2.66GHz&amp;id=1282#price">9.18
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X3330+%40+2.66GHz&amp;id=1282#price">$210.00*</a></td></tr><tr id="cpu1283" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X3350+%40+2.66GHz&amp;id=1283">Intel Xeon X3350 @ 2.66GHz
</a></td><td>2,158</td><td>1780</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X3350+%40+2.66GHz&amp;id=1283#price">35.97
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X3350+%40+2.66GHz&amp;id=1283#price">$59.99*</a></td></tr><tr id="cpu2211" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X3353+%40+2.66GHz&amp;id=2211">Intel Xeon X3353 @ 2.66GHz
</a></td><td>2,229</td><td>1738</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X3353+%40+2.66GHz&amp;id=2211#price">30.33
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X3353+%40+2.66GHz&amp;id=2211#price">$73.50*</a></td></tr><tr id="cpu1284" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X3360+%40+2.83GHz&amp;id=1284">Intel Xeon X3360 @ 2.83GHz
</a></td><td>2,253</td><td>1722</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X3360+%40+2.83GHz&amp;id=1284#price">56.33
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X3360+%40+2.83GHz&amp;id=1284#price">$39.99*</a></td></tr><tr id="cpu2068" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X3363+%40+2.83GHz&amp;id=2068">Intel Xeon X3363 @ 2.83GHz
</a></td><td>2,255</td><td>1720</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X3363+%40+2.83GHz&amp;id=2068#price">25.74
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X3363+%40+2.83GHz&amp;id=2068#price">$87.60*</a></td></tr><tr id="cpu1285" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X3370+%40+3.00GHz&amp;id=1285">Intel Xeon X3370 @ 3.00GHz
</a></td><td>2,446</td><td>1636</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X3370+%40+3.00GHz&amp;id=1285#price">61.16
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X3370+%40+3.00GHz&amp;id=1285#price">$40.00*</a></td></tr><tr id="cpu1286" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X3380+%40+3.16GHz&amp;id=1286">Intel Xeon X3380 @ 3.16GHz
</a></td><td>2,308</td><td>1693</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X3380+%40+3.16GHz&amp;id=1286#price">4.53
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X3380+%40+3.16GHz&amp;id=1286#price">$509.95*</a></td></tr><tr id="cpu1287" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X3430+%40+2.40GHz&amp;id=1287">Intel Xeon X3430 @ 2.40GHz
</a></td><td>2,233</td><td>1734</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X3430+%40+2.40GHz&amp;id=1287#price">20.21
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X3430+%40+2.40GHz&amp;id=1287#price">$110.47</a></td></tr><tr id="cpu1288" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X3440+%40+2.53GHz&amp;id=1288">Intel Xeon X3440 @ 2.53GHz
</a></td><td>2,630</td><td>1568</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X3440+%40+2.53GHz&amp;id=1288#price">52.60
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X3440+%40+2.53GHz&amp;id=1288#price">$50.00</a></td></tr><tr id="cpu1289" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X3450+%40+2.67GHz&amp;id=1289">Intel Xeon X3450 @ 2.67GHz
</a></td><td>2,792</td><td>1509</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X3450+%40+2.67GHz&amp;id=1289#price">20.82
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X3450+%40+2.67GHz&amp;id=1289#price">$134.08</a></td></tr><tr id="cpu1290" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X3460+%40+2.80GHz&amp;id=1290">Intel Xeon X3460 @ 2.80GHz
</a></td><td>2,705</td><td>1543</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X3460+%40+2.80GHz&amp;id=1290#price">20.17
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X3460+%40+2.80GHz&amp;id=1290#price">$134.08</a></td></tr><tr id="cpu1291" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X3470+%40+2.93GHz&amp;id=1291">Intel Xeon X3470 @ 2.93GHz
</a></td><td>3,155</td><td>1386</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X3470+%40+2.93GHz&amp;id=1291#price">31.18
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X3470+%40+2.93GHz&amp;id=1291#price">$101.19</a></td></tr><tr id="cpu1708" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X3480+%40+3.07GHz&amp;id=1708">Intel Xeon X3480 @ 3.07GHz
</a></td><td>3,251</td><td>1355</td><td>NA</td><td>NA</td></tr><tr id="cpu1292" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X5260+%40+3.33GHz&amp;id=1292">Intel Xeon X5260 @ 3.33GHz
</a></td><td>1,238</td><td>2351</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5260+%40+3.33GHz&amp;id=1292#price">95.20
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5260+%40+3.33GHz&amp;id=1292#price">$13.00*</a></td></tr><tr id="cpu2358" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X5270+%40+3.50GHz&amp;id=2358">Intel Xeon X5270 @ 3.50GHz
</a></td><td>1,524</td><td>2162</td><td>NA</td><td>NA</td></tr><tr id="cpu1293" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X5272+%40+3.40GHz&amp;id=1293">Intel Xeon X5272 @ 3.40GHz
</a></td><td>1,451</td><td>2202</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5272+%40+3.40GHz&amp;id=1293#price">10.36
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5272+%40+3.40GHz&amp;id=1293#price">$140.00*</a></td></tr><tr id="cpu1294" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X5355+%40+2.66GHz&amp;id=1294">Intel Xeon X5355 @ 2.66GHz
</a></td><td>1,979</td><td>1879</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5355+%40+2.66GHz&amp;id=1294#price">6.60
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5355+%40+2.66GHz&amp;id=1294#price">$299.95</a></td></tr><tr id="cpu1295" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X5365+%40+3.00GHz&amp;id=1295">Intel Xeon X5365 @ 3.00GHz
</a></td><td>2,198</td><td>1757</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5365+%40+3.00GHz&amp;id=1295#price">34.89
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5365+%40+3.00GHz&amp;id=1295#price">$62.99*</a></td></tr><tr id="cpu1296" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X5450+%40+3.00GHz&amp;id=1296">Intel Xeon X5450 @ 3.00GHz
</a></td><td>2,367</td><td>1664</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5450+%40+3.00GHz&amp;id=1296#price">47.37
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5450+%40+3.00GHz&amp;id=1296#price">$49.96*</a></td></tr><tr id="cpu1297" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X5460+%40+3.16GHz&amp;id=1297">Intel Xeon X5460 @ 3.16GHz
</a></td><td>2,543</td><td>1596</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5460+%40+3.16GHz&amp;id=1297#price">76.28
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5460+%40+3.16GHz&amp;id=1297#price">$33.34*</a></td></tr><tr id="cpu1709" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X5470+%40+3.33GHz&amp;id=1709">Intel Xeon X5470 @ 3.33GHz
</a></td><td>2,689</td><td>1549</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5470+%40+3.33GHz&amp;id=1709#price">14.94
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5470+%40+3.33GHz&amp;id=1709#price">$179.95*</a></td></tr><tr id="cpu1298" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X5472+%40+3.00GHz&amp;id=1298">Intel Xeon X5472 @ 3.00GHz
</a></td><td>2,340</td><td>1680</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5472+%40+3.00GHz&amp;id=1298#price">10.40
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5472+%40+3.00GHz&amp;id=1298#price">$225.00*</a></td></tr><tr id="cpu1299" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X5482+%40+3.20GHz&amp;id=1299">Intel Xeon X5482 @ 3.20GHz
</a></td><td>2,636</td><td>1565</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5482+%40+3.20GHz&amp;id=1299#price">26.37
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5482+%40+3.20GHz&amp;id=1299#price">$99.95*</a></td></tr><tr id="cpu1493" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X5492+%40+3.40GHz&amp;id=1493">Intel Xeon X5492 @ 3.40GHz
</a></td><td>2,705</td><td>1542</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5492+%40+3.40GHz&amp;id=1493#price">1.94
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5492+%40+3.40GHz&amp;id=1493#price">$1,391.29*</a></td></tr><tr id="cpu1300" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X5550+%40+2.67GHz&amp;id=1300">Intel Xeon X5550 @ 2.67GHz
</a></td><td>2,964</td><td>1446</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5550+%40+2.67GHz&amp;id=1300#price">83.10
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5550+%40+2.67GHz&amp;id=1300#price">$35.67</a></td></tr><tr id="cpu1301" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X5560+%40+2.80GHz&amp;id=1301">Intel Xeon X5560 @ 2.80GHz
</a></td><td>3,045</td><td>1425</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5560+%40+2.80GHz&amp;id=1301#price">38.06
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5560+%40+2.80GHz&amp;id=1301#price">$80.00</a></td></tr><tr id="cpu1302" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X5570+%40+2.93GHz&amp;id=1302">Intel Xeon X5570 @ 2.93GHz
</a></td><td>3,276</td><td>1346</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5570+%40+2.93GHz&amp;id=1302#price">32.76
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5570+%40+2.93GHz&amp;id=1302#price">$100.00</a></td></tr><tr id="cpu1303" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X5647+%40+2.93GHz&amp;id=1303">Intel Xeon X5647 @ 2.93GHz
</a></td><td>4,522</td><td>1100</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5647+%40+2.93GHz&amp;id=1303#price">226.91
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5647+%40+2.93GHz&amp;id=1303#price">$19.93*</a></td></tr><tr id="cpu1304" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X5650+%40+2.67GHz&amp;id=1304">Intel Xeon X5650 @ 2.67GHz
</a></td><td>5,783</td><td>925</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5650+%40+2.67GHz&amp;id=1304#price">82.91
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5650+%40+2.67GHz&amp;id=1304#price">$69.75</a></td></tr><tr id="cpu1305" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X5660+%40+2.80GHz&amp;id=1305">Intel Xeon X5660 @ 2.80GHz
</a></td><td>6,210</td><td>867</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5660+%40+2.80GHz&amp;id=1305#price">147.86
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5660+%40+2.80GHz&amp;id=1305#price">$42.00*</a></td></tr><tr id="cpu1306" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X5667+%40+3.07GHz&amp;id=1306">Intel Xeon X5667 @ 3.07GHz
</a></td><td>4,534</td><td>1097</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5667+%40+3.07GHz&amp;id=1306#price">251.32
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5667+%40+3.07GHz&amp;id=1306#price">$18.04*</a></td></tr><tr id="cpu1307" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X5670+%40+2.93GHz&amp;id=1307">Intel Xeon X5670 @ 2.93GHz
</a></td><td>6,116</td><td>883</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5670+%40+2.93GHz&amp;id=1307#price">130.12
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5670+%40+2.93GHz&amp;id=1307#price">$47.00</a></td></tr><tr id="cpu1308" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X5672+%40+3.20GHz&amp;id=1308">Intel Xeon X5672 @ 3.20GHz
</a></td><td>5,123</td><td>1014</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5672+%40+3.20GHz&amp;id=1308#price">113.88
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5672+%40+3.20GHz&amp;id=1308#price">$44.99*</a></td></tr><tr id="cpu1309" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X5675+%40+3.07GHz&amp;id=1309">Intel Xeon X5675 @ 3.07GHz
</a></td><td>6,382</td><td>845</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5675+%40+3.07GHz&amp;id=1309#price">183.13
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5675+%40+3.07GHz&amp;id=1309#price">$34.85</a></td></tr><tr id="cpu1310" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X5677+%40+3.47GHz&amp;id=1310">Intel Xeon X5677 @ 3.47GHz
</a></td><td>5,184</td><td>1001</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5677+%40+3.47GHz&amp;id=1310#price">47.13
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5677+%40+3.47GHz&amp;id=1310#price">$110.00*</a></td></tr><tr id="cpu1311" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X5679+%40+3.20GHz&amp;id=1311">Intel Xeon X5679 @ 3.20GHz
</a></td><td>7,095</td><td>749</td><td>NA</td><td>NA</td></tr><tr id="cpu1312" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X5680+%40+3.33GHz&amp;id=1312">Intel Xeon X5680 @ 3.33GHz
</a></td><td>6,731</td><td>807</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5680+%40+3.33GHz&amp;id=1312#price">55.63
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5680+%40+3.33GHz&amp;id=1312#price">$121.00*</a></td></tr><tr id="cpu1313" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X5687+%40+3.60GHz&amp;id=1313">Intel Xeon X5687 @ 3.60GHz
</a></td><td>5,308</td><td>983</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5687+%40+3.60GHz&amp;id=1313#price">35.40
</a></td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5687+%40+3.60GHz&amp;id=1313#price">$149.95*</a></td></tr><tr id="cpu1314" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X5690+%40+3.47GHz&amp;id=1314">Intel Xeon X5690 @ 3.47GHz
</a></td><td>6,925</td><td>778</td><td>
<a href="cpu.php?cpu=Intel+Xeon+X5690+%40+3.47GHz&amp;id=1314#price">72.91
</a></td><td>

<a href="cpu.php?cpu=Intel+Xeon+X5690+%40+3.47GHz&amp;id=1314#price">$94.98*</a></td></tr><tr id="cpu1928" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X5698+%40+4.40GHz&amp;id=1928">Intel Xeon X5698 @ 4.40GHz
</a></td><td>3,447</td><td>1301</td><td>NA</td><td>NA</td></tr><tr id="cpu2105" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Intel+Xeon+X6550+%40+2.00GHz&amp;id=2105">Intel Xeon X6550 @ 2.00GHz
</a></td><td>1,936</td><td>1899</td><td>NA</td><td>NA</td></tr><tr id="cpu4184" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Manta&amp;id=4184">Manta
</a></td><td>356</td><td>3179</td><td>NA</td><td>NA</td></tr><tr id="cpu4475" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Mars+based+on+Qualcomm+Technologies%2C+Inc+SM8350&amp;id=4475">Mars based on Qualcomm Technologies, Inc SM8350
</a></td><td>4,592</td><td>1087</td><td>NA</td><td>NA</td></tr><tr id="cpu4014" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6735&amp;id=4014">MediaTek MT6735
</a></td><td>500</td><td>3028</td><td>NA</td><td>NA</td></tr><tr id="cpu3953" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6737&amp;id=3953">MediaTek MT6737
</a></td><td>418</td><td>3108</td><td>NA</td><td>NA</td></tr><tr id="cpu4095" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6737M&amp;id=4095">MediaTek MT6737M
</a></td><td>355</td><td>3182</td><td>NA</td><td>NA</td></tr><tr id="cpu4127" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6737T&amp;id=4127">MediaTek MT6737T
</a></td><td>612</td><td>2924</td><td>NA</td><td>NA</td></tr><tr id="cpu4125" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6739WA&amp;id=4125">MediaTek MT6739WA
</a></td><td>338</td><td>3197</td><td>NA</td><td>NA</td></tr><tr id="cpu3990" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6739WW&amp;id=3990">MediaTek MT6739WW
</a></td><td>399</td><td>3129</td><td>NA</td><td>NA</td></tr><tr id="cpu3939" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6750&amp;id=3939">MediaTek MT6750
</a></td><td>933</td><td>2615</td><td>NA</td><td>NA</td></tr><tr id="cpu4092" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6750T&amp;id=4092">MediaTek MT6750T
</a></td><td>1,063</td><td>2494</td><td>NA</td><td>NA</td></tr><tr id="cpu4089" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6750V%2FWT&amp;id=4089">MediaTek MT6750V/WT
</a></td><td>1,126</td><td>2441</td><td>NA</td><td>NA</td></tr><tr id="cpu4019" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6753&amp;id=4019">MediaTek MT6753
</a></td><td>926</td><td>2625</td><td>NA</td><td>NA</td></tr><tr id="cpu4023" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6753T&amp;id=4023">MediaTek MT6753T
</a></td><td>1,044</td><td>2512</td><td>NA</td><td>NA</td></tr><tr id="cpu4090" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6757CD&amp;id=4090">MediaTek MT6757CD
</a></td><td>1,306</td><td>2298</td><td>NA</td><td>NA</td></tr><tr id="cpu4091" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6757V&amp;id=4091">MediaTek MT6757V
</a></td><td>1,479</td><td>2187</td><td>NA</td><td>NA</td></tr><tr id="cpu3988" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6761V%2FWBB&amp;id=3988">MediaTek MT6761V/WBB
</a></td><td>603</td><td>2931</td><td>NA</td><td>NA</td></tr><tr id="cpu4000" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6761V%2FWE&amp;id=4000">MediaTek MT6761V/WE
</a></td><td>710</td><td>2818</td><td>NA</td><td>NA</td></tr><tr id="cpu4058" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6762G&amp;id=4058">MediaTek MT6762G
</a></td><td>1,034</td><td>2517</td><td>NA</td><td>NA</td></tr><tr id="cpu4060" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6762V%2FCA&amp;id=4060">MediaTek MT6762V/CA
</a></td><td>1,010</td><td>2539</td><td>NA</td><td>NA</td></tr><tr id="cpu4107" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6762V%2FCB&amp;id=4107">MediaTek MT6762V/CB
</a></td><td>1,263</td><td>2329</td><td>NA</td><td>NA</td></tr><tr id="cpu4004" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6762V%2FCN&amp;id=4004">MediaTek MT6762V/CN
</a></td><td>484</td><td>3040</td><td>NA</td><td>NA</td></tr><tr id="cpu3974" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6762V%2FWA&amp;id=3974">MediaTek MT6762V/WA
</a></td><td>1,005</td><td>2545</td><td>NA</td><td>NA</td></tr><tr id="cpu3956" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6762V%2FWB&amp;id=3956">MediaTek MT6762V/WB
</a></td><td>1,222</td><td>2364</td><td>NA</td><td>NA</td></tr><tr id="cpu3975" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6762V%2FWD&amp;id=3975">MediaTek MT6762V/WD
</a></td><td>1,327</td><td>2281</td><td>NA</td><td>NA</td></tr><tr id="cpu3936" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6762V%2FWR&amp;id=3936">MediaTek MT6762V/WR
</a></td><td>1,324</td><td>2285</td><td>NA</td><td>NA</td></tr><tr id="cpu4059" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6763V%2FCE&amp;id=4059">MediaTek MT6763V/CE
</a></td><td>2,129</td><td>1793</td><td>NA</td><td>NA</td></tr><tr id="cpu4097" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6763V%2FV&amp;id=4097">MediaTek MT6763V/V
</a></td><td>1,391</td><td>2242</td><td>NA</td><td>NA</td></tr><tr id="cpu3957" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6765G&amp;id=3957">MediaTek MT6765G
</a></td><td>1,244</td><td>2345</td><td>NA</td><td>NA</td></tr><tr id="cpu4016" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6765V%2FCA&amp;id=4016">MediaTek MT6765V/CA
</a></td><td>1,644</td><td>2080</td><td>NA</td><td>NA</td></tr><tr id="cpu3962" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6765V%2FCB&amp;id=3962">MediaTek MT6765V/CB
</a></td><td>1,606</td><td>2115</td><td>NA</td><td>NA</td></tr><tr id="cpu3976" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6768V%2FCA&amp;id=3976">MediaTek MT6768V/CA
</a></td><td>1,995</td><td>1871</td><td>NA</td><td>NA</td></tr><tr id="cpu3971" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6769T&amp;id=3971">MediaTek MT6769T
</a></td><td>2,177</td><td>1770</td><td>NA</td><td>NA</td></tr><tr id="cpu4020" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6769V%2FCB&amp;id=4020">MediaTek MT6769V/CB
</a></td><td>2,088</td><td>1811</td><td>NA</td><td>NA</td></tr><tr id="cpu4106" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6769V%2FCU&amp;id=4106">MediaTek MT6769V/CU
</a></td><td>2,221</td><td>1744</td><td>NA</td><td>NA</td></tr><tr id="cpu4032" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6769V%2FWB&amp;id=4032">MediaTek MT6769V/WB
</a></td><td>2,192</td><td>1763</td><td>NA</td><td>NA</td></tr><tr id="cpu4010" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6769Z&amp;id=4010">MediaTek MT6769Z
</a></td><td>2,175</td><td>1772</td><td>NA</td><td>NA</td></tr><tr id="cpu3985" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6771V%2FC&amp;id=3985">MediaTek MT6771V/C
</a></td><td>2,099</td><td>1807</td><td>NA</td><td>NA</td></tr><tr id="cpu4015" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6771V%2FCT&amp;id=4015">MediaTek MT6771V/CT
</a></td><td>2,190</td><td>1765</td><td>NA</td><td>NA</td></tr><tr id="cpu3952" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6771V%2FW&amp;id=3952">MediaTek MT6771V/W
</a></td><td>2,075</td><td>1815</td><td>NA</td><td>NA</td></tr><tr id="cpu4050" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6771V%2FWM&amp;id=4050">MediaTek MT6771V/WM
</a></td><td>1,963</td><td>1883</td><td>NA</td><td>NA</td></tr><tr id="cpu3960" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6771V%2FWT&amp;id=3960">MediaTek MT6771V/WT
</a></td><td>2,106</td><td>1805</td><td>NA</td><td>NA</td></tr><tr id="cpu3941" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6779V%2FCE&amp;id=3941">MediaTek MT6779V/CE
</a></td><td>2,568</td><td>1590</td><td>NA</td><td>NA</td></tr><tr id="cpu3965" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6779V%2FCU&amp;id=3965">MediaTek MT6779V/CU
</a></td><td>2,439</td><td>1638</td><td>NA</td><td>NA</td></tr><tr id="cpu4046" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6779V%2FCV&amp;id=4046">MediaTek MT6779V/CV
</a></td><td>2,193</td><td>1760</td><td>NA</td><td>NA</td></tr><tr id="cpu3931" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6785V%2FCC&amp;id=3931">MediaTek MT6785V/CC
</a></td><td>2,885</td><td>1476</td><td>NA</td><td>NA</td></tr><tr id="cpu4035" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6785V%2FCD&amp;id=4035">MediaTek MT6785V/CD
</a></td><td>2,879</td><td>1477</td><td>NA</td><td>NA</td></tr><tr id="cpu3925" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6797&amp;id=3925">MediaTek MT6797
</a></td><td>1,640</td><td>2082</td><td>NA</td><td>NA</td></tr><tr id="cpu4029" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6797T&amp;id=4029">MediaTek MT6797T
</a></td><td>1,723</td><td>2022</td><td>NA</td><td>NA</td></tr><tr id="cpu4124" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6797X&amp;id=4124">MediaTek MT6797X
</a></td><td>1,951</td><td>1890</td><td>NA</td><td>NA</td></tr><tr id="cpu4116" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6853T&amp;id=4116">MediaTek MT6853T
</a></td><td>3,142</td><td>1393</td><td>NA</td><td>NA</td></tr><tr id="cpu3932" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT6873&amp;id=3932">MediaTek MT6873
</a></td><td>3,621</td><td>1265</td><td>NA</td><td>NA</td></tr><tr id="cpu4085" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT8163&amp;id=4085">MediaTek MT8163
</a></td><td>476</td><td>3050</td><td>NA</td><td>NA</td></tr><tr id="cpu3967" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT8166B&amp;id=3967">MediaTek MT8166B
</a></td><td>837</td><td>2695</td><td>NA</td><td>NA</td></tr><tr id="cpu4040" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT8167B&amp;id=4040">MediaTek MT8167B
</a></td><td>342</td><td>3194</td><td>NA</td><td>NA</td></tr><tr id="cpu4098" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT8168A&amp;id=4098">MediaTek MT8168A
</a></td><td>540</td><td>2992</td><td>NA</td><td>NA</td></tr><tr id="cpu3928" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT8183&amp;id=3928">MediaTek MT8183
</a></td><td>1,684</td><td>2052</td><td>NA</td><td>NA</td></tr><tr id="cpu4110" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT8735B&amp;id=4110">MediaTek MT8735B
</a></td><td>294</td><td>3257</td><td>NA</td><td>NA</td></tr><tr id="cpu4042" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT8768CT&amp;id=4042">MediaTek MT8768CT
</a></td><td>1,649</td><td>2076</td><td>NA</td><td>NA</td></tr><tr id="cpu4047" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT8768WA&amp;id=4047">MediaTek MT8768WA
</a></td><td>1,456</td><td>2198</td><td>NA</td><td>NA</td></tr><tr id="cpu4027" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MediaTek+MT8768WT&amp;id=4027">MediaTek MT8768WT
</a></td><td>1,669</td><td>2063</td><td>NA</td><td>NA</td></tr><tr id="cpu4113" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Microsoft+ARM+SQ1+%40+3.0+GHz&amp;id=4113">Microsoft ARM SQ1 @ 3.0 GHz
</a></td><td>3,953</td><td>1203</td><td>NA</td><td>NA</td></tr><tr id="cpu4131" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Microsoft+SQ2+%40+3.15+GHz&amp;id=4131">Microsoft SQ2 @ 3.15 GHz
</a></td><td>4,242</td><td>1146</td><td>NA</td><td>NA</td></tr><tr id="cpu1325" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Mobile+AMD+Athlon+4+2400%2B&amp;id=1325">Mobile AMD Athlon 4 2400+
</a></td><td>233</td><td>3352</td><td>NA</td><td>NA</td></tr><tr id="cpu1328" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Mobile+AMD+Athlon+64+3200%2B&amp;id=1328">Mobile AMD Athlon 64 3200+
</a></td><td>326</td><td>3217</td><td>NA</td><td>NA</td></tr><tr id="cpu1329" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Mobile+AMD+Athlon+64+3400%2B&amp;id=1329">Mobile AMD Athlon 64 3400+
</a></td><td>333</td><td>3210</td><td>NA</td><td>NA</td></tr><tr id="cpu1330" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Mobile+AMD+Athlon+64+3700%2B&amp;id=1330">Mobile AMD Athlon 64 3700+
</a></td><td>356</td><td>3178</td><td>NA</td><td>NA</td></tr><tr id="cpu1331" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Mobile+AMD+Athlon+64+4000%2B&amp;id=1331">Mobile AMD Athlon 64 4000+
</a></td><td>313</td><td>3232</td><td>NA</td><td>NA</td></tr><tr id="cpu1717" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Mobile+AMD+Athlon+2500%2B&amp;id=1717">Mobile AMD Athlon 2500+
</a></td><td>241</td><td>3337</td><td>NA</td><td>NA</td></tr><tr id="cpu2126" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Mobile+AMD+Athlon+MP-M+1800%2B&amp;id=2126">Mobile AMD Athlon MP-M 1800+
</a></td><td>173</td><td>3433</td><td>NA</td><td>NA</td></tr><tr id="cpu1802" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Mobile+AMD+Athlon+MP-M+2400%2B&amp;id=1802">Mobile AMD Athlon MP-M 2400+
</a></td><td>192</td><td>3407</td><td>NA</td><td>NA</td></tr><tr id="cpu1334" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Mobile+AMD+Athlon+XP-M+1600%2B&amp;id=1334">Mobile AMD Athlon XP-M 1600+
</a></td><td>169</td><td>3435</td><td>NA</td><td>NA</td></tr><tr id="cpu1335" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Mobile+AMD+Athlon+XP-M+1800%2B&amp;id=1335">Mobile AMD Athlon XP-M 1800+
</a></td><td>193</td><td>3404</td><td>NA</td><td>NA</td></tr><tr id="cpu1341" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Mobile+AMD+Athlon+XP-M+2000%2B&amp;id=1341">Mobile AMD Athlon XP-M 2000+
</a></td><td>196</td><td>3399</td><td>NA</td><td>NA</td></tr><tr id="cpu1337" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Mobile+AMD+Athlon+XP-M+2200%2B&amp;id=1337">Mobile AMD Athlon XP-M 2200+
</a></td><td>237</td><td>3346</td><td>NA</td><td>NA</td></tr><tr id="cpu1338" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Mobile+AMD+Athlon+XP-M+2400%2B&amp;id=1338">Mobile AMD Athlon XP-M 2400+
</a></td><td>225</td><td>3364</td><td>NA</td><td>NA</td></tr><tr id="cpu1342" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Mobile+AMD+Athlon+XP-M+2500%2B&amp;id=1342">Mobile AMD Athlon XP-M 2500+
</a></td><td>226</td><td>3363</td><td>NA</td><td>NA</td></tr><tr id="cpu1343" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Mobile+AMD+Athlon+XP-M+2600%2B&amp;id=1343">Mobile AMD Athlon XP-M 2600+
</a></td><td>241</td><td>3336</td><td>NA</td><td>NA</td></tr><tr id="cpu1344" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Mobile+AMD+Athlon+XP-M+2800%2B&amp;id=1344">Mobile AMD Athlon XP-M 2800+
</a></td><td>238</td><td>3344</td><td>NA</td><td>NA</td></tr><tr id="cpu1345" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Mobile+AMD+Athlon+XP-M+3000%2B&amp;id=1345">Mobile AMD Athlon XP-M 3000+
</a></td><td>238</td><td>3343</td><td>NA</td><td>NA</td></tr><tr id="cpu1349" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Mobile+AMD+Sempron+2100%2B&amp;id=1349">Mobile AMD Sempron 2100+
</a></td><td>164</td><td>3441</td><td>NA</td><td>NA</td></tr><tr id="cpu1350" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Mobile+AMD+Sempron+2600%2B&amp;id=1350">Mobile AMD Sempron 2600+
</a></td><td>256</td><td>3315</td><td>NA</td><td>NA</td></tr><tr id="cpu1351" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Mobile+AMD+Sempron+2800%2B&amp;id=1351">Mobile AMD Sempron 2800+
</a></td><td>237</td><td>3347</td><td>NA</td><td>NA</td></tr><tr id="cpu1352" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Mobile+AMD+Sempron+3000%2B&amp;id=1352">Mobile AMD Sempron 3000+
</a></td><td>269</td><td>3293</td><td>NA</td><td>NA</td></tr><tr id="cpu1348" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Mobile+AMD+Sempron+3100%2B&amp;id=1348">Mobile AMD Sempron 3100+
</a></td><td>277</td><td>3282</td><td>NA</td><td>NA</td></tr><tr id="cpu1353" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Mobile+AMD+Sempron+3200%2B&amp;id=1353">Mobile AMD Sempron 3200+
</a></td><td>245</td><td>3331</td><td>NA</td><td>NA</td></tr><tr id="cpu1354" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Mobile+AMD+Sempron+3300%2B&amp;id=1354">Mobile AMD Sempron 3300+
</a></td><td>294</td><td>3256</td><td>NA</td><td>NA</td></tr><tr id="cpu1355" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Mobile+AMD+Sempron+3400%2B&amp;id=1355">Mobile AMD Sempron 3400+
</a></td><td>321</td><td>3221</td><td>NA</td><td>NA</td></tr><tr id="cpu1356" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Mobile+AMD+Sempron+3500%2B&amp;id=1356">Mobile AMD Sempron 3500+
</a></td><td>290</td><td>3266</td><td>NA</td><td>NA</td></tr><tr id="cpu1357" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Mobile+AMD+Sempron+3600%2B&amp;id=1357">Mobile AMD Sempron 3600+
</a></td><td>302</td><td>3243</td><td>NA</td><td>NA</td></tr><tr id="cpu1732" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Mobile+AMD+Sempron+3800%2B&amp;id=1732">Mobile AMD Sempron 3800+
</a></td><td>335</td><td>3203</td><td>NA</td><td>NA</td></tr><tr id="cpu1734" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Mobile+Intel+Celeron+1.70GHz&amp;id=1734">Mobile Intel Celeron 1.70GHz
</a></td><td>118</td><td>3504</td><td>NA</td><td>NA</td></tr><tr id="cpu1360" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Mobile+Intel+Celeron+1.80GHz&amp;id=1360">Mobile Intel Celeron 1.80GHz
</a></td><td>121</td><td>3500</td><td>NA</td><td>NA</td></tr><tr id="cpu1361" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Mobile+Intel+Celeron+2.00GHz&amp;id=1361">Mobile Intel Celeron 2.00GHz
</a></td><td>133</td><td>3488</td><td>NA</td><td>NA</td></tr><tr id="cpu1362" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Mobile+Intel+Celeron+2.20GHz&amp;id=1362">Mobile Intel Celeron 2.20GHz
</a></td><td>147</td><td>3472</td><td>NA</td><td>NA</td></tr><tr id="cpu1363" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Mobile+Intel+Celeron+2.40GHz&amp;id=1363">Mobile Intel Celeron 2.40GHz
</a></td><td>154</td><td>3464</td><td>NA</td><td>NA</td></tr><tr id="cpu1737" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Mobile+Intel+Celeron+1333MHz&amp;id=1737">Mobile Intel Celeron 1333MHz
</a></td><td>183</td><td>3419</td><td>NA</td><td>NA</td></tr><tr id="cpu1374" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Mobile+Intel+Pentium+4+2.66GHz&amp;id=1374">Mobile Intel Pentium 4 2.66GHz
</a></td><td>182</td><td>3420</td><td>NA</td><td>NA</td></tr><tr id="cpu1375" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Mobile+Intel+Pentium+4+2.80GHz&amp;id=1375">Mobile Intel Pentium 4 2.80GHz
</a></td><td>205</td><td>3386</td><td>NA</td><td>NA</td></tr><tr id="cpu1376" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Mobile+Intel+Pentium+4+3.06GHz&amp;id=1376">Mobile Intel Pentium 4 3.06GHz
</a></td><td>220</td><td>3371</td><td>NA</td><td>NA</td></tr><tr id="cpu1377" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Mobile+Intel+Pentium+4+3.20GHz&amp;id=1377">Mobile Intel Pentium 4 3.20GHz
</a></td><td>232</td><td>3355</td><td>NA</td><td>NA</td></tr><tr id="cpu1378" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Mobile+Intel+Pentium+4+3.33GHz&amp;id=1378">Mobile Intel Pentium 4 3.33GHz
</a></td><td>344</td><td>3192</td><td>NA</td><td>NA</td></tr><tr id="cpu1365" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Mobile+Intel+Pentium+4+-+M+1.70GHz&amp;id=1365">Mobile Intel Pentium 4 - M 1.70GHz
</a></td><td>121</td><td>3499</td><td>

<a href="cpu.php?cpu=Mobile+Intel+Pentium+4+-+M+1.70GHz&amp;id=1365#price">0.67
</a></td><td>

<a href="cpu.php?cpu=Mobile+Intel+Pentium+4+-+M+1.70GHz&amp;id=1365#price">$179.99</a></td></tr><tr id="cpu1366" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Mobile+Intel+Pentium+4+-+M+1.80GHz&amp;id=1366">Mobile Intel Pentium 4 - M 1.80GHz
</a></td><td>119</td><td>3502</td><td>NA</td><td>NA</td></tr><tr id="cpu1368" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Mobile+Intel+Pentium+4+-+M+2.00GHz&amp;id=1368">Mobile Intel Pentium 4 - M 2.00GHz
</a></td><td>138</td><td>3484</td><td>NA</td><td>NA</td></tr><tr id="cpu1369" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Mobile+Intel+Pentium+4+-+M+2.20GHz&amp;id=1369">Mobile Intel Pentium 4 - M 2.20GHz
</a></td><td>143</td><td>3475</td><td>NA</td><td>NA</td></tr><tr id="cpu1370" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Mobile+Intel+Pentium+4+-+M+2.40GHz&amp;id=1370">Mobile Intel Pentium 4 - M 2.40GHz
</a></td><td>139</td><td>3480</td><td>NA</td><td>NA</td></tr><tr id="cpu1742" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Mobile+Intel+Pentium+III+-+M+933MHz&amp;id=1742">Mobile Intel Pentium III - M 933MHz
</a></td><td>130</td><td>3492</td><td>NA</td><td>NA</td></tr><tr id="cpu1382" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Mobile+Intel+Pentium+III+-+M+1200MHz&amp;id=1382">Mobile Intel Pentium III - M 1200MHz
</a></td><td>146</td><td>3473</td><td>NA</td><td>NA</td></tr><tr id="cpu4364" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=msm8960dt&amp;id=4364">msm8960dt
</a></td><td>252</td><td>3324</td><td>NA</td><td>NA</td></tr><tr id="cpu4379" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MT6592&amp;id=4379">MT6592
</a></td><td>521</td><td>3010</td><td>NA</td><td>NA</td></tr><tr id="cpu4255" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MT6735M&amp;id=4255">MT6735M
</a></td><td>335</td><td>3204</td><td>NA</td><td>NA</td></tr><tr id="cpu4230" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MT6735P&amp;id=4230">MT6735P
</a></td><td>303</td><td>3240</td><td>NA</td><td>NA</td></tr><tr id="cpu4506" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MT6738&amp;id=4506">MT6738
</a></td><td>692</td><td>2838</td><td>NA</td><td>NA</td></tr><tr id="cpu4426" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MT6750V%2FW&amp;id=4426">MT6750V/W
</a></td><td>640</td><td>2894</td><td>NA</td><td>NA</td></tr><tr id="cpu4507" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MT6755BM&amp;id=4507">MT6755BM
</a></td><td>849</td><td>2681</td><td>NA</td><td>NA</td></tr><tr id="cpu4441" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MT6755M&amp;id=4441">MT6755M
</a></td><td>1,172</td><td>2403</td><td>NA</td><td>NA</td></tr><tr id="cpu4216" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MT6755V%2FB&amp;id=4216">MT6755V/B
</a></td><td>1,404</td><td>2233</td><td>NA</td><td>NA</td></tr><tr id="cpu4429" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MT6755V%2FCM&amp;id=4429">MT6755V/CM
</a></td><td>1,172</td><td>2404</td><td>NA</td><td>NA</td></tr><tr id="cpu4214" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MT6755V%2FWM&amp;id=4214">MT6755V/WM
</a></td><td>976</td><td>2575</td><td>NA</td><td>NA</td></tr><tr id="cpu4263" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MT6755V%2FWS&amp;id=4263">MT6755V/WS
</a></td><td>1,359</td><td>2256</td><td>NA</td><td>NA</td></tr><tr id="cpu4354" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MT6757W&amp;id=4354">MT6757W
</a></td><td>1,712</td><td>2027</td><td>NA</td><td>NA</td></tr><tr id="cpu4218" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MT6757WD&amp;id=4218">MT6757WD
</a></td><td>1,559</td><td>2138</td><td>NA</td><td>NA</td></tr><tr id="cpu4430" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MT6757WH&amp;id=4430">MT6757WH
</a></td><td>1,161</td><td>2410</td><td>NA</td><td>NA</td></tr><tr id="cpu4324" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MT6761V%2FCAB&amp;id=4324">MT6761V/CAB
</a></td><td>575</td><td>2963</td><td>NA</td><td>NA</td></tr><tr id="cpu4239" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MT6761V%2FCBB&amp;id=4239">MT6761V/CBB
</a></td><td>846</td><td>2685</td><td>NA</td><td>NA</td></tr><tr id="cpu4428" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MT6761V%2FCD&amp;id=4428">MT6761V/CD
</a></td><td>784</td><td>2751</td><td>NA</td><td>NA</td></tr><tr id="cpu4311" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MT6761V%2FWAB&amp;id=4311">MT6761V/WAB
</a></td><td>645</td><td>2886</td><td>NA</td><td>NA</td></tr><tr id="cpu4438" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=mt6762m&amp;id=4438">mt6762m
</a></td><td>538</td><td>2994</td><td>NA</td><td>NA</td></tr><tr id="cpu4378" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MT6762V%2FCR&amp;id=4378">MT6762V/CR
</a></td><td>857</td><td>2676</td><td>NA</td><td>NA</td></tr><tr id="cpu4414" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MT6763V%2FB&amp;id=4414">MT6763V/B
</a></td><td>1,461</td><td>2196</td><td>NA</td><td>NA</td></tr><tr id="cpu4159" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MT6763V%2FCT&amp;id=4159">MT6763V/CT
</a></td><td>1,412</td><td>2226</td><td>NA</td><td>NA</td></tr><tr id="cpu4257" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MT6763V%2FWT&amp;id=4257">MT6763V/WT
</a></td><td>1,313</td><td>2292</td><td>NA</td><td>NA</td></tr><tr id="cpu4268" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MT6765&amp;id=4268">MT6765
</a></td><td>1,689</td><td>2045</td><td>NA</td><td>NA</td></tr><tr id="cpu4223" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MT6765V%2FWA&amp;id=4223">MT6765V/WA
</a></td><td>1,706</td><td>2030</td><td>NA</td><td>NA</td></tr><tr id="cpu4192" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MT6765V%2FWB&amp;id=4192">MT6765V/WB
</a></td><td>1,653</td><td>2071</td><td>NA</td><td>NA</td></tr><tr id="cpu4203" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MT6769V%2FCT&amp;id=4203">MT6769V/CT
</a></td><td>2,145</td><td>1785</td><td>NA</td><td>NA</td></tr><tr id="cpu4442" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MT6769V%2FCZ&amp;id=4442">MT6769V/CZ
</a></td><td>2,121</td><td>1795</td><td>NA</td><td>NA</td></tr><tr id="cpu4315" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MT6771V%2FWL&amp;id=4315">MT6771V/WL
</a></td><td>2,325</td><td>1687</td><td>NA</td><td>NA</td></tr><tr id="cpu4361" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MT6785&amp;id=4361">MT6785
</a></td><td>2,820</td><td>1503</td><td>NA</td><td>NA</td></tr><tr id="cpu4243" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MT6795&amp;id=4243">MT6795
</a></td><td>1,088</td><td>2473</td><td>NA</td><td>NA</td></tr><tr id="cpu4252" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MT6795M&amp;id=4252">MT6795M
</a></td><td>968</td><td>2581</td><td>NA</td><td>NA</td></tr><tr id="cpu4451" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MT6795MM&amp;id=4451">MT6795MM
</a></td><td>618</td><td>2918</td><td>NA</td><td>NA</td></tr><tr id="cpu4147" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MT6797M&amp;id=4147">MT6797M
</a></td><td>1,804</td><td>1978</td><td>NA</td><td>NA</td></tr><tr id="cpu4359" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MT6833&amp;id=4359">MT6833
</a></td><td>2,934</td><td>1462</td><td>NA</td><td>NA</td></tr><tr id="cpu4450" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MT6833V%2FNZA&amp;id=4450">MT6833V/NZA
</a></td><td>2,793</td><td>1508</td><td>NA</td><td>NA</td></tr><tr id="cpu4480" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MT6833V%2FZA&amp;id=4480">MT6833V/ZA
</a></td><td>3,152</td><td>1390</td><td>NA</td><td>NA</td></tr><tr id="cpu4270" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MT6853V%2FNZA&amp;id=4270">MT6853V/NZA
</a></td><td>2,784</td><td>1515</td><td>NA</td><td>NA</td></tr><tr id="cpu4166" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MT6853V%2FTNZA&amp;id=4166">MT6853V/TNZA
</a></td><td>3,088</td><td>1409</td><td>NA</td><td>NA</td></tr><tr id="cpu4174" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MT6875&amp;id=4174">MT6875
</a></td><td>3,561</td><td>1279</td><td>NA</td><td>NA</td></tr><tr id="cpu4469" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MT6877V%2FZA&amp;id=4469">MT6877V/ZA
</a></td><td>3,547</td><td>1281</td><td>NA</td><td>NA</td></tr><tr id="cpu4133" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MT6889Z%2FCZA&amp;id=4133">MT6889Z/CZA
</a></td><td>4,033</td><td>1187</td><td>NA</td><td>NA</td></tr><tr id="cpu4328" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MT6893Z%2FCZA&amp;id=4328">MT6893Z/CZA
</a></td><td>4,901</td><td>1042</td><td>NA</td><td>NA</td></tr><tr id="cpu4470" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MT6893Z_A%2FCZA&amp;id=4470">MT6893Z_A/CZA
</a></td><td>4,999</td><td>1028</td><td>NA</td><td>NA</td></tr><tr id="cpu4415" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MT6969T&amp;id=4415">MT6969T
</a></td><td>2,228</td><td>1739</td><td>NA</td><td>NA</td></tr><tr id="cpu4453" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MT8165&amp;id=4453">MT8165
</a></td><td>778</td><td>2757</td><td>NA</td><td>NA</td></tr><tr id="cpu4235" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MT8168B&amp;id=4235">MT8168B
</a></td><td>886</td><td>2652</td><td>NA</td><td>NA</td></tr><tr id="cpu4220" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MT8735&amp;id=4220">MT8735
</a></td><td>375</td><td>3153</td><td>NA</td><td>NA</td></tr><tr id="cpu4393" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MT8735P&amp;id=4393">MT8735P
</a></td><td>405</td><td>3120</td><td>NA</td><td>NA</td></tr><tr id="cpu4187" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MT8765WB&amp;id=4187">MT8765WB
</a></td><td>349</td><td>3184</td><td>NA</td><td>NA</td></tr><tr id="cpu4285" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MT8766A&amp;id=4285">MT8766A
</a></td><td>581</td><td>2958</td><td>NA</td><td>NA</td></tr><tr id="cpu4204" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MT8766B&amp;id=4204">MT8766B
</a></td><td>812</td><td>2716</td><td>NA</td><td>NA</td></tr><tr id="cpu4330" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MT8768WD&amp;id=4330">MT8768WD
</a></td><td>905</td><td>2641</td><td>NA</td><td>NA</td></tr><tr id="cpu4229" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MT8788&amp;id=4229">MT8788
</a></td><td>1,961</td><td>1884</td><td>NA</td><td>NA</td></tr><tr id="cpu4505" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=MT9950&amp;id=4505">MT9950
</a></td><td>845</td><td>2686</td><td>NA</td><td>NA</td></tr><tr id="cpu4332" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=MTK6757&amp;id=4332">MTK6757
</a></td><td>1,158</td><td>2413</td><td>NA</td><td>NA</td></tr><tr id="cpu4373" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Nvidia+Tegra+T132&amp;id=4373">Nvidia Tegra T132
</a></td><td>981</td><td>2571</td><td>NA</td><td>NA</td></tr><tr id="cpu4340" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Nvidia+Tegra+T210&amp;id=4340">Nvidia Tegra T210
</a></td><td>1,436</td><td>2212</td><td>NA</td><td>NA</td></tr><tr id="cpu1743" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Pentium+Dual-Core+E6000+%40+3.46GHz&amp;id=1743">Pentium Dual-Core E6000 @ 3.46GHz
</a></td><td>1,472</td><td>2192</td><td>NA</td><td>NA</td></tr><tr id="cpu4244" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Pentium+Dual-Core+T4500+%40+2.30GHz&amp;id=4244">Pentium Dual-Core T4500 @ 2.30GHz
</a></td><td>1,003</td><td>2549</td><td>NA</td><td>NA</td></tr><tr id="cpu4153" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=QCT+APQ8064+AWIFI&amp;id=4153">QCT APQ8064 AWIFI
</a></td><td>382</td><td>3150</td><td>NA</td><td>NA</td></tr><tr id="cpu4191" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=QCT+APQ8064+DEB&amp;id=4191">QCT APQ8064 DEB
</a></td><td>453</td><td>3077</td><td>NA</td><td>NA</td></tr><tr id="cpu4232" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=QCT+APQ8064+FLO&amp;id=4232">QCT APQ8064 FLO
</a></td><td>457</td><td>3073</td><td>NA</td><td>NA</td></tr><tr id="cpu3982" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=QCT+APQ8064+MAKO&amp;id=3982">QCT APQ8064 MAKO
</a></td><td>399</td><td>3130</td><td>NA</td><td>NA</td></tr><tr id="cpu4338" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+APQ8026&amp;id=4338">Qualcomm APQ8026
</a></td><td>291</td><td>3262</td><td>NA</td><td>NA</td></tr><tr id="cpu4007" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+APQ8084&amp;id=4007">Qualcomm APQ8084
</a></td><td>501</td><td>3027</td><td>NA</td><td>NA</td></tr><tr id="cpu3915" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+APQ+8084+%28Flattened+Device+Tree%29&amp;id=3915">Qualcomm APQ 8084 (Flattened Device Tree)
</a></td><td>740</td><td>2792</td><td>NA</td><td>NA</td></tr><tr id="cpu4161" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+MSM8226&amp;id=4161">Qualcomm MSM8226
</a></td><td>265</td><td>3300</td><td>NA</td><td>NA</td></tr><tr id="cpu4296" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+MSM8228&amp;id=4296">Qualcomm MSM8228
</a></td><td>332</td><td>3213</td><td>NA</td><td>NA</td></tr><tr id="cpu4165" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+MSM8626&amp;id=4165">Qualcomm MSM8626
</a></td><td>294</td><td>3255</td><td>NA</td><td>NA</td></tr><tr id="cpu4119" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+MSM8917&amp;id=4119">Qualcomm MSM8917
</a></td><td>593</td><td>2939</td><td>NA</td><td>NA</td></tr><tr id="cpu4249" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+MSM8926&amp;id=4249">Qualcomm MSM8926
</a></td><td>290</td><td>3264</td><td>NA</td><td>NA</td></tr><tr id="cpu4222" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+MSM8928&amp;id=4222">Qualcomm MSM8928
</a></td><td>338</td><td>3198</td><td>NA</td><td>NA</td></tr><tr id="cpu4080" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+MSM8937&amp;id=4080">Qualcomm MSM8937
</a></td><td>892</td><td>2649</td><td>NA</td><td>NA</td></tr><tr id="cpu4445" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+MSM8939&amp;id=4445">Qualcomm MSM8939
</a></td><td>1,013</td><td>2536</td><td>NA</td><td>NA</td></tr><tr id="cpu4464" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+MSM8953&amp;id=4464">Qualcomm MSM8953
</a></td><td>1,528</td><td>2156</td><td>NA</td><td>NA</td></tr><tr id="cpu4008" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+MSM8974&amp;id=4008">Qualcomm MSM8974
</a></td><td>630</td><td>2902</td><td>NA</td><td>NA</td></tr><tr id="cpu4083" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+MSM8974PRO-AA&amp;id=4083">Qualcomm MSM8974PRO-AA
</a></td><td>627</td><td>2904</td><td>NA</td><td>NA</td></tr><tr id="cpu4248" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+MSM8974PRO-AB&amp;id=4248">Qualcomm MSM8974PRO-AB
</a></td><td>606</td><td>2929</td><td>NA</td><td>NA</td></tr><tr id="cpu4038" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+MSM8974PRO-AC&amp;id=4038">Qualcomm MSM8974PRO-AC
</a></td><td>625</td><td>2907</td><td>NA</td><td>NA</td></tr><tr id="cpu4169" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+MSM8992&amp;id=4169">Qualcomm MSM8992
</a></td><td>1,048</td><td>2509</td><td>NA</td><td>NA</td></tr><tr id="cpu4237" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+MSM8994&amp;id=4237">Qualcomm MSM8994
</a></td><td>739</td><td>2793</td><td>NA</td><td>NA</td></tr><tr id="cpu4254" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+MSM8996&amp;id=4254">Qualcomm MSM8996
</a></td><td>1,160</td><td>2412</td><td>NA</td><td>NA</td></tr><tr id="cpu3912" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+MSM8996PRO-AB&amp;id=3912">Qualcomm MSM8996PRO-AB
</a></td><td>1,435</td><td>2213</td><td>NA</td><td>NA</td></tr><tr id="cpu4135" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+MSM+8939+HUAWEI+KIW-L21&amp;id=4135">Qualcomm MSM 8939 HUAWEI KIW-L21
</a></td><td>1,023</td><td>2527</td><td>NA</td><td>NA</td></tr><tr id="cpu4313" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+MSM+8939+HUAWEI+KIW-L24&amp;id=4313">Qualcomm MSM 8939 HUAWEI KIW-L24
</a></td><td>1,051</td><td>2506</td><td>NA</td><td>NA</td></tr><tr id="cpu4422" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+MSM+8939+HUAWEI+TEXAS-A1&amp;id=4422">Qualcomm MSM 8939 HUAWEI TEXAS-A1
</a></td><td>1,085</td><td>2477</td><td>NA</td><td>NA</td></tr><tr id="cpu4079" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+MSM+8974+HAMMERHEAD+%28Flattened+Device+Tre&amp;id=4079">Qualcomm MSM 8974 HAMMERHEAD (Flattened Device Tre
</a></td><td>566</td><td>2972</td><td>NA</td><td>NA</td></tr><tr id="cpu3930" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Snapdragon+8350&amp;id=3930">Qualcomm Snapdragon 8350
</a></td><td>4,614</td><td>1085</td><td>NA</td><td>NA</td></tr><tr id="cpu4186" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+APQ8009&amp;id=4186">Qualcomm Technologies, Inc APQ8009
</a></td><td>288</td><td>3268</td><td>NA</td><td>NA</td></tr><tr id="cpu4036" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+APQ8016&amp;id=4036">Qualcomm Technologies, Inc APQ8016
</a></td><td>333</td><td>3212</td><td>NA</td><td>NA</td></tr><tr id="cpu4001" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+APQ8017&amp;id=4001">Qualcomm Technologies, Inc APQ8017
</a></td><td>313</td><td>3230</td><td>NA</td><td>NA</td></tr><tr id="cpu4435" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+APQ8053&amp;id=4435">Qualcomm Technologies, Inc APQ8053
</a></td><td>1,796</td><td>1983</td><td>NA</td><td>NA</td></tr><tr id="cpu4094" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+APQ8076&amp;id=4094">Qualcomm Technologies, Inc APQ8076
</a></td><td>1,430</td><td>2214</td><td>NA</td><td>NA</td></tr><tr id="cpu3997" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+APQ8096&amp;id=3997">Qualcomm Technologies, Inc APQ8096
</a></td><td>1,394</td><td>2239</td><td>NA</td><td>NA</td></tr><tr id="cpu4084" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+ATOLL-AB&amp;id=4084">Qualcomm Technologies, Inc ATOLL-AB
</a></td><td>2,741</td><td>1530</td><td>NA</td><td>NA</td></tr><tr id="cpu3927" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+BENGAL&amp;id=3927">Qualcomm Technologies, Inc BENGAL
</a></td><td>2,110</td><td>1799</td><td>NA</td><td>NA</td></tr><tr id="cpu4146" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+BENGALP&amp;id=4146">Qualcomm Technologies, Inc BENGALP
</a></td><td>2,171</td><td>1775</td><td>NA</td><td>NA</td></tr><tr id="cpu3963" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+KONA&amp;id=3963">Qualcomm Technologies, Inc KONA
</a></td><td>4,840</td><td>1050</td><td>NA</td><td>NA</td></tr><tr id="cpu3984" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+LAGOON&amp;id=3984">Qualcomm Technologies, Inc LAGOON
</a></td><td>2,894</td><td>1472</td><td>NA</td><td>NA</td></tr><tr id="cpu3948" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+LITO&amp;id=3948">Qualcomm Technologies, Inc LITO
</a></td><td>2,935</td><td>1461</td><td>NA</td><td>NA</td></tr><tr id="cpu4190" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+MSM8216&amp;id=4190">Qualcomm Technologies, Inc MSM8216
</a></td><td>292</td><td>3260</td><td>NA</td><td>NA</td></tr><tr id="cpu4118" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+MSM8909&amp;id=4118">Qualcomm Technologies, Inc MSM8909
</a></td><td>264</td><td>3301</td><td>NA</td><td>NA</td></tr><tr id="cpu4009" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+MSM8916&amp;id=4009">Qualcomm Technologies, Inc MSM8916
</a></td><td>359</td><td>3174</td><td>NA</td><td>NA</td></tr><tr id="cpu4025" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+MSM8917&amp;id=4025">Qualcomm Technologies, Inc MSM8917
</a></td><td>441</td><td>3089</td><td>NA</td><td>NA</td></tr><tr id="cpu4024" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+MSM8920&amp;id=4024">Qualcomm Technologies, Inc MSM8920
</a></td><td>434</td><td>3095</td><td>NA</td><td>NA</td></tr><tr id="cpu4289" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+MSM8929&amp;id=4289">Qualcomm Technologies, Inc MSM8929
</a></td><td>714</td><td>2815</td><td>NA</td><td>NA</td></tr><tr id="cpu4006" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+MSM8937&amp;id=4006">Qualcomm Technologies, Inc MSM8937
</a></td><td>998</td><td>2553</td><td>NA</td><td>NA</td></tr><tr id="cpu4031" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+MSM8939&amp;id=4031">Qualcomm Technologies, Inc MSM8939
</a></td><td>886</td><td>2653</td><td>NA</td><td>NA</td></tr><tr id="cpu4026" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+MSM8940&amp;id=4026">Qualcomm Technologies, Inc MSM8940
</a></td><td>871</td><td>2666</td><td>NA</td><td>NA</td></tr><tr id="cpu3961" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+MSM8952&amp;id=3961">Qualcomm Technologies, Inc MSM8952
</a></td><td>774</td><td>2760</td><td>NA</td><td>NA</td></tr><tr id="cpu3970" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+MSM8953&amp;id=3970">Qualcomm Technologies, Inc MSM8953
</a></td><td>1,608</td><td>2113</td><td>NA</td><td>NA</td></tr><tr id="cpu4181" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+MSM8956&amp;id=4181">Qualcomm Technologies, Inc MSM8956
</a></td><td>1,231</td><td>2357</td><td>NA</td><td>NA</td></tr><tr id="cpu4103" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+MSM8976&amp;id=4103">Qualcomm Technologies, Inc MSM8976
</a></td><td>1,461</td><td>2197</td><td>NA</td><td>NA</td></tr><tr id="cpu4164" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+MSM8976SG&amp;id=4164">Qualcomm Technologies, Inc MSM8976SG
</a></td><td>1,622</td><td>2100</td><td>NA</td><td>NA</td></tr><tr id="cpu4189" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+MSM8992&amp;id=4189">Qualcomm Technologies, Inc MSM8992
</a></td><td>957</td><td>2596</td><td>NA</td><td>NA</td></tr><tr id="cpu3942" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+MSM8994&amp;id=3942">Qualcomm Technologies, Inc MSM8994
</a></td><td>932</td><td>2618</td><td>NA</td><td>NA</td></tr><tr id="cpu3913" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+MSM8996&amp;id=3913">Qualcomm Technologies, Inc MSM8996
</a></td><td>1,181</td><td>2393</td><td>NA</td><td>NA</td></tr><tr id="cpu3929" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+MSM8996pro&amp;id=3929">Qualcomm Technologies, Inc MSM8996pro
</a></td><td>1,273</td><td>2322</td><td>NA</td><td>NA</td></tr><tr id="cpu3919" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+MSM8998&amp;id=3919">Qualcomm Technologies, Inc MSM8998
</a></td><td>2,392</td><td>1654</td><td>NA</td><td>NA</td></tr><tr id="cpu4086" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+QCM2150&amp;id=4086">Qualcomm Technologies, Inc QCM2150
</a></td><td>356</td><td>3181</td><td>NA</td><td>NA</td></tr><tr id="cpu4122" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+QM215&amp;id=4122">Qualcomm Technologies, Inc QM215
</a></td><td>444</td><td>3086</td><td>NA</td><td>NA</td></tr><tr id="cpu4171" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+SDA450&amp;id=4171">Qualcomm Technologies, Inc SDA450
</a></td><td>1,401</td><td>2237</td><td>NA</td><td>NA</td></tr><tr id="cpu4051" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+SDA660&amp;id=4051">Qualcomm Technologies, Inc SDA660
</a></td><td>1,919</td><td>1910</td><td>NA</td><td>NA</td></tr><tr id="cpu3989" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+SDM429&amp;id=3989">Qualcomm Technologies, Inc SDM429
</a></td><td>850</td><td>2680</td><td>NA</td><td>NA</td></tr><tr id="cpu4044" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+SDM439&amp;id=4044">Qualcomm Technologies, Inc SDM439
</a></td><td>1,113</td><td>2454</td><td>NA</td><td>NA</td></tr><tr id="cpu3978" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+SDM450&amp;id=3978">Qualcomm Technologies, Inc SDM450
</a></td><td>1,183</td><td>2391</td><td>NA</td><td>NA</td></tr><tr id="cpu4057" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+SDM460&amp;id=4057">Qualcomm Technologies, Inc SDM460
</a></td><td>1,869</td><td>1941</td><td>NA</td><td>NA</td></tr><tr id="cpu3983" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+SDM630&amp;id=3983">Qualcomm Technologies, Inc SDM630
</a></td><td>1,695</td><td>2040</td><td>NA</td><td>NA</td></tr><tr id="cpu3933" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+SDM632&amp;id=3933">Qualcomm Technologies, Inc SDM632
</a></td><td>1,760</td><td>1999</td><td>NA</td><td>NA</td></tr><tr id="cpu3991" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+SDM636&amp;id=3991">Qualcomm Technologies, Inc SDM636
</a></td><td>1,826</td><td>1967</td><td>NA</td><td>NA</td></tr><tr id="cpu3955" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+SDM660&amp;id=3955">Qualcomm Technologies, Inc SDM660
</a></td><td>2,042</td><td>1837</td><td>NA</td><td>NA</td></tr><tr id="cpu4329" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+SDM662&amp;id=4329">Qualcomm Technologies, Inc SDM662
</a></td><td>1,807</td><td>1976</td><td>NA</td><td>NA</td></tr><tr id="cpu4082" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+SDM665&amp;id=4082">Qualcomm Technologies, Inc SDM665
</a></td><td>2,027</td><td>1849</td><td>NA</td><td>NA</td></tr><tr id="cpu4037" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+SDM670&amp;id=4037">Qualcomm Technologies, Inc SDM670
</a></td><td>2,106</td><td>1804</td><td>NA</td><td>NA</td></tr><tr id="cpu3973" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+SDM710&amp;id=3973">Qualcomm Technologies, Inc SDM710
</a></td><td>2,145</td><td>1786</td><td>NA</td><td>NA</td></tr><tr id="cpu4012" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+SDM712&amp;id=4012">Qualcomm Technologies, Inc SDM712
</a></td><td>2,192</td><td>1761</td><td>NA</td><td>NA</td></tr><tr id="cpu4054" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+SDM720G&amp;id=4054">Qualcomm Technologies, Inc SDM720G
</a></td><td>2,751</td><td>1527</td><td>NA</td><td>NA</td></tr><tr id="cpu4071" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+SDM730G+AIE&amp;id=4071">Qualcomm Technologies, Inc SDM730G AIE
</a></td><td>2,674</td><td>1556</td><td>NA</td><td>NA</td></tr><tr id="cpu4101" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+SDM765G+5G&amp;id=4101">Qualcomm Technologies, Inc SDM765G 5G
</a></td><td>2,815</td><td>1505</td><td>NA</td><td>NA</td></tr><tr id="cpu3918" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+SDMMAGPIE&amp;id=3918">Qualcomm Technologies, Inc SDMMAGPIE
</a></td><td>2,777</td><td>1517</td><td>NA</td><td>NA</td></tr><tr id="cpu4041" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+SDMMAGPIEP&amp;id=4041">Qualcomm Technologies, Inc SDMMAGPIEP
</a></td><td>2,977</td><td>1444</td><td>NA</td><td>NA</td></tr><tr id="cpu4028" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+SM4250&amp;id=4028">Qualcomm Technologies, Inc SM4250
</a></td><td>1,846</td><td>1954</td><td>NA</td><td>NA</td></tr><tr id="cpu4301" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+SM4350&amp;id=4301">Qualcomm Technologies, Inc SM4350
</a></td><td>2,023</td><td>1853</td><td>NA</td><td>NA</td></tr><tr id="cpu4460" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+SM6115&amp;id=4460">Qualcomm Technologies, Inc SM6115
</a></td><td>2,069</td><td>1821</td><td>NA</td><td>NA</td></tr><tr id="cpu4111" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+SM6125&amp;id=4111">Qualcomm Technologies, Inc SM6125
</a></td><td>2,041</td><td>1838</td><td>NA</td><td>NA</td></tr><tr id="cpu3934" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+SM6150&amp;id=3934">Qualcomm Technologies, Inc SM6150
</a></td><td>2,454</td><td>1630</td><td>NA</td><td>NA</td></tr><tr id="cpu3964" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+SM7125&amp;id=3964">Qualcomm Technologies, Inc SM7125
</a></td><td>2,817</td><td>1504</td><td>NA</td><td>NA</td></tr><tr id="cpu4043" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+SM7150&amp;id=4043">Qualcomm Technologies, Inc SM7150
</a></td><td>2,685</td><td>1551</td><td>NA</td><td>NA</td></tr><tr id="cpu3959" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+SM7225&amp;id=3959">Qualcomm Technologies, Inc SM7225
</a></td><td>3,072</td><td>1418</td><td>NA</td><td>NA</td></tr><tr id="cpu4030" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+SM7250&amp;id=4030">Qualcomm Technologies, Inc SM7250
</a></td><td>2,983</td><td>1441</td><td>NA</td><td>NA</td></tr><tr id="cpu3935" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+SM8150&amp;id=3935">Qualcomm Technologies, Inc SM8150
</a></td><td>3,820</td><td>1221</td><td>NA</td><td>NA</td></tr><tr id="cpu3972" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+SM8150_Plus&amp;id=3972">Qualcomm Technologies, Inc SM8150_Plus
</a></td><td>3,439</td><td>1303</td><td>NA</td><td>NA</td></tr><tr id="cpu3968" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+SM8150P&amp;id=3968">Qualcomm Technologies, Inc SM8150P
</a></td><td>3,827</td><td>1219</td><td>NA</td><td>NA</td></tr><tr id="cpu3949" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+SM8250&amp;id=3949">Qualcomm Technologies, Inc SM8250
</a></td><td>5,031</td><td>1025</td><td>NA</td><td>NA</td></tr><tr id="cpu4241" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+SM8350&amp;id=4241">Qualcomm Technologies, Inc SM8350
</a></td><td>4,659</td><td>1080</td><td>NA</td><td>NA</td></tr><tr id="cpu3977" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Qualcomm+Technologies%2C+Inc+TRINKET&amp;id=3977">Qualcomm Technologies, Inc TRINKET
</a></td><td>2,085</td><td>1812</td><td>NA</td><td>NA</td></tr><tr id="cpu4303" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Renoir+based+on+Qualcomm+Technologies%2C+Inc+SM7350&amp;id=4303">Renoir based on Qualcomm Technologies, Inc SM7350
</a></td><td>4,183</td><td>1153</td><td>NA</td><td>NA</td></tr><tr id="cpu3954" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Rockchip+%28Device+Tree%29&amp;id=3954">Rockchip (Device Tree)
</a></td><td>574</td><td>2964</td><td>NA</td><td>NA</td></tr><tr id="cpu4224" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Rockchip+RK3229&amp;id=4224">Rockchip RK3229
</a></td><td>191</td><td>3409</td><td>NA</td><td>NA</td></tr><tr id="cpu4318" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Rockchip+RK3288&amp;id=4318">Rockchip RK3288
</a></td><td>708</td><td>2821</td><td>NA</td><td>NA</td></tr><tr id="cpu4005" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Rockchip+RK3288+%28Flattened+Device+Tree%29&amp;id=4005">Rockchip RK3288 (Flattened Device Tree)
</a></td><td>508</td><td>3022</td><td>NA</td><td>NA</td></tr><tr id="cpu4075" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Rockchip+RK3326&amp;id=4075">Rockchip RK3326
</a></td><td>260</td><td>3313</td><td>NA</td><td>NA</td></tr><tr id="cpu4295" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Rockchip+RK3328&amp;id=4295">Rockchip RK3328
</a></td><td>356</td><td>3180</td><td>NA</td><td>NA</td></tr><tr id="cpu4145" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Rockchip+RK3368&amp;id=4145">Rockchip RK3368
</a></td><td>702</td><td>2828</td><td>NA</td><td>NA</td></tr><tr id="cpu3987" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Rockchip+RK3399&amp;id=3987">Rockchip RK3399
</a></td><td>2,226</td><td>1741</td><td>NA</td><td>NA</td></tr><tr id="cpu3950" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Samsung+EXYNOS5420&amp;id=3950">Samsung EXYNOS5420
</a></td><td>630</td><td>2901</td><td>NA</td><td>NA</td></tr><tr id="cpu4003" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Samsung+EXYNOS5433&amp;id=4003">Samsung EXYNOS5433
</a></td><td>960</td><td>2594</td><td>NA</td><td>NA</td></tr><tr id="cpu3992" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=SAMSUNG+Exynos7420&amp;id=3992">SAMSUNG Exynos7420
</a></td><td>1,699</td><td>2037</td><td>NA</td><td>NA</td></tr><tr id="cpu4053" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=SAMSUNG+Exynos7580&amp;id=4053">SAMSUNG Exynos7580
</a></td><td>789</td><td>2748</td><td>NA</td><td>NA</td></tr><tr id="cpu3938" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Samsung+Exynos+2100&amp;id=3938">Samsung Exynos 2100
</a></td><td>4,502</td><td>1105</td><td>NA</td><td>NA</td></tr><tr id="cpu4434" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Samsung+Exynos+7420&amp;id=4434">Samsung Exynos 7420
</a></td><td>1,612</td><td>2109</td><td>NA</td><td>NA</td></tr><tr id="cpu4052" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Samsung+Exynos+7570&amp;id=4052">Samsung Exynos 7570
</a></td><td>382</td><td>3148</td><td>NA</td><td>NA</td></tr><tr id="cpu4410" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Samsung+Exynos+7580&amp;id=4410">Samsung Exynos 7580
</a></td><td>869</td><td>2667</td><td>NA</td><td>NA</td></tr><tr id="cpu3994" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Samsung+Exynos+7870&amp;id=3994">Samsung Exynos 7870
</a></td><td>838</td><td>2693</td><td>NA</td><td>NA</td></tr><tr id="cpu4022" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Samsung+Exynos+7880&amp;id=4022">Samsung Exynos 7880
</a></td><td>1,527</td><td>2157</td><td>NA</td><td>NA</td></tr><tr id="cpu4327" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Samsung+Exynos+7884&amp;id=4327">Samsung Exynos 7884
</a></td><td>1,645</td><td>2079</td><td>NA</td><td>NA</td></tr><tr id="cpu3986" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Samsung+Exynos+7885&amp;id=3986">Samsung Exynos 7885
</a></td><td>1,525</td><td>2159</td><td>NA</td><td>NA</td></tr><tr id="cpu3945" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Samsung+Exynos+7904&amp;id=3945">Samsung Exynos 7904
</a></td><td>1,617</td><td>2103</td><td>NA</td><td>NA</td></tr><tr id="cpu3966" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Samsung+Exynos+8890&amp;id=3966">Samsung Exynos 8890
</a></td><td>2,162</td><td>1777</td><td>NA</td><td>NA</td></tr><tr id="cpu3979" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Samsung+Exynos+8895&amp;id=3979">Samsung Exynos 8895
</a></td><td>2,583</td><td>1583</td><td>NA</td><td>NA</td></tr><tr id="cpu3944" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Samsung+Exynos+9610&amp;id=3944">Samsung Exynos 9610
</a></td><td>1,727</td><td>2020</td><td>NA</td><td>NA</td></tr><tr id="cpu4018" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Samsung+Exynos+9611&amp;id=4018">Samsung Exynos 9611
</a></td><td>2,014</td><td>1860</td><td>NA</td><td>NA</td></tr><tr id="cpu3993" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Samsung+Exynos+9810&amp;id=3993">Samsung Exynos 9810
</a></td><td>3,149</td><td>1392</td><td>NA</td><td>NA</td></tr><tr id="cpu3946" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Samsung+Exynos+9820&amp;id=3946">Samsung Exynos 9820
</a></td><td>3,208</td><td>1370</td><td>NA</td><td>NA</td></tr><tr id="cpu3937" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Samsung+Exynos+9825&amp;id=3937">Samsung Exynos 9825
</a></td><td>3,206</td><td>1372</td><td>NA</td><td>NA</td></tr><tr id="cpu3998" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Samsung+GrandPrimePlus+LTE+CIS+rev04+board+based+o&amp;id=3998">Samsung GrandPrimePlus LTE CIS rev04 board based o
</a></td><td>312</td><td>3235</td><td>NA</td><td>NA</td></tr><tr id="cpu4312" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Samsung+GrandPrimePlus+LTE+LTN+OPEN+rev04+board+ba&amp;id=4312">Samsung GrandPrimePlus LTE LTN OPEN rev04 board ba
</a></td><td>415</td><td>3111</td><td>NA</td><td>NA</td></tr><tr id="cpu4283" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Samsung+J7+Max+LTE+SWA+board+based+on+MT6757V%2FWL&amp;id=4283">Samsung J7 Max LTE SWA board based on MT6757V/WL
</a></td><td>1,104</td><td>2459</td><td>NA</td><td>NA</td></tr><tr id="cpu4100" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=SAMSUNG+JF&amp;id=4100">SAMSUNG JF
</a></td><td>459</td><td>3072</td><td>NA</td><td>NA</td></tr><tr id="cpu4411" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=SAMSUNG+SERRANO&amp;id=4411">SAMSUNG SERRANO
</a></td><td>238</td><td>3342</td><td>NA</td><td>NA</td></tr><tr id="cpu4439" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=SMDK4x12&amp;id=4439">SMDK4x12
</a></td><td>3,006</td><td>1432</td><td>NA</td><td>NA</td></tr><tr id="cpu4194" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Snapdragon+7c+%40+2.40+GHz&amp;id=4194">Snapdragon 7c @ 2.40 GHz
</a></td><td>2,349</td><td>1675</td><td>NA</td><td>NA</td></tr><tr id="cpu4394" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Snapdragon+7c+Gen+2+%40+2.55&amp;id=4394">Snapdragon 7c Gen 2 @ 2.55
</a></td><td>2,477</td><td>1621</td><td>NA</td><td>NA</td></tr><tr id="cpu4112" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Snapdragon+8cx+%40+2.84+GHz&amp;id=4112">Snapdragon 8cx @ 2.84 GHz
</a></td><td>3,655</td><td>1258</td><td>NA</td><td>NA</td></tr><tr id="cpu4195" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Snapdragon+8cx+Gen+2+%40+3.1&amp;id=4195">Snapdragon 8cx Gen 2 @ 3.1
</a></td><td>4,103</td><td>1172</td><td>NA</td><td>NA</td></tr><tr id="cpu4172" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Snapdragon+835&amp;id=4172">Snapdragon 835
</a></td><td>1,759</td><td>2001</td><td>NA</td><td>NA</td></tr><tr id="cpu4209" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Snapdragon+850+%40+2.96+GHz&amp;id=4209">Snapdragon 850 @ 2.96 GHz
</a></td><td>2,192</td><td>1762</td><td>NA</td><td>NA</td></tr><tr id="cpu4109" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Sony+Mobile+fusion3&amp;id=4109">Sony Mobile fusion3
</a></td><td>428</td><td>3101</td><td>NA</td><td>NA</td></tr><tr id="cpu4087" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Spreadtrum+SC7731e&amp;id=4087">Spreadtrum SC7731e
</a></td><td>275</td><td>3286</td><td>NA</td><td>NA</td></tr><tr id="cpu4179" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Spreadtrum+SC9853I-IA&amp;id=4179">Spreadtrum SC9853I-IA
</a></td><td>766</td><td>2771</td><td>NA</td><td>NA</td></tr><tr id="cpu4299" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Star+based+on+Qualcomm+Technologies%2C+Inc+SM8350&amp;id=4299">Star based on Qualcomm Technologies, Inc SM8350
</a></td><td>4,835</td><td>1053</td><td>NA</td><td>NA</td></tr><tr id="cpu4256" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=tn8&amp;id=4256">tn8
</a></td><td>945</td><td>2605</td><td>NA</td><td>NA</td></tr><tr id="cpu4320" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Unisoc+SC7731e&amp;id=4320">Unisoc SC7731e
</a></td><td>296</td><td>3252</td><td>NA</td><td>NA</td></tr><tr id="cpu4196" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Unisoc+SC9832e&amp;id=4196">Unisoc SC9832e
</a></td><td>441</td><td>3090</td><td>NA</td><td>NA</td></tr><tr id="cpu3981" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Unisoc+SC9863a&amp;id=3981">Unisoc SC9863a
</a></td><td>1,304</td><td>2300</td><td>NA</td><td>NA</td></tr><tr id="cpu4033" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Unisoc+T618&amp;id=4033">Unisoc T618
</a></td><td>2,045</td><td>1835</td><td>NA</td><td>NA</td></tr><tr id="cpu4180" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=Unisoc+UIS8581E&amp;id=4180">Unisoc UIS8581E
</a></td><td>1,279</td><td>2314</td><td>NA</td><td>NA</td></tr><tr id="cpu4321" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Unisoc+ums512&amp;id=4321">Unisoc ums512
</a></td><td>2,034</td><td>1844</td><td>NA</td><td>NA</td></tr><tr id="cpu4219" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=UNIVERSAL3475&amp;id=4219">UNIVERSAL3475
</a></td><td>267</td><td>3299</td><td>NA</td><td>NA</td></tr><tr id="cpu4495" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=vendor+Kirin990&amp;id=4495">vendor Kirin990
</a></td><td>4,366</td><td>1127</td><td>NA</td><td>NA</td></tr><tr id="cpu4498" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=vendor+Kirin9000&amp;id=4498">vendor Kirin9000
</a></td><td>4,849</td><td>1049</td><td>NA</td><td>NA</td></tr><tr id="cpu4045" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=Venus+based+on+Qualcomm+Technologies%2C+Inc+SM8350&amp;id=4045">Venus based on Qualcomm Technologies, Inc SM8350
</a></td><td>4,851</td><td>1048</td><td>NA</td><td>NA</td></tr><tr id="cpu1413" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=VIA+C7-D+1800MHz&amp;id=1413">VIA C7-D 1800MHz
</a></td><td>150</td><td>3469</td><td>NA</td><td>NA</td></tr><tr id="cpu1414" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=VIA+C7-M+1200MHz&amp;id=1414">VIA C7-M 1200MHz
</a></td><td>112</td><td>3511</td><td>NA</td><td>NA</td></tr><tr id="cpu1415" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=VIA+C7-M+1600MHz&amp;id=1415">VIA C7-M 1600MHz
</a></td><td>116</td><td>3506</td><td>NA</td><td>NA</td></tr><tr id="cpu1416" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=VIA+C7-M+6300MHz&amp;id=1416">VIA C7-M 6300MHz
</a></td><td>145</td><td>3474</td><td>NA</td><td>NA</td></tr><tr id="cpu3147" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=VIA+Eden+1000MHz&amp;id=3147">VIA Eden 1000MHz
</a></td><td>80</td><td>3527</td><td>NA</td><td>NA</td></tr><tr id="cpu3013" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=VIA+Eden+1200MHz&amp;id=3013">VIA Eden 1200MHz
</a></td><td>93</td><td>3521</td><td>NA</td><td>NA</td></tr><tr id="cpu3116" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=VIA+Eden+C1050%401.06GHz&amp;id=3116">VIA Eden C1050@1.06GHz
</a></td><td>263</td><td>3304</td><td>NA</td><td>NA</td></tr><tr id="cpu1835" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=VIA+Eden+X2+U4200+%40+1.0%2B+GHz&amp;id=1835">VIA Eden X2 U4200 @ 1.0+ GHz
</a></td><td>315</td><td>3227</td><td>NA</td><td>NA</td></tr><tr id="cpu2554" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=VIA+Eden+X4+C4250+%40+1.2%2BGHz&amp;id=2554">VIA Eden X4 C4250 @ 1.2+GHz
</a></td><td>944</td><td>2606</td><td>NA</td><td>NA</td></tr><tr id="cpu1418" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=VIA+Esther+1000MHz&amp;id=1418">VIA Esther 1000MHz
</a></td><td>95</td><td>3519</td><td>NA</td><td>NA</td></tr><tr id="cpu1420" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=VIA+Esther+1500MHz&amp;id=1420">VIA Esther 1500MHz
</a></td><td>135</td><td>3486</td><td>NA</td><td>NA</td></tr><tr id="cpu1421" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=VIA+Nano+L2007%401600MHz&amp;id=1421">VIA Nano L2007@1600MHz
</a></td><td>254</td><td>3320</td><td>NA</td><td>NA</td></tr><tr id="cpu1768" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=VIA+Nano+L2100%401800MHz&amp;id=1768">VIA Nano L2100@1800MHz
</a></td><td>279</td><td>3281</td><td>NA</td><td>NA</td></tr><tr id="cpu2140" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=VIA+Nano+L2207%401600MHz&amp;id=2140">VIA Nano L2207@1600MHz
</a></td><td>165</td><td>3438</td><td>NA</td><td>NA</td></tr><tr id="cpu1422" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=VIA+Nano+U2250+%281.6GHz+Capable%29&amp;id=1422">VIA Nano U2250 (1.6GHz Capable)
</a></td><td>270</td><td>3291</td><td>NA</td><td>NA</td></tr><tr id="cpu1423" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=VIA+Nano+U2250%401300%2BMHz&amp;id=1423">VIA Nano U2250@1300+MHz
</a></td><td>179</td><td>3424</td><td>NA</td><td>NA</td></tr><tr id="cpu1490" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=VIA+Nano+U2500%401200MHz&amp;id=1490">VIA Nano U2500@1200MHz
</a></td><td>199</td><td>3394</td><td>NA</td><td>NA</td></tr><tr id="cpu1491" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=VIA+Nano+U3500%401000MHz&amp;id=1491">VIA Nano U3500@1000MHz
</a></td><td>184</td><td>3413</td><td>NA</td><td>NA</td></tr><tr id="cpu1981" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=VIA+Nano+X2+U4025+%40+1.2+GHz&amp;id=1981">VIA Nano X2 U4025 @ 1.2 GHz
</a></td><td>393</td><td>3136</td><td>NA</td><td>NA</td></tr><tr id="cpu1425" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=VIA+Nehemiah&amp;id=1425">VIA Nehemiah
</a></td><td>101</td><td>3514</td><td>NA</td><td>NA</td></tr><tr id="cpu2618" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=VIA+QuadCore+C4650%402.0GHz&amp;id=2618">VIA QuadCore C4650@2.0GHz
</a></td><td>1,323</td><td>2286</td><td>NA</td><td>NA</td></tr><tr id="cpu1932" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=VIA+QuadCore+L4700+%40+1.2%2B+GHz&amp;id=1932">VIA QuadCore L4700 @ 1.2+ GHz
</a></td><td>773</td><td>2761</td><td>NA</td><td>NA</td></tr><tr id="cpu1818" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=VIA+QuadCore+U4650+%40+1.0%2B+GHz&amp;id=1818">VIA QuadCore U4650 @ 1.0+ GHz
</a></td><td>666</td><td>2864</td><td>NA</td><td>NA</td></tr><tr id="cpu3872" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=ZHAOXIN+KaiXian+KX-6640MA%402.2%2BGHz&amp;id=3872">ZHAOXIN KaiXian KX-6640MA@2.2+GHz
</a></td><td>1,601</td><td>2119</td><td>NA</td><td>NA</td></tr><tr id="cpu4162" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=ZHAOXIN+KaiXian+KX-U6580%402.5GHz&amp;id=4162">ZHAOXIN KaiXian KX-U6580@2.5GHz
</a></td><td>3,066</td><td>1419</td><td>NA</td><td>NA</td></tr><tr id="cpu3515" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=ZHAOXIN+KaiXian+KX-U6780A%402.7GHz&amp;id=3515">ZHAOXIN KaiXian KX-U6780A@2.7GHz
</a></td><td>3,744</td><td>1239</td><td>NA</td><td>NA</td></tr><tr id="cpu3576" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=ZHAOXIN+KaiXian+ZX-C%2B+C4700%402.0GHz&amp;id=3576">ZHAOXIN KaiXian ZX-C+ C4700@2.0GHz</a><div class="div-to-display"><button onclick="myCmp.addCPU(3576, 'ZHAOXIN KaiXian ZX-C+ C4700@2.0GHz' );">&gt;&gt; Compare</button></div></td><td>1,547</td><td>2145</td><td>NA</td><td>NA</td></tr></tbody>
<a href="cpu_lookup.php?cpu=AMD+Phenom+X4+Quad-Core+GP-9600&amp;id=1581">AMD Phenom X4 Quad-Core GP-9600
</a></td><td>1,649</td><td>2075</td><td>NA</td><td>NA</td></tr><tr id="cpu2862" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Phenom+X4+Quad-Core+GP-9730&amp;id=2862">AMD Phenom X4 Quad-Core GP-9730
</a></td><td>1,784</td><td>1988</td><td>NA</td><td>NA</td></tr><tr id="cpu2559" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Phenom+X4+Quad-Core+GS-6560&amp;id=2559">AMD Phenom X4 Quad-Core GS-6560
</a></td><td>1,063</td><td>2495</td><td>NA</td><td>NA</td></tr><tr id="cpu2802" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+PRO+A4-3350B+APU&amp;id=2802">AMD PRO A4-3350B APU
</a></td><td>1,671</td><td>2060</td><td>NA</td><td>NA</td></tr><tr id="cpu3597" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+PRO+A4-4350B&amp;id=3597">AMD PRO A4-4350B
</a></td><td>1,093</td><td>2466</td><td>NA</td><td>NA</td></tr><tr id="cpu2714" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+PRO+A4-8350B&amp;id=2714">AMD PRO A4-8350B
</a></td><td>1,733</td><td>2017</td><td>

<a href="cpu.php?cpu=AMD+PRO+A4-8350B&amp;id=2714#price">59.77
</a></td><td>

<a href="cpu.php?cpu=AMD+PRO+A4-8350B&amp;id=2714#price">$28.99*</a></td></tr><tr id="cpu3210" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+PRO+A6-7350B&amp;id=3210">AMD PRO A6-7350B
</a></td><td>1,679</td><td>2056</td><td>NA</td><td>NA</td></tr><tr id="cpu2695" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+PRO+A6-8500B&amp;id=2695">AMD PRO A6-8500B
</a></td><td>1,704</td><td>2032</td><td>NA</td><td>NA</td></tr><tr id="cpu2947" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+PRO+A6-8530B&amp;id=2947">AMD PRO A6-8530B
</a></td><td>1,498</td><td>2177</td><td>NA</td><td>NA</td></tr><tr id="cpu2821" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+PRO+A6-8550B&amp;id=2821">AMD PRO A6-8550B
</a></td><td>1,885</td><td>1935</td><td>NA</td><td>NA</td></tr><tr id="cpu2949" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+PRO+A6-8570&amp;id=2949">AMD PRO A6-8570
</a></td><td>1,844</td><td>1958</td><td>NA</td><td>NA</td></tr><tr id="cpu2926" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+PRO+A6-8570E&amp;id=2926">AMD PRO A6-8570E
</a></td><td>1,489</td><td>2182</td><td>NA</td><td>NA</td></tr><tr id="cpu2942" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+PRO+A6-9500&amp;id=2942">AMD PRO A6-9500
</a></td><td>1,884</td><td>1936</td><td>

<a href="cpu.php?cpu=AMD+PRO+A6-9500&amp;id=2942#price">25.46
</a></td><td>

<a href="cpu.php?cpu=AMD+PRO+A6-9500&amp;id=2942#price">$74.00*</a></td></tr><tr id="cpu2981" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+PRO+A6-9500B&amp;id=2981">AMD PRO A6-9500B
</a></td><td>1,340</td><td>2264</td><td>NA</td><td>NA</td></tr><tr id="cpu2950" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+PRO+A6-9500E&amp;id=2950">AMD PRO A6-9500E
</a></td><td>1,662</td><td>2066</td><td>

<a href="cpu.php?cpu=AMD+PRO+A6-9500E&amp;id=2950#price">22.46
</a></td><td>

<a href="cpu.php?cpu=AMD+PRO+A6-9500E&amp;id=2950#price">$74.00*</a></td></tr><tr id="cpu2652" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+PRO+A8-8600B&amp;id=2652">AMD PRO A8-8600B
</a></td><td>2,262</td><td>1714</td><td>NA</td><td>NA</td></tr><tr id="cpu2650" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+PRO+A8-8650B&amp;id=2650">AMD PRO A8-8650B
</a></td><td>3,219</td><td>1368</td><td>NA</td><td>NA</td></tr><tr id="cpu3071" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+PRO+A8-8670E&amp;id=3071">AMD PRO A8-8670E
</a></td><td>2,989</td><td>1438</td><td>NA</td><td>NA</td></tr><tr id="cpu2860" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+PRO+A8-9600&amp;id=2860">AMD PRO A8-9600
</a></td><td>3,347</td><td>1323</td><td>

<a href="cpu.php?cpu=AMD+PRO+A8-9600&amp;id=2860#price">28.13
</a></td><td>

<a href="cpu.php?cpu=AMD+PRO+A8-9600&amp;id=2860#price">$119.00*</a></td></tr><tr id="cpu2940" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+PRO+A8-9600B&amp;id=2940">AMD PRO A8-9600B
</a></td><td>2,379</td><td>1658</td><td>NA</td><td>NA</td></tr><tr id="cpu2648" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=AMD+PRO+A10-8700B&amp;id=2648">AMD PRO A10-8700B
</a></td><td>2,242</td><td>1726</td><td>NA</td><td>NA</td></tr><tr id="cpu2909" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+PRO+A10-8730B&amp;id=2909">AMD PRO A10-8730B
</a></td><td>2,322</td><td>1688</td><td>NA</td><td>NA</td></tr><tr id="cpu2647" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=AMD+PRO+A10-8750B&amp;id=2647">AMD PRO A10-8750B
</a></td><td>2,824</td><td>1500</td><td>NA</td><td>NA</td></tr><tr id="cpu2945" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+PRO+A10-8770&amp;id=2945">AMD PRO A10-8770
</a></td><td>3,518</td><td>1288</td><td>NA</td><td>NA</td></tr><tr id="cpu2946" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=AMD+PRO+A10-8770E&amp;id=2946">AMD PRO A10-8770E
</a></td><td>3,101</td><td>1405</td><td>NA</td><td>NA</td></tr><tr id="cpu2694" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+PRO+A10-8850B&amp;id=2694">AMD PRO A10-8850B
</a></td><td>3,752</td><td>1235</td><td>NA</td><td>NA</td></tr><tr id="cpu2883" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=AMD+PRO+A10-9700&amp;id=2883">AMD PRO A10-9700
</a></td><td>3,603</td><td>1271</td><td>

<a href="cpu.php?cpu=AMD+PRO+A10-9700&amp;id=2883#price">21.32
</a></td><td>

<a href="cpu.php?cpu=AMD+PRO+A10-9700&amp;id=2883#price">$169.00*</a></td></tr><tr id="cpu3168" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+PRO+A10-9700B&amp;id=3168">AMD PRO A10-9700B
</a></td><td>2,602</td><td>1575</td><td>NA</td><td>NA</td></tr><tr id="cpu2824" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=AMD+PRO+A10-9700E&amp;id=2824">AMD PRO A10-9700E
</a></td><td>3,087</td><td>1410</td><td>

<a href="cpu.php?cpu=AMD+PRO+A10-9700E&amp;id=2824#price">22.21
</a></td><td>

<a href="cpu.php?cpu=AMD+PRO+A10-9700E&amp;id=2824#price">$139.00*</a></td></tr><tr id="cpu2610" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+PRO+A12-8800B&amp;id=2610">AMD PRO A12-8800B
</a></td><td>2,741</td><td>1531</td><td>NA</td><td>NA</td></tr><tr id="cpu3088" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=AMD+PRO+A12-8830B&amp;id=3088">AMD PRO A12-8830B
</a></td><td>2,392</td><td>1655</td><td>NA</td><td>NA</td></tr><tr id="cpu2937" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+PRO+A12-8870&amp;id=2937">AMD PRO A12-8870
</a></td><td>3,848</td><td>1215</td><td>NA</td><td>NA</td></tr><tr id="cpu2882" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=AMD+PRO+A12-8870E&amp;id=2882">AMD PRO A12-8870E
</a></td><td>3,014</td><td>1430</td><td>NA</td><td>NA</td></tr><tr id="cpu2939" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+PRO+A12-9800&amp;id=2939">AMD PRO A12-9800
</a></td><td>3,878</td><td>1213</td><td>

<a href="cpu.php?cpu=AMD+PRO+A12-9800&amp;id=2939#price">22.95
</a></td><td>

<a href="cpu.php?cpu=AMD+PRO+A12-9800&amp;id=2939#price">$169.00*</a></td></tr><tr id="cpu2840" role="row" class="even"><td>
<a href="cpu_lookup.php?cpu=AMD+PRO+A12-9800B&amp;id=2840">AMD PRO A12-9800B
</a></td><td>2,696</td><td>1546</td><td>NA</td><td>NA</td></tr><tr id="cpu2944" class="alt odd" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+PRO+A12-9800E&amp;id=2944">AMD PRO A12-9800E
</a></td><td>3,191</td><td>1373</td><td>

<a href="cpu.php?cpu=AMD+PRO+A12-9800E&amp;id=2944#price">18.88
</a></td><td>

<a href="cpu.php?cpu=AMD+PRO+A12-9800E&amp;id=2944#price">$169.00*</a></td></tr><tr id="cpu2529" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+QC-4000&amp;id=2529">AMD QC-4000
</a></td><td>1,155</td><td>2416</td><td>NA</td><td>NA</td></tr><tr id="cpu2927" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+R-260H+APU&amp;id=2927">AMD R-260H APU
</a></td><td>954</td><td>2601</td><td>NA</td><td>NA</td></tr><tr id="cpu3616" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+R-272F+APU&amp;id=3616">AMD R-272F APU
</a></td><td>1,215</td><td>2368</td><td>NA</td><td>NA</td></tr><tr id="cpu2486" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+R-460L+APU&amp;id=2486">AMD R-460L APU
</a></td><td>1,183</td><td>2389</td><td>NA</td><td>NA</td></tr><tr id="cpu1438" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+R-464L+APU&amp;id=1438">AMD R-464L APU
</a></td><td>1,773</td><td>1991</td><td>NA</td><td>NA</td></tr><tr id="cpu4280" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+RX-425BB&amp;id=4280">AMD RX-425BB
</a></td><td>2,696</td><td>1548</td><td>NA</td><td>NA</td></tr><tr id="cpu2496" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+RX-427BB&amp;id=2496">AMD RX-427BB
</a></td><td>2,726</td><td>1534</td><td>NA</td><td>NA</td></tr><tr id="cpu3029" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+1200&amp;id=3029">AMD Ryzen 3 1200
</a></td><td>6,279</td><td>861</td><td>

<a href="cpu.php?cpu=AMD+Ryzen+3+1200&amp;id=3029#price">57.59
</a></td><td>

<a href="cpu.php?cpu=AMD+Ryzen+3+1200&amp;id=3029#price">$109.02</a></td></tr><tr id="cpu3057" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+1300X&amp;id=3057">AMD Ryzen 3 1300X
</a></td><td>6,888</td><td>785</td><td>

<a href="cpu.php?cpu=AMD+Ryzen+3+1300X&amp;id=3057#price">55.65
</a></td><td>

<a href="cpu.php?cpu=AMD+Ryzen+3+1300X&amp;id=3057#price">$123.77</a></td></tr><tr id="cpu3186" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+2200G&amp;id=3186">AMD Ryzen 3 2200G
</a></td><td>6,771</td><td>800</td><td>

<a href="cpu.php?cpu=AMD+Ryzen+3+2200G&amp;id=3186#price">29.44
</a></td><td>

<a href="cpu.php?cpu=AMD+Ryzen+3+2200G&amp;id=3186#price">$229.98</a></td></tr><tr id="cpu3301" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+2200GE&amp;id=3301">AMD Ryzen 3 2200GE
</a></td><td>6,433</td><td>837</td><td>NA</td><td>NA</td></tr><tr id="cpu3152" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+2200U&amp;id=3152">AMD Ryzen 3 2200U
</a></td><td>3,688</td><td>1251</td><td>NA</td><td>NA</td></tr><tr id="cpu3290" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+2300U&amp;id=3290">AMD Ryzen 3 2300U
</a></td><td>5,467</td><td>961</td><td>NA</td><td>NA</td></tr><tr id="cpu3395" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+2300X&amp;id=3395">AMD Ryzen 3 2300X
</a></td><td>7,498</td><td>700</td><td>

<a href="cpu.php?cpu=AMD+Ryzen+3+2300X&amp;id=3395#price">42.10
</a></td><td>

<a href="cpu.php?cpu=AMD+Ryzen+3+2300X&amp;id=3395#price">$178.09*</a></td></tr><tr id="cpu3715" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+3100&amp;id=3715">AMD Ryzen 3 3100
</a></td><td>11,704</td><td>447</td><td>

<a href="cpu.php?cpu=AMD+Ryzen+3+3100&amp;id=3715#price">46.82
</a></td><td>

<a href="cpu.php?cpu=AMD+Ryzen+3+3100&amp;id=3715#price">$250.00</a></td></tr><tr id="cpu3497" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+3200G&amp;id=3497">AMD Ryzen 3 3200G
</a></td><td>7,222</td><td>735</td><td>

<a href="cpu.php?cpu=AMD+Ryzen+3+3200G&amp;id=3497#price">34.08
</a></td><td>
<a href="cpu.php?cpu=AMD+Ryzen+3+3200G&amp;id=3497#price">$211.89</a></td></tr><tr id="cpu3779" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+3200GE&amp;id=3779">AMD Ryzen 3 3200GE
</a></td><td>7,413</td><td>711</td><td>NA</td><td>NA</td></tr><tr id="cpu3431" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+3200U&amp;id=3431">AMD Ryzen 3 3200U
</a></td><td>3,961</td><td>1202</td><td>NA</td><td>NA</td></tr><tr id="cpu3722" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+3250U&amp;id=3722">AMD Ryzen 3 3250U
</a></td><td>4,116</td><td>1169</td><td>NA</td><td>NA</td></tr><tr id="cpu3520" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+3300U&amp;id=3520">AMD Ryzen 3 3300U
</a></td><td>5,875</td><td>916</td><td>NA</td><td>NA</td></tr><tr id="cpu3716" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+3300X&amp;id=3716">AMD Ryzen 3 3300X
</a></td><td>12,764</td><td>409</td><td>
<a href="cpu.php?cpu=AMD+Ryzen+3+3300X&amp;id=3716#price">67.18
</a></td><td>
<a href="cpu.php?cpu=AMD+Ryzen+3+3300X&amp;id=3716#price">$189.99</a></td></tr><tr id="cpu4395" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+3350U&amp;id=4395">AMD Ryzen 3 3350U
</a></td><td>5,939</td><td>909</td><td>NA</td><td>NA</td></tr><tr id="cpu3808" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+4300G&amp;id=3808">AMD Ryzen 3 4300G
</a></td><td>11,102</td><td>474</td><td>NA</td><td>NA</td></tr><tr id="cpu3865" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+4300GE&amp;id=3865">AMD Ryzen 3 4300GE
</a></td><td>11,411</td><td>462</td><td>NA</td><td>NA</td></tr><tr id="cpu3664" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+4300U&amp;id=3664">AMD Ryzen 3 4300U
</a></td><td>8,083</td><td>645</td><td>NA</td><td>NA</td></tr><tr id="cpu4392" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+5300G&amp;id=4392">AMD Ryzen 3 5300G
</a></td><td>13,932</td><td>372</td><td>NA</td><td>NA</td></tr><tr id="cpu4389" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+5300GE&amp;id=4389">AMD Ryzen 3 5300GE
</a></td><td>13,843</td><td>375</td><td>NA</td><td>NA</td></tr><tr id="cpu4288" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+5300U&amp;id=4288">AMD Ryzen 3 5300U
</a></td><td>9,978</td><td>527</td><td>NA</td><td>NA</td></tr><tr id="cpu4178" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+5400U&amp;id=4178">AMD Ryzen 3 5400U
</a></td><td>12,110</td><td>432</td><td>NA</td><td>NA</td></tr><tr id="cpu3073" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+PRO+1200&amp;id=3073">AMD Ryzen 3 PRO 1200
</a></td><td>6,376</td><td>846</td><td>NA</td><td>NA</td></tr><tr id="cpu3074" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+PRO+1300&amp;id=3074">AMD Ryzen 3 PRO 1300
</a></td><td>7,717</td><td>679</td><td>NA</td><td>NA</td></tr><tr id="cpu3452" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+PRO+2100GE&amp;id=3452">AMD Ryzen 3 PRO 2100GE
</a></td><td>4,308</td><td>1135</td><td>NA</td><td>NA</td></tr><tr id="cpu3216" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+PRO+2200G&amp;id=3216">AMD Ryzen 3 PRO 2200G
</a></td><td>6,688</td><td>808</td><td>NA</td><td>NA</td></tr><tr id="cpu3267" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+PRO+2200GE&amp;id=3267">AMD Ryzen 3 PRO 2200GE
</a></td><td>6,177</td><td>873</td><td>NA</td><td>NA</td></tr><tr id="cpu3263" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+PRO+2300U&amp;id=3263">AMD Ryzen 3 PRO 2300U
</a></td><td>6,157</td><td>876</td><td>NA</td><td>NA</td></tr><tr id="cpu3570" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+PRO+3200G&amp;id=3570">AMD Ryzen 3 PRO 3200G
</a></td><td>7,071</td><td>754</td><td>NA</td><td>NA</td></tr><tr id="cpu3496" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+PRO+3200GE&amp;id=3496">AMD Ryzen 3 PRO 3200GE
</a></td><td>7,071</td><td>753</td><td>NA</td><td>NA</td></tr><tr id="cpu3450" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+PRO+3300U&amp;id=3450">AMD Ryzen 3 PRO 3300U
</a></td><td>5,963</td><td>902</td><td>NA</td><td>NA</td></tr><tr id="cpu4088" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+PRO+4200G&amp;id=4088">AMD Ryzen 3 PRO 4200G
</a></td><td>11,315</td><td>464</td><td>NA</td><td>NA</td></tr><tr id="cpu3874" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+PRO+4200GE&amp;id=3874">AMD Ryzen 3 PRO 4200GE
</a></td><td>11,006</td><td>477</td><td>NA</td><td>NA</td></tr><tr id="cpu3794" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+PRO+4350G&amp;id=3794">AMD Ryzen 3 PRO 4350G
</a></td><td>10,833</td><td>489</td><td>NA</td><td>NA</td></tr><tr id="cpu3791" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+PRO+4350GE&amp;id=3791">AMD Ryzen 3 PRO 4350GE
</a></td><td>11,420</td><td>461</td><td>NA</td><td>NA</td></tr><tr id="cpu3816" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+PRO+4450U&amp;id=3816">AMD Ryzen 3 PRO 4450U
</a></td><td>10,013</td><td>525</td><td>NA</td><td>NA</td></tr><tr id="cpu4382" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+PRO+5350G&amp;id=4382">AMD Ryzen 3 PRO 5350G
</a></td><td>14,025</td><td>366</td><td>NA</td><td>NA</td></tr><tr id="cpu4384" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+PRO+5350GE&amp;id=4384">AMD Ryzen 3 PRO 5350GE
</a></td><td>13,707</td><td>379</td><td>NA</td><td>NA</td></tr><tr id="cpu4408" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+3+PRO+5450U&amp;id=4408">AMD Ryzen 3 PRO 5450U
</a></td><td>12,047</td><td>435</td><td>NA</td><td>NA</td></tr><tr id="cpu2992" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+1400&amp;id=2992">AMD Ryzen 5 1400
</a></td><td>7,819</td><td>668</td><td>
<a href="cpu.php?cpu=AMD+Ryzen+5+1400&amp;id=2992#price">80.37
</a></td><td>
<a href="cpu.php?cpu=AMD+Ryzen+5+1400&amp;id=2992#price">$97.29</a></td></tr><tr id="cpu3001" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+1500X&amp;id=3001">AMD Ryzen 5 1500X
</a></td><td>9,066</td><td>580</td><td>
<a href="cpu.php?cpu=AMD+Ryzen+5+1500X&amp;id=3001#price">75.82
</a></td><td>
<a href="cpu.php?cpu=AMD+Ryzen+5+1500X&amp;id=3001#price">$119.57</a></td></tr><tr id="cpu2984" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+1600&amp;id=2984">AMD Ryzen 5 1600
</a></td><td>12,351</td><td>423</td><td>
<a href="cpu.php?cpu=AMD+Ryzen+5+1600&amp;id=2984#price">98.09
</a></td><td>
<a href="cpu.php?cpu=AMD+Ryzen+5+1600&amp;id=2984#price">$125.92</a></td></tr><tr id="cpu3000" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+1600X&amp;id=3000">AMD Ryzen 5 1600X
</a></td><td>13,044</td><td>400</td><td>
<a href="cpu.php?cpu=AMD+Ryzen+5+1600X&amp;id=3000#price">96.58
</a></td><td>
<a href="cpu.php?cpu=AMD+Ryzen+5+1600X&amp;id=3000#price">$135.06</a></td></tr><tr id="cpu3183" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+2400G&amp;id=3183">AMD Ryzen 5 2400G
</a></td><td>8,739</td><td>602</td><td>
<a href="cpu.php?cpu=AMD+Ryzen+5+2400G&amp;id=3183#price">41.66
</a></td><td>
<a href="cpu.php?cpu=AMD+Ryzen+5+2400G&amp;id=3183#price">$209.79</a></td></tr><tr id="cpu3284" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+2400GE&amp;id=3284">AMD Ryzen 5 2400GE
</a></td><td>7,948</td><td>657</td><td>NA</td><td>NA</td></tr><tr id="cpu3123" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+2500U&amp;id=3123">AMD Ryzen 5 2500U
</a></td><td>6,605</td><td>815</td><td>NA</td><td>NA</td></tr><tr id="cpu3410" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+2500X&amp;id=3410">AMD Ryzen 5 2500X
</a></td><td>9,407</td><td>556</td><td>NA</td><td>NA</td></tr><tr id="cpu3243" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+2600&amp;id=3243">AMD Ryzen 5 2600
</a></td><td>13,214</td><td>396</td><td>
<a href="cpu.php?cpu=AMD+Ryzen+5+2600&amp;id=3243#price">70.29
</a></td><td>
<a href="cpu.php?cpu=AMD+Ryzen+5+2600&amp;id=3243#price">$187.99</a></td></tr><tr id="cpu3415" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+2600H&amp;id=3415">AMD Ryzen 5 2600H
</a></td><td>7,537</td><td>697</td><td>NA</td><td>NA</td></tr><tr id="cpu3235" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+2600X&amp;id=3235">AMD Ryzen 5 2600X
</a></td><td>14,078</td><td>363</td><td>
<a href="cpu.php?cpu=AMD+Ryzen+5+2600X&amp;id=3235#price">89.11
</a></td><td>
<a href="cpu.php?cpu=AMD+Ryzen+5+2600X&amp;id=3235#price">$157.98</a></td></tr><tr id="cpu3879" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+3350G&amp;id=3879">AMD Ryzen 5 3350G
</a></td><td>9,036</td><td>584</td><td>NA</td><td>NA</td></tr><tr id="cpu3804" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+3350GE&amp;id=3804">AMD Ryzen 5 3350GE
</a></td><td>9,684</td><td>543</td><td>NA</td><td>NA</td></tr><tr id="cpu3498" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+3400G&amp;id=3498">AMD Ryzen 5 3400G
</a></td><td>9,354</td><td>560</td><td>
<a href="cpu.php?cpu=AMD+Ryzen+5+3400G&amp;id=3498#price">39.28
</a></td><td>
<a href="cpu.php?cpu=AMD+Ryzen+5+3400G&amp;id=3498#price">$238.14</a></td></tr><tr id="cpu3690" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+3400GE&amp;id=3690">AMD Ryzen 5 3400GE
</a></td><td>9,028</td><td>585</td><td>NA</td><td>NA</td></tr><tr id="cpu3881" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+3450U&amp;id=3881">AMD Ryzen 5 3450U
</a></td><td>7,010</td><td>766</td><td>NA</td><td>NA</td></tr><tr id="cpu3588" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+3500&amp;id=3588">AMD Ryzen 5 3500
</a></td><td>12,911</td><td>406</td><td>NA</td><td>NA</td></tr><tr id="cpu4376" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+3500C&amp;id=4376">AMD Ryzen 5 3500C
</a></td><td>3,889</td><td>1208</td><td>NA</td><td>NA</td></tr><tr id="cpu3421" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+3500U&amp;id=3421">AMD Ryzen 5 3500U
</a></td><td>7,936</td><td>658</td><td>NA</td><td>NA</td></tr><tr id="cpu3592" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+3500X&amp;id=3592">AMD Ryzen 5 3500X
</a></td><td>13,368</td><td>389</td><td>
<a href="cpu.php?cpu=AMD+Ryzen+5+3500X&amp;id=3592#price">77.33
</a></td><td>
<a href="cpu.php?cpu=AMD+Ryzen+5+3500X&amp;id=3592#price">$172.88</a></td></tr><tr id="cpu3403" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+3550H&amp;id=3403">AMD Ryzen 5 3550H
</a></td><td>8,070</td><td>646</td><td>NA</td><td>NA</td></tr><tr id="cpu3776" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+3550U&amp;id=3776">AMD Ryzen 5 3550U
</a></td><td>7,681</td><td>683</td><td>NA</td><td>NA</td></tr><tr id="cpu3577" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+3580U&amp;id=3577">AMD Ryzen 5 3580U
</a></td><td>7,797</td><td>670</td><td>NA</td><td>NA</td></tr><tr id="cpu3481" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+3600&amp;id=3481">AMD Ryzen 5 3600
</a></td><td>17,859</td><td>254</td><td>
<a href="cpu.php?cpu=AMD+Ryzen+5+3600&amp;id=3481#price">90.55
</a></td><td>
<a href="cpu.php?cpu=AMD+Ryzen+5+3600&amp;id=3481#price">$197.22</a></td></tr><tr id="cpu3494" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+3600X&amp;id=3494">AMD Ryzen 5 3600X
</a></td><td>18,311</td><td>242</td><td>
<a href="cpu.php?cpu=AMD+Ryzen+5+3600X&amp;id=3494#price">78.82
</a></td><td>
<a href="cpu.php?cpu=AMD+Ryzen+5+3600X&amp;id=3494#price">$232.32</a></td></tr><tr id="cpu3781" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+3600XT&amp;id=3781">AMD Ryzen 5 3600XT
</a></td><td>18,825</td><td>235</td><td>
<a href="cpu.php?cpu=AMD+Ryzen+5+3600XT&amp;id=3781#price">67.23
</a></td><td>
<a href="cpu.php?cpu=AMD+Ryzen+5+3600XT&amp;id=3781#price">$279.99</a></td></tr><tr id="cpu3702" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+4500U&amp;id=3702">AMD Ryzen 5 4500U
</a></td><td>11,219</td><td>469</td><td>NA</td><td>NA</td></tr><tr id="cpu3807" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+4600G&amp;id=3807">AMD Ryzen 5 4600G
</a></td><td>15,713</td><td>307</td><td>NA</td><td>NA</td></tr><tr id="cpu3835" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+4600GE&amp;id=3835">AMD Ryzen 5 4600GE
</a></td><td>16,377</td><td>291</td><td>NA</td><td>NA</td></tr><tr id="cpu3708" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+4600H&amp;id=3708">AMD Ryzen 5 4600H
</a></td><td>14,796</td><td>331</td><td>NA</td><td>NA</td></tr><tr id="cpu3787" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+4600HS&amp;id=3787">AMD Ryzen 5 4600HS
</a></td><td>14,673</td><td>336</td><td>NA</td><td>NA</td></tr><tr id="cpu3725" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+4600U&amp;id=3725">AMD Ryzen 5 4600U
</a></td><td>13,732</td><td>378</td><td>NA</td><td>NA</td></tr><tr id="cpu4141" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+5500U&amp;id=4141">AMD Ryzen 5 5500U
</a></td><td>13,333</td><td>392</td><td>NA</td><td>NA</td></tr><tr id="cpu4325" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+5600G&amp;id=4325">AMD Ryzen 5 5600G
</a></td><td>20,094</td><td>200</td><td>
<a href="cpu.php?cpu=AMD+Ryzen+5+5600G&amp;id=4325#price">77.59
</a></td><td>
<a href="cpu.php?cpu=AMD+Ryzen+5+5600G&amp;id=4325#price">$258.98</a></td></tr><tr id="cpu4390" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+5600GE&amp;id=4390">AMD Ryzen 5 5600GE
</a></td><td>18,879</td><td>231</td><td>NA</td><td>NA</td></tr><tr id="cpu4274" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+5600H&amp;id=4274">AMD Ryzen 5 5600H
</a></td><td>17,681</td><td>258</td><td>NA</td><td>NA</td></tr><tr id="cpu4284" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+5600U&amp;id=4284">AMD Ryzen 5 5600U
</a></td><td>15,998</td><td>301</td><td>NA</td><td>NA</td></tr><tr id="cpu3859" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+5600X&amp;id=3859">AMD Ryzen 5 5600X
</a></td><td>22,166</td><td>163</td><td>
<a href="cpu.php?cpu=AMD+Ryzen+5+5600X&amp;id=3859#price">81.20
</a></td><td>
<a href="cpu.php?cpu=AMD+Ryzen+5+5600X&amp;id=3859#price">$272.99</a></td></tr><tr id="cpu3049" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+PRO+1500&amp;id=3049">AMD Ryzen 5 PRO 1500
</a></td><td>9,434</td><td>554</td><td>NA</td><td>NA</td></tr><tr id="cpu3079" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+PRO+1600&amp;id=3079">AMD Ryzen 5 PRO 1600
</a></td><td>10,401</td><td>506</td><td>NA</td><td>NA</td></tr><tr id="cpu3265" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+PRO+2400G&amp;id=3265">AMD Ryzen 5 PRO 2400G
</a></td><td>8,308</td><td>625</td><td>NA</td><td>NA</td></tr><tr id="cpu3266" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+PRO+2400GE&amp;id=3266">AMD Ryzen 5 PRO 2400GE
</a></td><td>7,554</td><td>693</td><td>NA</td><td>NA</td></tr><tr id="cpu3262" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+PRO+2500U&amp;id=3262">AMD Ryzen 5 PRO 2500U
</a></td><td>6,792</td><td>794</td><td>NA</td><td>NA</td></tr><tr id="cpu3306" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+PRO+2600&amp;id=3306">AMD Ryzen 5 PRO 2600
</a></td><td>13,575</td><td>381</td><td>NA</td><td>NA</td></tr><tr id="cpu3769" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+PRO+3350G&amp;id=3769">AMD Ryzen 5 PRO 3350G
</a></td><td>9,570</td><td>549</td><td>NA</td><td>NA</td></tr><tr id="cpu3802" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+PRO+3350GE&amp;id=3802">AMD Ryzen 5 PRO 3350GE
</a></td><td>9,643</td><td>545</td><td>NA</td><td>NA</td></tr><tr id="cpu3569" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+PRO+3400G&amp;id=3569">AMD Ryzen 5 PRO 3400G
</a></td><td>9,406</td><td>557</td><td>NA</td><td>NA</td></tr><tr id="cpu3565" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+PRO+3400GE&amp;id=3565">AMD Ryzen 5 PRO 3400GE
</a></td><td>8,192</td><td>638</td><td>NA</td><td>NA</td></tr><tr id="cpu3500" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+PRO+3500U&amp;id=3500">AMD Ryzen 5 PRO 3500U
</a></td><td>6,954</td><td>775</td><td>NA</td><td>NA</td></tr><tr id="cpu3495" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+PRO+3600&amp;id=3495">AMD Ryzen 5 PRO 3600
</a></td><td>18,037</td><td>250</td><td>NA</td><td>NA</td></tr><tr id="cpu3828" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+PRO+4400G&amp;id=3828">AMD Ryzen 5 PRO 4400G
</a></td><td>16,456</td><td>288</td><td>NA</td><td>NA</td></tr><tr id="cpu3873" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+PRO+4400GE&amp;id=3873">AMD Ryzen 5 PRO 4400GE
</a></td><td>14,795</td><td>332</td><td>NA</td><td>NA</td></tr><tr id="cpu3743" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+PRO+4500U&amp;id=3743">AMD Ryzen 5 PRO 4500U
</a></td><td>12,049</td><td>434</td><td>NA</td><td>NA</td></tr><tr id="cpu3795" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+PRO+4650G&amp;id=3795">AMD Ryzen 5 PRO 4650G
</a></td><td>16,490</td><td>287</td><td>
<a href="cpu.php?cpu=AMD+Ryzen+5+PRO+4650G&amp;id=3795#price">45.06
</a></td><td>
<a href="cpu.php?cpu=AMD+Ryzen+5+PRO+4650G&amp;id=3795#price">$365.99</a></td></tr><tr id="cpu3843" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+PRO+4650GE&amp;id=3843">AMD Ryzen 5 PRO 4650GE
</a></td><td>15,860</td><td>303</td><td>NA</td><td>NA</td></tr><tr id="cpu3766" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+PRO+4650U&amp;id=3766">AMD Ryzen 5 PRO 4650U
</a></td><td>12,982</td><td>401</td><td>NA</td><td>NA</td></tr><tr id="cpu4381" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+PRO+5650G&amp;id=4381">AMD Ryzen 5 PRO 5650G
</a></td><td>21,087</td><td>186</td><td>NA</td><td>NA</td></tr><tr id="cpu4385" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+PRO+5650GE&amp;id=4385">AMD Ryzen 5 PRO 5650GE
</a></td><td>19,266</td><td>222</td><td>NA</td><td>NA</td></tr><tr id="cpu4341" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+5+PRO+5650U&amp;id=4341">AMD Ryzen 5 PRO 5650U
</a></td><td>16,850</td><td>280</td><td>NA</td><td>NA</td></tr><tr id="cpu2970" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+1700&amp;id=2970">AMD Ryzen 7 1700
</a></td><td>14,714</td><td>335</td><td>
<a href="cpu.php?cpu=AMD+Ryzen+7+1700&amp;id=2970#price">95.56
</a></td><td>
<a href="cpu.php?cpu=AMD+Ryzen+7+1700&amp;id=2970#price">$153.97</a></td></tr><tr id="cpu2969" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+1700X&amp;id=2969">AMD Ryzen 7 1700X
</a></td><td>15,542</td><td>310</td><td>
<a href="cpu.php?cpu=AMD+Ryzen+7+1700X&amp;id=2969#price">84.03
</a></td><td>
<a href="cpu.php?cpu=AMD+Ryzen+7+1700X&amp;id=2969#price">$184.97</a></td></tr><tr id="cpu2966" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+1800X&amp;id=2966">AMD Ryzen 7 1800X
</a></td><td>16,289</td><td>293</td><td>
<a href="cpu.php?cpu=AMD+Ryzen+7+1800X&amp;id=2966#price">81.59
</a></td><td>
<a href="cpu.php?cpu=AMD+Ryzen+7+1800X&amp;id=2966#price">$199.66</a></td></tr><tr id="cpu3240" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+2700&amp;id=3240">AMD Ryzen 7 2700
</a></td><td>15,694</td><td>308</td><td>
<a href="cpu.php?cpu=AMD+Ryzen+7+2700&amp;id=3240#price">79.85
</a></td><td>
<a href="cpu.php?cpu=AMD+Ryzen+7+2700&amp;id=3240#price">$196.53</a></td></tr><tr id="cpu3548" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+2700E&amp;id=3548">AMD Ryzen 7 2700E
</a></td><td>14,657</td><td>338</td><td>NA</td><td>NA</td></tr><tr id="cpu3140" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+2700U&amp;id=3140">AMD Ryzen 7 2700U
</a></td><td>6,778</td><td>796</td><td>NA</td><td>NA</td></tr><tr id="cpu3238" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+2700X&amp;id=3238">AMD Ryzen 7 2700X
</a></td><td>17,599</td><td>261</td><td>
<a href="cpu.php?cpu=AMD+Ryzen+7+2700X&amp;id=3238#price">60.69
</a></td><td>
<a href="cpu.php?cpu=AMD+Ryzen+7+2700X&amp;id=3238#price">$289.99</a></td></tr><tr id="cpu3383" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+2800H&amp;id=3383">AMD Ryzen 7 2800H
</a></td><td>7,656</td><td>688</td><td>NA</td><td>NA</td></tr><tr id="cpu3426" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+3700U&amp;id=3426">AMD Ryzen 7 3700U
</a></td><td>7,356</td><td>718</td><td>NA</td><td>NA</td></tr><tr id="cpu3485" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+3700X&amp;id=3485">AMD Ryzen 7 3700X
</a></td><td>22,780</td><td>152</td><td>
<a href="cpu.php?cpu=AMD+Ryzen+7+3700X&amp;id=3485#price">81.36
</a></td><td>
<a href="cpu.php?cpu=AMD+Ryzen+7+3700X&amp;id=3485#price">$279.99</a></td></tr><tr id="cpu3441" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+3750H&amp;id=3441">AMD Ryzen 7 3750H
</a></td><td>8,357</td><td>623</td><td>NA</td><td>NA</td></tr><tr id="cpu3587" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+3780U&amp;id=3587">AMD Ryzen 7 3780U
</a></td><td>7,386</td><td>713</td><td>NA</td><td>NA</td></tr><tr id="cpu3499" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+3800X&amp;id=3499">AMD Ryzen 7 3800X
</a></td><td>23,322</td><td>144</td><td>
<a href="cpu.php?cpu=AMD+Ryzen+7+3800X&amp;id=3499#price">69.00
</a></td><td>
<a href="cpu.php?cpu=AMD+Ryzen+7+3800X&amp;id=3499#price">$337.99</a></td></tr><tr id="cpu3797" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+3800XT&amp;id=3797">AMD Ryzen 7 3800XT
</a></td><td>23,909</td><td>131</td><td>
<a href="cpu.php?cpu=AMD+Ryzen+7+3800XT&amp;id=3797#price">62.37
</a></td><td>
<a href="cpu.php?cpu=AMD+Ryzen+7+3800XT&amp;id=3797#price">$383.34</a></td></tr><tr id="cpu3836" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+4700G&amp;id=3836">AMD Ryzen 7 4700G
</a></td><td>19,912</td><td>205</td><td>NA</td><td>NA</td></tr><tr id="cpu3847" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+4700GE&amp;id=3847">AMD Ryzen 7 4700GE
</a></td><td>20,648</td><td>194</td><td>NA</td><td>NA</td></tr><tr id="cpu3699" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+4700U&amp;id=3699">AMD Ryzen 7 4700U
</a></td><td>13,744</td><td>377</td><td>NA</td><td>NA</td></tr><tr id="cpu3676" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+4800H&amp;id=3676">AMD Ryzen 7 4800H
</a></td><td>19,180</td><td>225</td><td>NA</td><td>NA</td></tr><tr id="cpu3697" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+4800HS&amp;id=3697">AMD Ryzen 7 4800HS
</a></td><td>18,946</td><td>230</td><td>NA</td><td>NA</td></tr><tr id="cpu3721" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+4800U&amp;id=3721">AMD Ryzen 7 4800U
</a></td><td>17,260</td><td>268</td><td>NA</td><td>NA</td></tr><tr id="cpu4323" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+5700G&amp;id=4323">AMD Ryzen 7 5700G
</a></td><td>24,565</td><td>121</td><td>
<a href="cpu.php?cpu=AMD+Ryzen+7+5700G&amp;id=4323#price">68.43
</a></td><td>
<a href="cpu.php?cpu=AMD+Ryzen+7+5700G&amp;id=4323#price">$359.00</a></td></tr><tr id="cpu4387" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+5700GE&amp;id=4387">AMD Ryzen 7 5700GE
</a></td><td>22,566</td><td>158</td><td>NA</td><td>NA</td></tr><tr id="cpu4156" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+5700U&amp;id=4156">AMD Ryzen 7 5700U
</a></td><td>16,390</td><td>290</td><td>NA</td><td>NA</td></tr><tr id="cpu4188" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+5800&amp;id=4188">AMD Ryzen 7 5800
</a></td><td>26,012</td><td>101</td><td>NA</td><td>NA</td></tr><tr id="cpu3907" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+5800H&amp;id=3907">AMD Ryzen 7 5800H
</a></td><td>21,724</td><td>171</td><td>NA</td><td>NA</td></tr><tr id="cpu4170" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+5800HS&amp;id=4170">AMD Ryzen 7 5800HS
</a></td><td>21,202</td><td>184</td><td>NA</td><td>NA</td></tr><tr id="cpu4102" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+5800U&amp;id=4102">AMD Ryzen 7 5800U
</a></td><td>19,639</td><td>209</td><td>NA</td><td>NA</td></tr><tr id="cpu3869" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+5800X&amp;id=3869">AMD Ryzen 7 5800X
</a></td><td>28,496</td><td>80</td><td>
<a href="cpu.php?cpu=AMD+Ryzen+7+5800X&amp;id=3869#price">72.33
</a></td><td>
<a href="cpu.php?cpu=AMD+Ryzen+7+5800X&amp;id=3869#price">$393.99</a></td></tr><tr id="cpu3790" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+Extreme+Edition&amp;id=3790">AMD Ryzen 7 Extreme Edition
</a></td><td>18,187</td><td>245</td><td>NA</td><td>NA</td></tr><tr id="cpu3075" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+PRO+1700&amp;id=3075">AMD Ryzen 7 PRO 1700
</a></td><td>14,613</td><td>341</td><td>NA</td><td>NA</td></tr><tr id="cpu3033" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+PRO+1700X&amp;id=3033">AMD Ryzen 7 PRO 1700X
</a></td><td>15,799</td><td>305</td><td>NA</td><td>NA</td></tr><tr id="cpu3307" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+PRO+2700&amp;id=3307">AMD Ryzen 7 PRO 2700
</a></td><td>15,062</td><td>321</td><td>NA</td><td>NA</td></tr><tr id="cpu3258" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+PRO+2700U&amp;id=3258">AMD Ryzen 7 PRO 2700U
</a></td><td>7,180</td><td>740</td><td>NA</td><td>NA</td></tr><tr id="cpu3292" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+PRO+2700X&amp;id=3292">AMD Ryzen 7 PRO 2700X
</a></td><td>17,093</td><td>274</td><td>NA</td><td>NA</td></tr><tr id="cpu3564" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+PRO+3700&amp;id=3564">AMD Ryzen 7 PRO 3700
</a></td><td>22,570</td><td>157</td><td>
<a href="cpu.php?cpu=AMD+Ryzen+7+PRO+3700&amp;id=3564#price">68.39
</a></td><td>
<a href="cpu.php?cpu=AMD+Ryzen+7+PRO+3700&amp;id=3564#price">$329.99*</a></td></tr><tr id="cpu3433" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+PRO+3700U&amp;id=3433">AMD Ryzen 7 PRO 3700U
</a></td><td>7,311</td><td>724</td><td>NA</td><td>NA</td></tr><tr id="cpu3813" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+PRO+4700G&amp;id=3813">AMD Ryzen 7 PRO 4700G
</a></td><td>20,848</td><td>189</td><td>NA</td><td>NA</td></tr><tr id="cpu3789" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+PRO+4750G&amp;id=3789">AMD Ryzen 7 PRO 4750G
</a></td><td>20,600</td><td>195</td><td>
<a href="cpu.php?cpu=AMD+Ryzen+7+PRO+4750G&amp;id=3789#price">51.50
</a></td><td>
<a href="cpu.php?cpu=AMD+Ryzen+7+PRO+4750G&amp;id=3789#price">$399.99*</a></td></tr><tr id="cpu3842" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+PRO+4750GE&amp;id=3842">AMD Ryzen 7 PRO 4750GE
</a></td><td>19,584</td><td>214</td><td>NA</td><td>NA</td></tr><tr id="cpu3740" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+PRO+4750U&amp;id=3740">AMD Ryzen 7 PRO 4750U
</a></td><td>15,538</td><td>311</td><td>NA</td><td>NA</td></tr><tr id="cpu4380" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+PRO+5750G&amp;id=4380">AMD Ryzen 7 PRO 5750G
</a></td><td>25,562</td><td>106</td><td>NA</td><td>NA</td></tr><tr id="cpu4386" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+PRO+5750GE&amp;id=4386">AMD Ryzen 7 PRO 5750GE
</a></td><td>22,536</td><td>160</td><td>NA</td><td>NA</td></tr><tr id="cpu4198" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+7+PRO+5850U&amp;id=4198">AMD Ryzen 7 PRO 5850U
</a></td><td>19,604</td><td>211</td><td>NA</td><td>NA</td></tr><tr id="cpu3575" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+9+3900&amp;id=3575">AMD Ryzen 9 3900
</a></td><td>30,918</td><td>64</td><td>
<a href="cpu.php?cpu=AMD+Ryzen+9+3900&amp;id=3575#price">52.31
</a></td><td>
<a href="cpu.php?cpu=AMD+Ryzen+9+3900&amp;id=3575#price">$591.00*</a></td></tr><tr id="cpu3493" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+9+3900X&amp;id=3493">AMD Ryzen 9 3900X
</a></td><td>32,861</td><td>52</td><td>
<a href="cpu.php?cpu=AMD+Ryzen+9+3900X&amp;id=3493#price">72.70
</a></td><td>
<a href="cpu.php?cpu=AMD+Ryzen+9+3900X&amp;id=3493#price">$451.99</a></td></tr><tr id="cpu3778" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+9+3900XT&amp;id=3778">AMD Ryzen 9 3900XT
</a></td><td>32,918</td><td>51</td><td>
<a href="cpu.php?cpu=AMD+Ryzen+9+3900XT&amp;id=3778#price">47.51
</a></td><td>
<a href="cpu.php?cpu=AMD+Ryzen+9+3900XT&amp;id=3778#price">$692.88</a></td></tr><tr id="cpu3598" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+9+3950X&amp;id=3598">AMD Ryzen 9 3950X
</a></td><td>39,199</td><td>35</td><td>
<a href="cpu.php?cpu=AMD+Ryzen+9+3950X&amp;id=3598#price">47.23
</a></td><td>
<a href="cpu.php?cpu=AMD+Ryzen+9+3950X&amp;id=3598#price">$829.99</a></td></tr><tr id="cpu3756" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+9+4900H&amp;id=3756">AMD Ryzen 9 4900H
</a></td><td>19,027</td><td>228</td><td>NA</td><td>NA</td></tr><tr id="cpu3694" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+9+4900HS&amp;id=3694">AMD Ryzen 9 4900HS
</a></td><td>19,607</td><td>210</td><td>NA</td><td>NA</td></tr><tr id="cpu4272" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+9+5900&amp;id=4272">AMD Ryzen 9 5900
</a></td><td>35,598</td><td>42</td><td>NA</td><td>NA</td></tr><tr id="cpu3905" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+9+5900HS&amp;id=3905">AMD Ryzen 9 5900HS
</a></td><td>22,695</td><td>155</td><td>NA</td><td>NA</td></tr><tr id="cpu3903" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+9+5900HX&amp;id=3903">AMD Ryzen 9 5900HX
</a></td><td>23,284</td><td>146</td><td>NA</td><td>NA</td></tr><tr id="cpu3870" role="row" class="odd"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+9+5900X&amp;id=3870">AMD Ryzen 9 5900X
</a></td><td>39,612</td><td>34</td><td>
<a href="cpu.php?cpu=AMD+Ryzen+9+5900X&amp;id=3870#price">72.02
</a></td><td>
<a href="cpu.php?cpu=AMD+Ryzen+9+5900X&amp;id=3870#price">$549.99</a></td></tr><tr id="cpu3862" class="alt even" role="row"><td>
<a href="cpu_lookup.php?cpu=AMD+Ryzen+9+5950X&amp;id=3862">AMD Ryzen 9 5950X
</a></td><td>46,128</td><td>25</td><td>
<a href="cpu.php?cpu=AMD+Ryzen+9+5950X&amp;id=3862#price">61.59</a></td><td>
<a href="cpu.php?cpu=AMD+Ryzen+9+5950X&amp;id=3862#price">$749.00</a></td></tr><tr id="cpu4163" role="row" class="odd"><td>


