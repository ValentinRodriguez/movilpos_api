<?php

use Illuminate\Database\Seeder;
use App\Librerias\tienda\atributosStore;
use Illuminate\Support\Facades\DB;

class atributoSeeder extends Seeder
{
    public function run()
    {
        DB::table('mov_tienda.atributos_stores')->truncate();

        $codigos = array(
            [   'id_atributo' => 1,
                'descripcion' => 'talla',
                'tipo' => 'checkbox',
                'atributo' => '[{"label":"S","value":false},
                                {"label":"M","value":false},
                                {"label":"L","value":false},
                                {"label":"XL","value":false},
                                {"label":"XXL","value":false},
                                {"label":"XXXL","value":false}
                                ]'
            ],
            [   'id_atributo' => 2,
                'descripcion' => 'medida',
                'tipo' => 'radio',
                'atributo' => '[{"label":"CM"},
                                {"label":"PG"},
                                {"label":"YDS"},
                                {"label":"MTS"}
                            ]'
            ],
            [   'id_atributo' => 3,
                'descripcion' => 'estado',
                'tipo' => 'radio',
                'atributo' => '[{"label":"Nuevo"},
                                {"label":"Usado"}]'
            ],
            [   'id_atributo' => 4,
                'descripcion' => 'material',
                'tipo' => 'select',
                'atributo' => '[{"label":"Oro"},{"label":"Plata"},{"label":"Bronce"}]'
            ],
            [   'id_atributo' => 5,
                'tipo' => 'select',
                'descripcion' => 'edad',
                'atributo' => '[{"label":"0-11 meses","value":false},
                                {"label":"1-3 años","value":false},
                                {"label":"4-7 años","value":false},
                                {"label":"7-12 años","value":false},
                                {"label":"13-17 años","value":false},
                                {"label":"+18 años","value":false}
                            ]'
            ],
            [   'id_atributo' => 6,
                'descripcion' => 'actividad',
                'tipo' => 'select',
                'atributo' => '[{"label":"Ciclismo"}]'
            ],           
            [   'id_atributo' => 7,
                'descripcion' => 'color',
                'tipo' => 'color',
                'atributo' => '[{"value":""}]'
            ],
        );

        foreach ($codigos as $key => $value) {
            atributosStore::create($value);
        }
    }
}
// 06/8e
// AArch64 rev 0 (aarch64)
// AArch64 rev 1 (aarch64)
// AArch64 rev 2 (aarch64)
// AArch64 rev 4 (aarch64)
// AC8257V/WAB
// AMD 3015Ce
// AMD 3015e
// AMD 3020e
// AMD 4700S
// AMD A4 Micro-6400T APU
// AMD A4 PRO-3340B
// AMD A4 PRO-7300B APU
// AMD A4 PRO-7350B
// AMD A4-1200 APU
// AMD A4-1250 APU
// AMD A4-3300 APU
// AMD A4-3300M APU
// AMD A4-3305M APU
// AMD A4-3310MX APU
// AMD A4-3320M APU
// AMD A4-3330MX APU
// AMD A4-3400 APU
// AMD A4-3420 APU
// AMD A4-4000 APU
// AMD A4-4020 APU
// AMD A4-4300M APU
// AMD A4-4355M APU
// AMD A4-5000 APU
// AMD A4-5050 APU
// AMD A4-5100 APU
// AMD A4-5150M APU
// AMD A4-5300 APU
// AMD A4-5300B APU
// AMD A4-6210 APU
// AMD A4-6250J APU
// AMD A4-6300 APU
// AMD A4-6300B APU
// AMD A4-6320 APU
// AMD A4-7210 APU
// AMD A4-7300 APU
// AMD A4-9120
// AMD A4-9120C
// AMD A4-9120e
// AMD A4-9125
// AMD A6 Micro-6500T APU
// AMD A6 PRO-7050B APU
// AMD A6 PRO-7400B
// AMD A6-1450 APU
// AMD A6-3400M APU
// AMD A6-3410MX APU
// AMD A6-3420M APU
// AMD A6-3430MX APU
// AMD A6-3500 APU
// AMD A6-3600 APU
// AMD A6-3620 APU
// AMD A6-3650 APU
// AMD A6-3670 APU
// AMD A6-4400M APU
// AMD A6-4455M APU
// AMD A6-5200 APU
// AMD A6-5345M APU
// AMD A6-5350M APU
// AMD A6-5357M APU
// AMD A6-5400B APU
// AMD A6-5400K APU
// AMD A6-6310 APU
// AMD A6-6400B APU
// AMD A6-6400K APU
// AMD A6-6420B APU
// AMD A6-6420K APU
// AMD A6-7000 
// AMD A6-7310 APU
// AMD A6-7400K APU
// AMD A6-7470K
// AMD A6-7480
// AMD A6-8500P
// AMD A6-8550
// AMD A6-9200
// AMD A6-9210
// AMD A6-9220
// AMD A6-9220C
// AMD A6-9220e
// AMD A6-9225
// AMD A6-9230
// AMD A6-9500E
// AMD A8 
// AMD A8-3510MX APU
// AMD A8-3520M APU
// AMD A8-3530MX APU
// AMD A8-3550MX APU
// AMD A8-3800 APU
// AMD A8-3820 APU
// AMD A8-3850 APU
// AMD A8-3870K APU
// AMD A8-4500M APU
// AMD A8-4555M APU
// AMD A8-5500 APU
// AMD A8-5500B APU
// AMD A8-5545M APU
// AMD A8-5550M APU
// AMD A8-5557M APU
// AMD A8-5600K APU
// AMD A8-6410 APU
// AMD A8-6500 APU
// AMD A8-6500B APU
// AMD A8-6500T APU
// AMD A8-6600K APU
// AMD A8-7050
// AMD A8-7100 APU
// AMD A8-7200P
// AMD A8-7410 APU
// AMD A8-7500
// AMD A8-7600 APU
// AMD A8-7650K
// AMD A8-7670K
// AMD A8-7680
// AMD A8-8600P
// AMD A8-8650
// AMD A8-9600
// AMD A9-9400
// AMD A9-9410
// AMD A9-9420
// AMD A9-9420e
// AMD A9-9425
// AMD A9-9430
// AMD A9-9820
// AMD A10 Micro-6700T APU
// AMD A10 PRO-7350B APU
// AMD A10 PRO-7800B APU
// AMD A10 PRO-7850B APU
// AMD A10-4600M APU
// AMD A10-4655M APU
// AMD A10-4657M APU
// AMD A10-5700 APU
// AMD A10-5745M APU
// AMD A10-5750M APU
// AMD A10-5757M APU
// AMD A10-5800B APU
// AMD A10-5800K APU
// AMD A10-6700 APU
// AMD A10-6700T APU
// AMD A10-6790K APU
// AMD A10-6800B APU
// AMD A10-6800K APU
// AMD A10-7300 APU
// AMD A10-7400P
// AMD A10-7700K APU
// AMD A10-7800 APU
// AMD A10-7850K APU
// AMD A10-7860K
// AMD A10-7870K
// AMD A10-7890K
// AMD A10-8700P
// AMD A10-8750
// AMD A10-8850
// AMD A10-9600P
// AMD A10-9620P
// AMD A10-9630P
// AMD A10-9700
// AMD A10-9700E
// AMD A12-9700P
// AMD A12-9720P
// AMD A12-9730P
// AMD A12-9800
// AMD A12-9800E
// AMD Athlon64 X2 Dual Core 4600
// AMD Athlon 64 2000+
// AMD Athlon 64 2600+
// AMD Athlon 64 2800+
// AMD Athlon 64 3000+
// AMD Athlon 64 3100+
// AMD Athlon 64 3200+
// AMD Athlon 64 3300+
// AMD Athlon 64 3400+
// AMD Athlon 64 3500+
// AMD Athlon 64 3700+
// AMD Athlon 64 3800+
// AMD Athlon 64 4000+
// AMD Athlon 64 FX-55
// AMD Athlon 64 FX-57517
// AMD Athlon 64 FX-59465
// AMD Athlon 64 FX-60 Dual Core
// AMD Athlon 64 FX-62 Dual Core
// AMD Athlon 64 FX-74972
// AMD Athlon 64 X2 3800+566
// AMD Athlon 64 X2 Dual Core 3400
// AMD Athlon 64 X2 Dual Core 3600
// AMD Athlon 64 X2 Dual Core 3800
// AMD Athlon 64 X2 Dual Core 4000
// AMD Athlon 64 X2 Dual Core 4200
// AMD Athlon 64 X2 Dual Core 4400
// AMD Athlon 64 X2 Dual Core 4600
// AMD Athlon 64 X2 Dual Core 4800
// AMD Athlon 64 X2 Dual Core 5000
// AMD Athlon 64 X2 Dual Core 5200
// AMD Athlon 64 X2 Dual Core 5400
// AMD Athlon 64 X2 Dual Core 5600
// AMD Athlon 64 X2 Dual Core 5800
// AMD Athlon 64 X2 Dual Core 6000
// AMD Athlon 64 X2 Dual Core 6400
// AMD Athlon 64 X2 Dual Core 
// AMD Athlon 64 X2 Dual Core 
// AMD Athlon 64 X2 Dual Core TK-53
// AMD Athlon 64 X2 Dual Core 
// AMD Athlon 64 X2 Dual-Core TK-42
// AMD Athlon 64 X2 Dual-Core TK-53
// AMD Athlon 64 X2 Dual-Core TK-55
// AMD Athlon 64 X2 Dual-Core TK-57
// AMD Athlon 64 X2 QL-60465
// AMD Athlon 64 X2 QL-62522
// AMD Athlon 64 X2 QL-64621
// AMD Athlon 64 X2 QL-65609
// AMD Athlon 64 X2 QL-66641
// AMD Athlon 64 X2 QL-67582
// AMD Athlon 200GE4,165
// AMD Athlon 220GE4,538
// AMD Athlon 240GE4,538
// AMD Athlon 300GE4,905
// AMD Athlon 300U4,0061194
// AMD Athlon 1500+191
// AMD Athlon 1640B4123114
// AMD Athlon 2650e2743288
// AMD Athlon 2800+2913263
// AMD Athlon 2850e3333211
// AMD Athlon 3000G4,462
// AMD Athlon 5000 Dual-Core
// AMD Athlon 5150 APU1,372
// AMD Athlon 5200 Dual-Core
// AMD Athlon 5350 APU1,768
// AMD Athlon 5370 APU1,857
// AMD Athlon 7450 Dual-Core
// AMD Athlon 7550 Dual-Core
// AMD Athlon 7750 Dual-Core
// AMD Athlon 7850 Dual-Core
// AMD Athlon Dual Core 4050e
// AMD Athlon Dual Core 4450B
// AMD Athlon Dual Core 4450e
// AMD Athlon Dual Core 4850B
// AMD Athlon Dual Core 4850e
// AMD Athlon Dual Core 5000B
// AMD Athlon Dual Core 5050e
// AMD Athlon Dual Core 5200B
// AMD Athlon Dual Core 5400B
// AMD Athlon Dual Core 5600B
// AMD Athlon Gold 3150U4,385
// AMD Athlon Gold PRO 3150G
// AMD Athlon Gold PRO 3150GE
// AMD Athlon II 160u358
// AMD Athlon II 170u357
// AMD Athlon II Dual-Core M300
// AMD Athlon II Dual-Core M320
// AMD Athlon II Dual-Core M340
// AMD Athlon II N330 Dual-Core
// AMD Athlon II N350 Dual-Core
// AMD Athlon II N370 Dual-Core
// AMD Athlon II Neo K125302
// AMD Athlon II Neo K145298
// AMD Athlon II Neo K325 
// AMD Athlon II Neo K345 
// AMD Athlon II Neo N36L 
// AMD Athlon II P320 Dual-Core
// AMD Athlon II P340 Dual-Core
// AMD Athlon II P360 Dual-Core
// AMD Athlon II X2 210e1,105
// AMD Athlon II X2 215942
// AMD Athlon II X2 220995
// AMD Athlon II X2 235e1,049
// AMD Athlon II X2 240898
// AMD Athlon II X2 240e962
// AMD Athlon II X2 2451,051
// AMD Athlon II X2 245e1,075
// AMD Athlon II X2 2501,062
// AMD Athlon II X2 250e1,046
// AMD Athlon II X2 250u604
// AMD Athlon II X2 2551,148
// AMD Athlon II X2 2601,090
// AMD Athlon II X2 260u663
// AMD Athlon II X2 2651,233
// AMD Athlon II X2 2701,231
// AMD Athlon II X2 270u675
// AMD Athlon II X2 2801,355
// AMD Athlon II X2 4300e990
// AMD Athlon II X2 4400e1,059
// AMD Athlon II X2 4450e867
// AMD Athlon II X2 B221,000
// AMD Athlon II X2 B241,052
// AMD Athlon II X2 B261,245
// AMD Athlon II X2 B281,091
// AMD Athlon II X3 400e1,320
// AMD Athlon II X3 405e1,331
// AMD Athlon II X3 415e1,441
// AMD Athlon II X3 420e1,495
// AMD Athlon II X3 4251,547
// AMD Athlon II X3 4351,652
// AMD Athlon II X3 4401,690
// AMD Athlon II X3 4451,768
// AMD Athlon II X3 4501,756
// AMD Athlon II X3 4551,833
// AMD Athlon II X3 4601,890
// AMD Athlon II X4 5532,418
// AMD Athlon II X4 5552,310
// AMD Athlon II X4 5572,567
// AMD Athlon II X4 5592,473
// AMD Athlon II X4 600e1,711
// AMD Athlon II X4 605e1,959
// AMD Athlon II X4 610e1,864
// AMD Athlon II X4 615e1,900
// AMD Athlon II X4 6201,888
// AMD Athlon II X4 6302,071
// AMD Athlon II X4 631 Quad-Core
// AMD Athlon II X4 6352,010
// AMD Athlon II X4 638 Quad-Core
// AMD Athlon II X4 6402,138
// AMD Athlon II X4 641 Quad-Core
// AMD Athlon II X4 6452,232
// AMD Athlon II X4 6502,390
// AMD Athlon II X4 651 Quad-Core
// AMD Athlon II X4 6552,078
// AMD Athlon L1101973397
// AMD Athlon LE-1600412
// AMD Athlon LE-1620421
// AMD Athlon LE-1640430
// AMD Athlon LE-1660416
// AMD Athlon Neo MV-40282
// AMD Athlon Neo X2 Dual Core 
// AMD Athlon Neo X2 Dual Core 
// AMD Athlon Neo X2 Dual Core 
// AMD Athlon PRO 200GE4,139
// AMD Athlon PRO 300GE4,528
// AMD Athlon Silver 3050e2,
// AMD Athlon Silver 3050GE4,
// AMD Athlon Silver 3050U3,
// AMD Athlon Silver PRO 3125GE
// AMD Athlon TF-202683294
// AMD Athlon TF-363383196
// AMD Athlon X2 2159962555
// AMD Athlon X2 2409212628
// AMD Athlon X2 240e1,015
// AMD Athlon X2 2509932560
// AMD Athlon X2 255938
// AMD Athlon X2 2801,327
// AMD Athlon X2 340 Dual Core
// AMD Athlon X2 370K Dual Core
// AMD Athlon X2 Dual Core 3250e
// AMD Athlon X2 Dual Core 6850e
// AMD Athlon X2 Dual Core BE-2300
// AMD Athlon X2 Dual Core BE-2350
// AMD Athlon X2 Dual Core BE-2400
// AMD Athlon X2 Dual Core L310
// AMD Athlon X3 4251,516
// AMD Athlon X3 4351,781
// AMD Athlon X3 4401,438
// AMD Athlon X3 4551,783
// AMD Athlon X4 5301,786
// AMD Athlon X4 6201,612
// AMD Athlon X4 6402,115
// AMD Athlon X4 740 Quad Core
// AMD Athlon X4 750 Quad Core
// AMD Athlon X4 750K Quad Core
// AMD Athlon X4 760K Quad Core
// AMD Athlon X4 8302,901
// AMD Athlon X4 8403,305
// AMD Athlon X4 8453,749
// AMD Athlon X4 860K3,453
// AMD Athlon X4 870K3,425
// AMD Athlon X4 880K3,622
// AMD Athlon X4 9503,628
// AMD Athlon XP1600+183
// AMD Athlon XP2400+243
// AMD Athlon XP 1500+167
// AMD Athlon XP 1600+174
// AMD Athlon XP 1700+176
// AMD Athlon XP 1800+195
// AMD Athlon XP 1900+203
// AMD Athlon XP 2000+195
// AMD Athlon XP 2100+210
// AMD Athlon XP 2200+214
// AMD Athlon XP 2400+234
// AMD Athlon XP 2500+231
// AMD Athlon XP 2600+242
// AMD Athlon XP 2700+256
// AMD Athlon XP 2800+260
// AMD Athlon XP 2900+276
// AMD Athlon XP 3000+262
// AMD Athlon XP 3100+282
// AMD Athlon XP 3200+281
// AMD C-301783425NA
// AMD C-502603310NA
// AMD C-602903265NA
// AMD C-60 APU3103236
// AMD C-70 APU3003246
// AMD E1 Micro-6200T APU600
// AMD E1-1200 APU3783152
// AMD E1-1500 APU3973131
// AMD E1-2100 APU4093116
// AMD E1-2200 APU4743054
// AMD E1-2500 APU5832952
// AMD E1-6010 APU5442990
// AMD E1-6015 APU5472989
// AMD E1-6050J APU 1,385
// AMD E1-7010 APU5772960
// AMD E2-1800 APU4403091
// AMD E2-2000 APU4883035
// AMD E2-3000 APU7262811
// AMD E2-3000M APU6592873
// AMD E2-3200 APU9712580
// AMD E2-3800 APU1,1142452
// AMD E2-6110 APU1,1642406
// AMD E2-7110 APU1,5342153
// AMD E2-90009112636NA
// AMD E2-9000e8212707
// AMD E2-90109912562NA
// AMD E2-90309222627NA
// AMD E-2401623447NA
// AMD E-300 APU3633169
// AMD E-3504123112NA
// AMD E-350 APU4013124
// AMD E-350D APU4653063
// AMD E-450 APU4203106
// AMD Embedded G-Series 
// AMD Embedded G-Series 
// AMD Embedded G-Series 
// AMD Embedded R-Series RX-216GD
// AMD Embedded R-Series 
// AMD Embedded R-Series RX-421BD
// AMD EPYC 7F3222,303161
// AMD EPYC 7F5240,46832
// AMD EPYC 7J1385,7224
// AMD EPYC 7R3264,26410
// AMD EPYC 73F333,12449
// AMD EPYC 320110,762492
// AMD EPYC 325113,749376
// AMD EPYC 7232P16,658284
// AMD EPYC 725114,865327
// AMD EPYC 725219,965204
// AMD EPYC 726220,952188
// AMD EPYC 727226,44697
// AMD EPYC 728121,230182
// AMD EPYC 728231,51059
// AMD EPYC 730114,991323
// AMD EPYC 730233,01550
// AMD EPYC 7302P32,48053
// AMD EPYC 731333,33448
// AMD EPYC 7313P38,53736
// AMD EPYC 734345,88226
// AMD EPYC 735123,566137
// AMD EPYC 7351P19,589213
// AMD EPYC 737128,35682
// AMD EPYC 7401P30,64367
// AMD EPYC 740245,68427
// AMD EPYC 7402P41,98230
// AMD EPYC 741347,60323
// AMD EPYC 7443P58,04916
// AMD EPYC 745120,471198
// AMD EPYC 745242,14929
// AMD EPYC 750124,925117
// AMD EPYC 750253,59120
// AMD EPYC 7502P47,07024
// AMD EPYC 751359,30914
// AMD EPYC 754256,80918
// AMD EPYC 755121,263180
// AMD EPYC 7551P25,933103
// AMD EPYC 757127,44585
// AMD EPYC 764377,1016
// AMD EPYC 766271,5768
// AMD EPYC 770271,6867
// AMD EPYC 7702P58,11915
// AMD EPYC 771385,9472
// AMD EPYC 774269,7869
// AMD EPYC 776387,7671
// AMD FirePro A320 APU2,634
// AMD FX-670K Quad-Core2,897
// AMD FX-770K Quad-Core2,578
// AMD FX-870K Quad Core3,094
// AMD FX-4100 Quad-Core2,548
// AMD FX-4130 Quad-Core2,708
// AMD FX-4150 Quad-Core3,327
// AMD FX-4170 Quad-Core3,121
// AMD FX-4200 Quad-Core3,134
// AMD FX-4300 Quad-Core2,944
// AMD FX-43203,1671380
// AMD FX-43303,2481358
// AMD FX-4350 Quad-Core3,274
// AMD FX-6100 Six-Core3,662
// AMD FX-6120 Six-Core3,886
// AMD FX-6130 Six-Core4,353
// AMD FX-6200 Six-Core4,003
// AMD FX-6300 Six-Core4,130
// AMD FX-6330 Six-Core4,455
// AMD FX-6350 Six-Core4,485
// AMD FX-7500 APU1,8261966
// AMD FX-7600P2,3061696
// AMD FX-7600P APU2,856
// AMD FX-8100 Eight-Core3,847
// AMD FX-8120 Eight-Core4,530
// AMD FX-8140 Eight-Core4,953
// AMD FX-8150 Eight-Core5,057
// AMD FX-8300 Eight-Core5,259
// AMD FX-8310 Eight-Core5,164
// AMD FX-8320 Eight-Core5,393
// AMD FX-8320E Eight-Core4,
// AMD FX-8350 Eight-Core5,948
// AMD FX-8370 Eight-Core6,129
// AMD FX-8370E Eight-Core5,
// AMD FX-8800P2,7681519
// AMD FX-9370 Eight-Core6,054
// AMD FX-9590 Eight-Core6,762
// AMD FX-9800P2,2311736
// AMD FX-9830P3,1741376
// AMD FX-B4150 Quad-Core3,369
// AMD G-T40E2633305NA
// AMD G-T40R1203501NA
// AMD G-T44R1303493NA
// AMD G-T48E4163110NA
// AMD G-T52R1773426NA
// AMD G-T56E4423088NA
// AMD G-T56N4603069NA
// AMD Geode NX 2400+400
// AMD GX-210JA SOC2483329
// AMD GX-212JC SOC 570
// AMD GX-217GA SOC7442787
// AMD GX-218GL SOC7542778
// AMD GX-222GC SOC1,038
// AMD GX-412HC1,0652492
// AMD GX-415GA SOC1,363
// AMD GX-420CA SOC1,597
// AMD GX-420MC SOC1,796
// AMD GX-424CC SOC1,734
// AMD Opteron 1443163223
// AMD Opteron 1463463190
// AMD Opteron 1483923139
// AMD Opteron 1503933137
// AMD Opteron 1524283100
// AMD Opteron 1544573074
// AMD Opteron 1655313000
// AMD Opteron 1706482884
// AMD Opteron 1756822848
// AMD Opteron 1807462786
// AMD Opteron 1856952835
// AMD Opteron 2544513078
// AMD Opteron 2707612774
// AMD Opteron 2758392691
// AMD Opteron 2807652772
// AMD Opteron 2859562600
// AMD Opteron 2909522602
// AMD Opteron 12125932940
// AMD Opteron 12146962832
// AMD Opteron 1214 HE806
// AMD Opteron 12167812754
// AMD Opteron 1216 HE727
// AMD Opteron 12189102637
// AMD Opteron 12201,0362516
// AMD Opteron 12221,0892472
// AMD Opteron 13521,464
// AMD Opteron 13541,620
// AMD Opteron 13561,703
// AMD Opteron 13811,797
// AMD Opteron 13851,898
// AMD Opteron 13892,079
// AMD Opteron 22181,0362515
// AMD Opteron 22201,106
// AMD Opteron 2220 SE909
// AMD Opteron 22221,198
// AMD Opteron 23541,509
// AMD Opteron 23561,733
// AMD Opteron 2373 EE1,635
// AMD Opteron 23781,864
// AMD Opteron 23842,074
// AMD Opteron 2393 SE1,317
// AMD Opteron 2419 EE1,902
// AMD Opteron 24271,995
// AMD Opteron 24312,936
// AMD Opteron 24353,061
// AMD Opteron 3250 HE2,061
// AMD Opteron 3260 HE2,283
// AMD Opteron 32803,7201243
// AMD Opteron 3320 EE1,918
// AMD Opteron 3350 HE2,825
// AMD Opteron 33653,973
// AMD Opteron 33804,134
// AMD Opteron 4162 EE2,058
// AMD Opteron 4170 HE2,382
// AMD Opteron 41842,8721482
// AMD Opteron 4274 HE5,776
// AMD Opteron 42804,504
// AMD Opteron 42844,665
// AMD Opteron 4332 HE3,715
// AMD Opteron 43343,949
// AMD Opteron 4365 EE3,263
// AMD Opteron 43864,378
// AMD Opteron 61282,8261497
// AMD Opteron 6128 HE3,015
// AMD Opteron 61363,381
// AMD Opteron 6164 HE3,478
// AMD Opteron 61722,7891513
// AMD Opteron 61743,697
// AMD Opteron 6176 SE3,564
// AMD Opteron 62124,007
// AMD Opteron 62204,753
// AMD Opteron 62344,0721177
// AMD Opteron 62385,625945
// AMD Opteron 62725,146
// AMD Opteron 62745,286987
// AMD Opteron 62766,351850
// AMD Opteron 62817,279729
// AMD Opteron 6282 SE6,385
// AMD Opteron 6287 SE6,925
// AMD Opteron 63285,246996
// AMD Opteron 63446,069893
// AMD Opteron 63488,030651
// AMD Opteron 6366 HE4,858
// AMD Opteron 63765,572952
// AMD Opteron 63785,889915
// AMD Opteron 63807,336720
// AMD Opteron 6386 SE7,017
// AMD Opteron 8439 SE2,479
// AMD Opteron X2170 APU1,911
// AMD Opteron X3216 APU1,628
// AMD Opteron X3418 APU3,074
// AMD Opteron X3421 APU3,289
// AMD Phenom 8250 Triple-Core
// AMD Phenom 8250e Triple-Core
// AMD Phenom 8400 Triple-Core
// AMD Phenom 8450 Triple-Core
// AMD Phenom 8450e Triple-Core
// AMD Phenom 8600 Triple-Core
// AMD Phenom 8600B Triple-Core
// AMD Phenom 8650 Triple-Core
// AMD Phenom 8750 Triple-Core
// AMD Phenom 8750B Triple-Core
// AMD Phenom 8850 Triple-Core
// AMD Phenom 8850B Triple-Core
// AMD Phenom 9100e Quad-Core
// AMD Phenom 9150e Quad-Core
// AMD Phenom 9350e Quad-Core
// AMD Phenom 9450e Quad-Core
// AMD Phenom 9500 Quad-Core1,
// AMD Phenom 9550 Quad-Core1,
// AMD Phenom 9600 Quad-Core1,
// AMD Phenom 9600B Quad-Core
// AMD Phenom 9650 Quad-Core1,
// AMD Phenom 9750 Quad-Core1,
// AMD Phenom 9750B Quad-Core
// AMD Phenom 9850 Quad-Core1,
// AMD Phenom 9850B Quad-Core
// AMD Phenom 9950 Quad-Core1,
// AMD Phenom FX-5000 Quad-Core
// AMD Phenom FX-5200 Quad-Core
// AMD Phenom II N620 Dual-Core
// AMD Phenom II N640 Dual-Core
// AMD Phenom II N660 Dual-Core
// AMD Phenom II N830 3+11,
// AMD Phenom II N830 Triple-Core
// AMD Phenom II N850 Triple-Core
// AMD Phenom II N870 Triple-Core
// AMD Phenom II N930 Quad-Core
// AMD Phenom II N950 Quad-Core
// AMD Phenom II N970 Quad-Core
// AMD Phenom II P650 Dual-Core
// AMD Phenom II P820 Triple-Core
// AMD Phenom II P840 Triple-Core
// AMD Phenom II P860 Triple-Core
// AMD Phenom II P920 Quad-Core
// AMD Phenom II P940 Quad-Core
// AMD Phenom II P960 Quad-Core
// AMD Phenom II X2 5111,163
// AMD Phenom II X2 5211,279
// AMD Phenom II X2 5451,204
// AMD Phenom II X2 5501,156
// AMD Phenom II X2 5551,294
// AMD Phenom II X2 5601,426
// AMD Phenom II X2 5651,389
// AMD Phenom II X2 5701,360
// AMD Phenom II X2 B531,126
// AMD Phenom II X2 B551,151
// AMD Phenom II X2 B571,099
// AMD Phenom II X2 B591,337
// AMD Phenom II X3 700e1,430
// AMD Phenom II X3 705e1,222
// AMD Phenom II X3 7101,499
// AMD Phenom II X3 7201,573
// AMD Phenom II X3 7401,424
// AMD Phenom II X3 B731,538
// AMD Phenom II X3 B751,485
// AMD Phenom II X3 B771,844
// AMD Phenom II X4 8051,844
// AMD Phenom II X4 8101,688
// AMD Phenom II X4 8202,108
// AMD Phenom II X4 8301,903
// AMD Phenom II X4 8402,353
// AMD Phenom II X4 840T2,245
// AMD Phenom II X4 8502,397
// AMD Phenom II X4 900e1,505
// AMD Phenom II X4 905e1,919
// AMD Phenom II X4 9101,699
// AMD Phenom II X4 910e2,016
// AMD Phenom II X4 9201,945
// AMD Phenom II X4 9252,161
// AMD Phenom II X4 9402,219
// AMD Phenom II X4 9452,235
// AMD Phenom II X4 9552,428
// AMD Phenom II X4 960T2,183
// AMD Phenom II X4 9652,519
// AMD Phenom II X4 9702,643
// AMD Phenom II X4 9732,204
// AMD Phenom II X4 9752,479
// AMD Phenom II X4 9772,377
// AMD Phenom II X4 9802,829
// AMD Phenom II X4 B05e1,862
// AMD Phenom II X4 B15e1,825
// AMD Phenom II X4 B252,108
// AMD Phenom II X4 B352,341
// AMD Phenom II X4 B402,238
// AMD Phenom II X4 B452,119
// AMD Phenom II X4 B502,237
// AMD Phenom II X4 B552,366
// AMD Phenom II X4 B602,357
// AMD Phenom II X4 B652,576
// AMD Phenom II X4 B702,303
// AMD Phenom II X4 B932,104
// AMD Phenom II X4 B952,254
// AMD Phenom II X4 B972,467
// AMD Phenom II X4 B992,520
// AMD Phenom II X6 1035T2,932
// AMD Phenom II X6 1045T3,003
// AMD Phenom II X6 1055T3,152
// AMD Phenom II X6 1065T3,244
// AMD Phenom II X6 1075T3,060
// AMD Phenom II X6 1090T3,604
// AMD Phenom II X6 1100T3,692
// AMD Phenom II X6 1405T3,335
// AMD Phenom II X620 Dual-Core
// AMD Phenom II X640 Dual-Core
// AMD Phenom II X920 Quad-Core
// AMD Phenom II X940 Quad-Core
// AMD Phenom X2 Dual-Core GE-5060
// AMD Phenom X2 Dual-Core GE-6060
// AMD Phenom X2 Dual-Core GE-7060
// AMD Phenom X2 Dual-Core GP-7730
// AMD Phenom X3 8550961
// AMD Phenom X4 Quad-Core GP-9500
// AMD Phenom X4 Quad-Core GP-9530
// AMD Ryzen 9 5980HS
// AMD Ryzen 9 PRO 3900
// AMD Ryzen Embedded R1305G
// AMD Ryzen Embedded R1505G
// AMD Ryzen Embedded R1606G
// AMD Ryzen Embedded V1202B
// AMD Ryzen Embedded V1404I
// AMD Ryzen Embedded V1500B
// AMD Ryzen Embedded V1605B
// AMD Ryzen Embedded V1756B
// AMD Ryzen Embedded V1807B
// AMD Ryzen Embedded V2718
// AMD Ryzen Embedded V2748
// AMD Ryzen Threadripper 1900X
// AMD Ryzen Threadripper 1920
// AMD Ryzen Threadripper 1920X
// AMD Ryzen Threadripper 1950X
// AMD Ryzen Threadripper 2920X
// AMD Ryzen Threadripper 2950X
// AMD Ryzen Threadripper 2970WX
// AMD Ryzen Threadripper 2990WX
// AMD Ryzen Threadripper 2990X
// AMD Ryzen Threadripper 3960X
// AMD Ryzen Threadripper 3970X
// AMD Ryzen Threadripper 3990X
// AMD Ryzen Threadripper PRO 3945WX
// AMD Ryzen Threadripper PRO 3955WX
// AMD Ryzen Threadripper PRO 3975WX
// AMD Ryzen Threadripper PRO 3995WX
// AMD Sempron 130
// AMD Sempron 140
// AMD Sempron 145
// AMD Sempron 150
// AMD Sempron 210U
// AMD Sempron 240
// AMD Sempron 2200+
// AMD Sempron 2300+
// AMD Sempron 2400+
// AMD Sempron 2500+
// AMD Sempron 2600+
// AMD Sempron 2650 APU
// AMD Sempron 2800+
// AMD Sempron 3000+
// AMD Sempron 3100+
// AMD Sempron 3200+
// AMD Sempron 3300+
// AMD Sempron 3400+
// AMD Sempron 3500+
// AMD Sempron 3600+
// AMD Sempron 3800+
// AMD Sempron 3850 APU
// AMD Sempron Dual Core 2100
// AMD Sempron Dual Core 2200
// AMD Sempron Dual Core 2300
// AMD Sempron LE-1100
// AMD Sempron LE-1150
// AMD Sempron LE-1200
// AMD Sempron LE-1250
// AMD Sempron LE-1300
// AMD Sempron M100
// AMD Sempron M120
// AMD Sempron SI-40
// AMD Sempron SI-42
// AMD Sempron X2 180
// AMD Sempron X2 190
// AMD Sempron X2 198 Dual-Core
// AMD Turion 64 Mobile MK-36
// AMD Turion 64 Mobile MK-38
// AMD Turion 64 Mobile ML-28
// AMD Turion 64 Mobile ML-30
// AMD Turion 64 Mobile ML-32
// AMD Turion 64 Mobile ML-34
// AMD Turion 64 Mobile ML-37
// AMD Turion 64 Mobile ML-40
// AMD Turion 64 Mobile ML-42
// AMD Turion 64 Mobile ML-44
// AMD Turion 64 Mobile MT-30
// AMD Turion 64 Mobile MT-32
// AMD Turion 64 Mobile MT-34
// AMD Turion 64 Mobile MT-37
// AMD Turion 64 X2 Mobile TL-50
// AMD Turion 64 X2 Mobile TL-52
// AMD Turion 64 X2 Mobile TL-56
// AMD Turion 64 X2 Mobile TL-58
// AMD Turion 64 X2 Mobile TL-60
// AMD Turion 64 X2 Mobile TL-62
// AMD Turion 64 X2 Mobile TL-64
// AMD Turion 64 X2 Mobile TL-66
// AMD Turion 64 X2 Mobile TL-68
// AMD Turion Dual-Core RM-70
// AMD Turion Dual-Core RM-72
// AMD Turion Dual-Core RM-74
// AMD Turion Dual-Core RM-75
// AMD Turion II Dual-Core Mobile M500
// AMD Turion II Dual-Core Mobile M520
// AMD Turion II Dual-Core Mobile M540
// AMD Turion II N530 Dual-Core
// AMD Turion II N550 Dual-Core
// AMD Turion II Neo K625 Dual-Core
// AMD Turion II Neo K685 Dual-Core
// AMD Turion II Neo N40L Dual-Core
// AMD Turion II Neo N54L Dual-Core
// AMD Turion II P520 Dual-Core
// AMD Turion II P540 Dual-Core
// AMD Turion II P560 Dual-Core
// AMD Turion II Ultra Dual-Core Mobile M600
// AMD Turion II Ultra Dual-Core Mobile M620
// AMD Turion II Ultra Dual-Core Mobile M640
// AMD Turion II Ultra Dual-Core Mobile M660
// AMD Turion Neo X2 Dual Core L625
// AMD Turion X2 Dual Core L510
// AMD Turion X2 Dual Core Mobile RM-70
// AMD Turion X2 Dual Core Mobile RM-76
// AMD Turion X2 Dual-Core Mobile RM-70
// AMD Turion X2 Dual-Core Mobile RM-72
// AMD Turion X2 Dual-Core Mobile RM-74
// AMD Turion X2 Dual-Core Mobile RM-75
// AMD Turion X2 Dual-Core Mobile RM-77
// AMD Turion X2 Ultra Dual-Core Mobile ZM-80
// AMD Turion X2 Ultra Dual-Core Mobile ZM-82
// AMD Turion X2 Ultra Dual-Core Mobile ZM-84
// AMD Turion X2 Ultra Dual-Core Mobile ZM-85
// AMD Turion X2 Ultra Dual-Core Mobile ZM-86
// AMD Turion X2 Ultra Dual-Core Mobile ZM-87
// AMD TurionX2 Dual Core Mobile RM-70
// AMD TurionX2 Dual Core Mobile RM-72
// AMD TurionX2 Ultra DualCore Mobile ZM-85
// AMD V105
// AMD V120
// AMD V140
// AMD V160
// AMD Z-01
// AMD Z-60 APU
// Amlogic
// Apple A8
// Apple A8X
// Apple A9
// Apple A9X
// Apple A11 Bionic
// Apple A12 Bionic
// Apple A12X Bionic
// Apple A13 Bionic
// Apple A14 Bionic
// Apple M1 8 Core 3200 MHz
// ARM ARMv7 rev 4 (v7l) 4 Core 1200 MHz
// ARM Cortex-A7 2 Core 960 MHz
// ARM Cortex-A7 2 Core 1080 MHz
// ARM Cortex-A7 4 Core 900 MHz
// ARM Cortex-A7 4 Core 1200 MHz
// ARM Cortex-A7 4 Core 1368 MHz
// ARM Cortex-A53 4 Core 0 MHz
// ARM Cortex-A53 4 Core 1152 MHz
// ARM Cortex-A53 4 Core 1200 MHz
// ARM Cortex-A53 4 Core 1296 MHz
// ARM Cortex-A53 4 Core 1400 MHz
// ARM Cortex-A53 4 Core 1512 MHz
// ARM Cortex-A53 4 Core 1536 MHz
// ARM Cortex-A53 4 Core 1800 MHz
// ARM Cortex-A53 6 Core 1896 MHz
// ARM Cortex-A57 4 Core 1479 MHz
// ARM Cortex-A57 4 Core 2014 MHz
// ARM Cortex-A72 2 Core 0 MHz
// ARM Cortex-A72 4 Core 0 MHz
// ARM Cortex-A72 4 Core 1500 MHz
// ARM Cortex-A72 4 Core 1750 MHz
// ARM Cortex-A72 4 Core 1800 MHz
// ARM Cortex-A72 4 Core 1850 MHz
// ARM Cortex-A72 4 Core 2000 MHz
// ARM Cortex-A72 4 Core 2100 MHz
// ARM Cortex-A72 4 Core 2200 MHz
// ARM Cortex-A72 6 Core 1416 MHz
// ARM Cortex-A72 8 Core 0 MHz
// ARM Cortex-A72 16 Core 0 MHz
// ARM Neoverse-N1 2 Core 0 MHz
// ARM Neoverse-N1 4 Core 0 MHz
// ARM Neoverse-N1 6 Core 0 MHz
// ARM Neoverse-N1 8 Core 0 MHz
// ARM Neoverse-N1 16 Core 0 MHz
// ARM Neoverse-N1 80 Core 3000 MHz
// ARM phytium FT1500a 4 Core 2000 MHz
// Athlon 64 Dual Core 3800+
// Athlon 64 Dual Core 5000+
// Athlon 64 Dual Core 5600+
// Athlon Dual Core 4050e
// Athlon Dual Core 4450e
// Athlon Dual Core 4850e
// BCM2711
// Celeron Dual-Core T3000 @ 1.80GHz
// Celeron Dual-Core T3100 @ 1.90GHz
// Celeron Dual-Core T3300 @ 2.00GHz
// Celeron Dual-Core T3500 @ 2.10GHz
// DO-Regular
// Dual-Core AMD Opteron 1220 SE
// Generic DT based system
// Haydn based on Qualcomm Technologies, Inc SM8350
// hi6210sft
// Hisilicon Kirin710
// Hisilicon Kirin810
// Hisilicon Kirin820
// Hisilicon Kirin970
// Hisilicon Kirin980
// Hisilicon Kirin985
// Hisilicon Kirin990
// Hisilicon Kirin9000
// HiSilicon Kirin 650
// HiSilicon Kirin 659
// Hisilicon Kirin 930
// HiSilicon Kirin 950
// HiSilicon Kirin 960
// HiSilicon Kirin 970
// HP Hexa-Core 2.0GHz
// Intel 2.80GHz
// Intel Atom 230 @ 1.60GHz
// Intel Atom 330 @ 1.60GHz
// Intel Atom C2338 @ 1.74GHz
// Intel Atom C2358 @ 1.74GHz
// Intel Atom C2538 @ 2.40GHz
// Intel Atom C2550 @ 2.40GHz
// Intel Atom C2558 @ 2.40GHz
// Intel Atom C2750 @ 2.40GHz
// Intel Atom C2750 @ 2.41GHz
// Intel Atom C2758 @ 2.40GHz
// Intel Atom C3338 @ 1.50GHz
// Intel Atom C3538 @ 2.10GHz
// Intel Atom C3558 @ 2.20GHz
// Intel Atom C3758 @ 2.20GHz
// Intel Atom C3858 @ 2.00GHz
// Intel Atom C3958 @ 2.00GHz
// Intel Atom D410 @ 1.66GHz
// Intel Atom D425 @ 1.80GHz
// Intel Atom D510 @ 1.66GHz
// Intel Atom D525 @ 1.80GHz
// Intel Atom D2500 @ 1.86GHz
// Intel Atom D2550 @ 1.86GHz
// Intel Atom D2560 @ 2.00GHz
// Intel Atom D2700 @ 2.13GHz
// Intel Atom D2701 @ 2.13GHz
// Intel Atom E3815 @ 1.46GHz
// Intel Atom E3825 @ 1.33GHz
// Intel Atom E3826 @ 1.46GHz
// Intel Atom E3827 @ 1.74GHz
// Intel Atom E3840 @ 1.91GHz
// Intel Atom E3845 @ 1.91GHz
// Intel Atom E3900 @ 1.60GHz
// Intel Atom E3940 @ 1.60GHz
// Intel Atom E3950 @ 1.60GHz
// Intel Atom N270 @ 1.60GHz
// Intel Atom N280 @ 1.66GHz
// Intel Atom N435 @ 1.33GHz
// Intel Atom N450 @ 1.66GHz
// Intel Atom N455 @ 1.66GHz
// Intel Atom N470 @ 1.83GHz
// Intel Atom N475 @ 1.83GHz
// Intel Atom N550 @ 1.50GHz
// Intel Atom N570 @ 1.66GHz
// Intel Atom N2100 @ 1.60GHz
// Intel Atom N2600 @ 1.60GHz
// Intel Atom N2800 @ 1.86GHz
// Intel Atom S1260 @ 2.00GHz
// Intel Atom T5700 @ 1.70GHz
// Intel Atom x5-E3930 @ 1.30GHz
// Intel Atom x5-E8000 @ 1.04GHz
// Intel Atom x5-Z8300 @ 1.44GHz
// Intel Atom x5-Z8330 @ 1.44GHz
// Intel Atom x5-Z8350 @ 1.44GHz
// Intel Atom x5-Z8500 @ 1.44GHz
// Intel Atom x5-Z8550 @ 1.44GHz
// Intel Atom x7-Z8700 @ 1.60GHz
// Intel Atom x7-Z8750 @ 1.60GHz
// Intel Atom x6211E @ 1.20GHz
// Intel Atom Z520 @ 1.33GHz
// Intel Atom Z530 @ 1.60GHz
// Intel Atom Z670 @ 1.50GHz
// Intel Atom Z2760 @ 1.80GHz
// Intel Atom Z3580 @ 1.33GHz
// Intel Atom Z3735D @ 1.33GHz
// Intel Atom Z3735E @ 1.33GHz
// Intel Atom Z3735F @ 1.33GHz
// Intel Atom Z3735G @ 1.33GHz
// Intel Atom Z3736F @ 1.33GHz
// Intel Atom Z3740 @ 1.33GHz
// Intel Atom Z3740D @ 1.33GHz
// Intel Atom Z3745 @ 1.33GHz
// Intel Atom Z3745D @ 1.33GHz
// Intel Atom Z3770 @ 1.46GHz
// Intel Atom Z3770D @ 1.49GHz
// Intel Atom Z3775 @ 1.46GHz
// Intel Atom Z3775D @ 1.49GHz
// Intel Atom Z3795 @ 1.60GHz
// Intel Celeron 1.70GHz
// Intel Celeron 1.80GHz
// Intel Celeron 2.00GHz
// Intel Celeron 2.13GHz
// Intel Celeron 2.20GHz
// Intel Celeron 2.26GHz
// Intel Celeron 2.30GHz
// Intel Celeron 2.40GHz
// Intel Celeron 2.50GHz
// Intel Celeron 2.53GHz
// Intel Celeron 2.60GHz
// Intel Celeron 2.66GHz
// Intel Celeron 2.70GHz
// Intel Celeron 2.80GHz
// Intel Celeron 2.93GHz
// Intel Celeron 3.06GHz
// Intel Celeron 3.20GHz
// Intel Celeron 3.33GHz
// Intel Celeron 215 @ 1.33GHz
// Intel Celeron 220 @ 1.20GHz
// Intel Celeron 420 @ 1.60GHz
// Intel Celeron 430 @ 1.80GHz
// Intel Celeron 440 @ 2.00GHz
// Intel Celeron 450 @ 2.20GHz
// Intel Celeron 530 @ 1.73GHz
// Intel Celeron 540 @ 1.86GHz
// Intel Celeron 550 @ 2.00GHz
// Intel Celeron 560 @ 2.13GHz
// Intel Celeron 570 @ 2.26GHz
// Intel Celeron 723 @ 1.20GHz
// Intel Celeron 743 @ 1.30GHz
// Intel Celeron 807 @ 1.50GHz
// Intel Celeron 807UE @ 1.00GHz
// Intel Celeron 827E @ 1.40GHz
// Intel Celeron 847 @ 1.10GHz
// Intel Celeron 847E @ 1.10GHz
// Intel Celeron 857 @ 1.20GHz
// Intel Celeron 867 @ 1.30GHz
// Intel Celeron 877 @ 1.40GHz
// Intel Celeron 887 @ 1.50GHz
// Intel Celeron 900 @ 2.20GHz
// Intel Celeron 925 @ 2.30GHz
// Intel Celeron 1000M @ 1.80GHz
// Intel Celeron 1000MHz
// Intel Celeron 1005M @ 1.90GHz
// Intel Celeron 1007U @ 1.50GHz
// Intel Celeron 1017U @ 1.60GHz
// Intel Celeron 1019Y @ 1.00GHz
// Intel Celeron 1020E @ 2.20GHz
// Intel Celeron 1020M @ 2.10GHz
// Intel Celeron 1037U @ 1.80GHz
// Intel Celeron 1047UE @ 1.40GHz
// Intel Celeron 1100MHz
// Intel Celeron 1200MHz
// Intel Celeron 2000E @ 2.20GHz
// Intel Celeron 2002E @ 1.50GHz
// Intel Celeron 2950M @ 2.00GHz
// Intel Celeron 2955U @ 1.40GHz
// Intel Celeron 2957U @ 1.40GHz
// Intel Celeron 2961Y @ 1.10GHz
// Intel Celeron 2970M @ 2.20GHz
// Intel Celeron 2980U @ 1.60GHz
// Intel Celeron 2981U @ 1.60GHz
// Intel Celeron 3205U @ 1.50GHz
// Intel Celeron 3215U @ 1.70GHz
// Intel Celeron 3755U @ 1.70GHz
// Intel Celeron 3765U @ 1.90GHz
// Intel Celeron 3855U @ 1.60GHz
// Intel Celeron 3865U @ 1.80GHz
// Intel Celeron 3867U @ 1.80GHz
// Intel Celeron 3955U @ 2.00GHz
// Intel Celeron 3965U @ 2.20GHz
// Intel Celeron 3965Y @ 1.50GHz
// Intel Celeron 4205U @ 1.80GHz
// Intel Celeron 4305U @ 2.20GHz
// Intel Celeron 4305UE @ 2.00GHz
// Intel Celeron 5205U @ 1.90GHz
// Intel Celeron 6305 @ 1.80GHz
// Intel Celeron 6305E @ 1.80GHz
// Intel Celeron @ 1.30GHz
// Intel Celeron B710 @ 1.60GHz
// Intel Celeron B800 @ 1.50GHz
// Intel Celeron B810 @ 1.60GHz
// Intel Celeron B815 @ 1.60GHz
// Intel Celeron B820 @ 1.70GHz
// Intel Celeron B830 @ 1.80GHz
// Intel Celeron B840 @ 1.90GHz
// Intel Celeron D 347 @ 3.06GHz
// Intel Celeron D 352 @ 3.20GHz
// Intel Celeron D 356 @ 3.33GHz
// Intel Celeron D 360 @ 3.46GHz
// Intel Celeron D 420 @ 1.60GHz
// Intel Celeron E1200 @ 1.60GHz
// Intel Celeron E1400 @ 2.00GHz
// Intel Celeron E1500 @ 2.20GHz
// Intel Celeron E1600 @ 2.40GHz
// Intel Celeron E3200 @ 2.40GHz
// Intel Celeron E3300 @ 2.50GHz
// Intel Celeron E3400 @ 2.60GHz
// Intel Celeron E3500 @ 2.70GHz
// Intel Celeron G440 @ 1.60GHz
// Intel Celeron G460 @ 1.80GHz
// Intel Celeron G465 @ 1.90GHz
// Intel Celeron G470 @ 2.00GHz
// Intel Celeron G530 @ 2.40GHz
// Intel Celeron G530T @ 2.00GHz
// Intel Celeron G540 @ 2.50GHz
// Intel Celeron G540T @ 2.10GHz
// Intel Celeron G550 @ 2.60GHz
// Intel Celeron G550T @ 2.20GHz
// Intel Celeron G555 @ 2.70GHz
// Intel Celeron G1101 @ 2.27GHz
// Intel Celeron G1610 @ 2.60GHz
// Intel Celeron G1610T @ 2.30GHz
// Intel Celeron G1620 @ 2.70GHz
// Intel Celeron G1620T @ 2.40GHz
// Intel Celeron G1630 @ 2.80GHz
// Intel Celeron G1820 @ 2.70GHz
// Intel Celeron G1820T @ 2.40GHz
// Intel Celeron G1820TE @ 2.20GHz
// Intel Celeron G1830 @ 2.80GHz
// Intel Celeron G1840 @ 2.80GHz
// Intel Celeron G1840T @ 2.50GHz
// Intel Celeron G1850 @ 2.90GHz
// Intel Celeron G3900 @ 2.80GHz
// Intel Celeron G3900E @ 2.40GHz
// Intel Celeron G3900T @ 2.60GHz
// Intel Celeron G3900TE @ 2.30GHz
// Intel Celeron G3920 @ 2.90GHz
// Intel Celeron G3930 @ 2.90GHz
// Intel Celeron G3930T @ 2.70GHz
// Intel Celeron G3930TE @ 2.70GHz
// Intel Celeron G3950 @ 3.00GHz
// Intel Celeron G4900 @ 3.10GHz
// Intel Celeron G4900T @ 2.90GHz
// Intel Celeron G4920 @ 3.20GHz
// Intel Celeron G4930 @ 3.20GHz
// Intel Celeron G4930T @ 3.00GHz
// Intel Celeron G4950 @ 3.30GHz
// Intel Celeron G5900 @ 3.40GHz
// Intel Celeron G5905 @ 3.50GHz
// Intel Celeron G5905T @ 3.30GHz
// Intel Celeron G5920 @ 3.50GHz
// Intel Celeron G5925 @ 3.60GHz
// Intel Celeron J1750 @ 2.41GHz
// Intel Celeron J1800 @ 2.41GHz
// Intel Celeron J1850 @ 1.99GHz
// Intel Celeron J1900 @ 1.99GHz
// Intel Celeron J3060 @ 1.60GHz
// Intel Celeron J3160 @ 1.60GHz
// Intel Celeron J3355 @ 2.00GHz
// Intel Celeron J3455 @ 1.50GHz
// Intel Celeron J3455E @ 1.50GHz
// Intel Celeron J4005 @ 2.00GHz
// Intel Celeron J4025 @ 2.00GHz
// Intel Celeron J4105 @ 1.50GHz
// Intel Celeron J4115 @ 1.80GHz
// Intel Celeron J4125 @ 2.00GHz
// Intel Celeron J6412 @ 2.00GHz
// Intel Celeron J6413 @ 1.80GHz
// Intel Celeron M 1.00GHz
// Intel Celeron M 1.30GHz
// Intel Celeron M 1.50GHz
// Intel Celeron M 1.60GHz
// Intel Celeron M 1.70GHz
// Intel Celeron M 360 1.40GHz
// Intel Celeron M 410 @ 1.46GHz
// Intel Celeron M 420 @ 1.60GHz
// Intel Celeron M 430 @ 1.73GHz
// Intel Celeron M 440 @ 1.86GHz
// Intel Celeron M 443 @ 1.20GHz
// Intel Celeron M 450 @ 2.00GHz
// Intel Celeron M 520 @ 1.60GHz
// Intel Celeron M 530 @ 1.73GHz
// Intel Celeron M 723 @ 1.20GHz
// Intel Celeron M 900MHz
// Intel Celeron M 1300MHz
// Intel Celeron M 1500MHz
// Intel Celeron N2805 @ 1.46GHz
// Intel Celeron N2806 @ 1.60GHz
// Intel Celeron N2807 @ 1.58GHz
// Intel Celeron N2808 @ 1.58GHz
// Intel Celeron N2810 @ 2.00GHz
// Intel Celeron N2815 @ 1.86GHz
// Intel Celeron N2820 @ 2.13GHz
// Intel Celeron N2830 @ 2.16GHz
// Intel Celeron N2840 @ 2.16GHz
// Intel Celeron N2910 @ 1.60GHz
// Intel Celeron N2920 @ 1.86GHz
// Intel Celeron N2930 @ 1.83GHz
// Intel Celeron N2940 @ 1.83GHz
// Intel Celeron N3000 @ 1.04GHz
// Intel Celeron N3010 @ 1.04GHz
// Intel Celeron N3050 @ 1.60GHz
// Intel Celeron N3060 @ 1.60GHz
// Intel Celeron N3150 @ 1.60GHz
// Intel Celeron N3160 @ 1.60GHz
// Intel Celeron N3350 @ 1.10GHz
// Intel Celeron N3450 @ 1.10GHz
// Intel Celeron N4000 @ 1.10GHz
// Intel Celeron N4000C @ 1.10GHz
// Intel Celeron N4020 @ 1.10GHz
// Intel Celeron N4100 @ 1.10GHz
// Intel Celeron N4120 @ 1.10GHz
// Intel Celeron N4500 @ 1.10GHz
// Intel Celeron N5100 @ 1.10GHz
// Intel Celeron N5105 @ 2.00GHz
// Intel Celeron N6211 @ 1.20GHz
// Intel Celeron P4500 @ 1.87GHz
// Intel Celeron P4505 @ 1.87GHz
// Intel Celeron P4600 @ 2.00GHz
// Intel Celeron SU2300 @ 1.20GHz
// Intel Celeron T1600 @ 1.66GHz
// Intel Celeron U1900 @ 1.99GHz
// Intel Celeron U3400 @ 1.07GHz
// Intel Celeron U3600 @ 1.20GHz
// Intel Core2 Duo E4300 @ 1.80GHz
// Intel Core2 Duo E4400 @ 2.00GHz
// Intel Core2 Duo E4500 @ 2.20GHz
// Intel Core2 Duo E4600 @ 2.40GHz
// Intel Core2 Duo E4700 @ 2.60GHz
// Intel Core2 Duo E6300 @ 1.86GHz
// Intel Core2 Duo E6320 @ 1.86GHz
// Intel Core2 Duo E6400 @ 2.13GHz
// Intel Core2 Duo E6420 @ 2.13GHz
// Intel Core2 Duo E6540 @ 2.33GHz
// Intel Core2 Duo E6550 @ 2.33GHz
// Intel Core2 Duo E6600 @ 2.40GHz
// Intel Core2 Duo E6700 @ 2.66GHz
// Intel Core2 Duo E6750 @ 2.66GHz
// Intel Core2 Duo E6850 @ 3.00GHz
// Intel Core2 Duo E7200 @ 2.53GHz
// Intel Core2 Duo E7300 @ 2.66GHz
// Intel Core2 Duo E7400 @ 2.80GHz
// Intel Core2 Duo E7500 @ 2.93GHz
// Intel Core2 Duo E7600 @ 3.06GHz
// Intel Core2 Duo E8135 @ 2.40GHz
// Intel Core2 Duo E8135 @ 2.66GHz
// Intel Core2 Duo E8200 @ 2.66GHz
// Intel Core2 Duo E8235 @ 2.80GHz
// Intel Core2 Duo E8290 @ 2.83GHz
// Intel Core2 Duo E8300 @ 2.83GHz
// Intel Core2 Duo E8335 @ 2.66GHz
// Intel Core2 Duo E8335 @ 2.93GHz
// Intel Core2 Duo E8400 @ 3.00GHz
// Intel Core2 Duo E8435 @ 3.06GHz
// Intel Core2 Duo E8500 @ 3.16GHz
// Intel Core2 Duo E8600 @ 3.33GHz
// Intel Core2 Duo L7100 @ 1.20GHz
// Intel Core2 Duo L7300 @ 1.40GHz
// Intel Core2 Duo L7400 @ 1.50GHz
// Intel Core2 Duo L7500 @ 1.60GHz
// Intel Core2 Duo L7700 @ 1.80GHz
// Intel Core2 Duo L7800 @ 2.00GHz
// Intel Core2 Duo L9300 @ 1.60GHz
// Intel Core2 Duo L9600 @ 2.13GHz
// Intel Core2 Duo P7350 @ 2.00GHz
// Intel Core2 Duo P7370 @ 2.00GHz
// Intel Core2 Duo P7450 @ 2.13GHz
// Intel Core2 Duo P7550 @ 2.26GHz
// Intel Core2 Duo P7570 @ 2.26GHz
// Intel Core2 Duo P8400 @ 2.26GHz
// Intel Core2 Duo P8600 @ 2.40GHz
// Intel Core2 Duo P8700 @ 2.53GHz
// Intel Core2 Duo P8800 @ 2.66GHz
// Intel Core2 Duo P9300 @ 2.26GHz
// Intel Core2 Duo P9500 @ 2.53GHz
// Intel Core2 Duo P9600 @ 2.53GHz
// Intel Core2 Duo P9600 @ 2.66GHz
// Intel Core2 Duo P9700 @ 2.80GHz
// Intel Core2 Duo SL9400 @ 1.86GHz
// Intel Core2 Duo SP9400 @ 2.40GHz
// Intel Core2 Duo SU9400 @ 1.40GHz
// Intel Core2 Duo T5200 @ 1.60GHz
// Intel Core2 Duo T5250 @ 1.50GHz
// Intel Core2 Duo T5270 @ 1.40GHz
// Intel Core2 Duo T5300 @ 1.73GHz
// Intel Core2 Duo T5450 @ 1.66GHz
// Intel Core2 Duo T5470 @ 1.60GHz
// Intel Core2 Duo T5500 @ 1.66GHz
// Intel Core2 Duo T5550 @ 1.83GHz
// Intel Core2 Duo T5600 @ 1.83GHz
// Intel Core2 Duo T5670 @ 1.80GHz
// Intel Core2 Duo T5750 @ 2.00GHz
// Intel Core2 Duo T5800 @ 2.00GHz
// Intel Core2 Duo T5850 @ 2.16GHz
// Intel Core2 Duo T5870 @ 2.00GHz
// Intel Core2 Duo T5900 @ 2.20GHz
// Intel Core2 Duo T6400 @ 2.00GHz
// Intel Core2 Duo T6500 @ 2.10GHz
// Intel Core2 Duo T6570 @ 2.10GHz
// Intel Core2 Duo T6600 @ 2.20GHz
// Intel Core2 Duo T6670 @ 2.20GHz
// Intel Core2 Duo T7100 @ 1.80GHz
// Intel Core2 Duo T7200 @ 2.00GHz
// Intel Core2 Duo T7250 @ 2.00GHz
// Intel Core2 Duo T7300 @ 2.00GHz
// Intel Core2 Duo T7400 @ 2.16GHz
// Intel Core2 Duo T7500 @ 2.20GHz
// Intel Core2 Duo T7600 @ 2.33GHz
// Intel Core2 Duo T7700 @ 2.40GHz
// Intel Core2 Duo T7800 @ 2.60GHz
// Intel Core2 Duo T8100 @ 2.10GHz
// Intel Core2 Duo T8300 @ 2.40GHz
// Intel Core2 Duo T9300 @ 2.50GHz
// Intel Core2 Duo T9400 @ 2.53GHz
// Intel Core2 Duo T9500 @ 2.60GHz
// Intel Core2 Duo T9550 @ 2.66GHz
// Intel Core2 Duo T9600 @ 2.80GHz
// Intel Core2 Duo T9800 @ 2.93GHz
// Intel Core2 Duo T9900 @ 3.06GHz
// Intel Core2 Duo U7300 @ 1.30GHz
// Intel Core2 Duo U7500 @ 1.06GHz
// Intel Core2 Duo U7600 @ 1.20GHz
// Intel Core2 Duo U7700 @ 1.33GHz
// Intel Core2 Duo U9300 @ 1.20GHz
// Intel Core2 Duo U9600 @ 1.60GHz
// Intel Core2 Extreme Q6800 @ 2.93GHz
// Intel Core2 Extreme Q6850 @ 3.00GHz
// Intel Core2 Extreme Q9200 @ 2.40GHz
// Intel Core2 Extreme Q9300 @ 2.53GHz
// Intel Core2 Extreme X6800 @ 2.93GHz
// Intel Core2 Extreme X7800 @ 2.60GHz
// Intel Core2 Extreme X7900 @ 2.80GHz
// Intel Core2 Extreme X9000 @ 2.80GHz
// Intel Core2 Extreme X9100 @ 3.06GHz
// Intel Core2 Extreme X9650 @ 3.00GHz
// Intel Core2 Extreme X9750 @ 3.16GHz
// Intel Core2 Extreme X9770 @ 3.20GHz
// Intel Core2 Extreme X9775 @ 3.20GHz
// Intel Core2 Quad Q6600 @ 2.40GHz
// Intel Core2 Quad Q6700 @ 2.66GHz
// Intel Core2 Quad Q8200 @ 2.33GHz
// Intel Core2 Quad Q8300 @ 2.50GHz
// Intel Core2 Quad Q8400 @ 2.66GHz
// Intel Core2 Quad Q9000 @ 2.00GHz
// Intel Core2 Quad Q9100 @ 2.26GHz
// Intel Core2 Quad Q9300 @ 2.50GHz
// Intel Core2 Quad Q9400 @ 2.66GHz
// Intel Core2 Quad Q9450 @ 2.66GHz
// Intel Core2 Quad Q9500 @ 2.83GHz
// Intel Core2 Quad Q9505 @ 2.83GHz
// Intel Core2 Quad Q9550 @ 2.83GHz
// Intel Core2 Quad Q9650 @ 3.00GHz
// Intel Core2 Solo U2100 @ 1.06GHz
// Intel Core2 Solo U3500 @ 1.40GHz
// Intel Core 860 @ 2.80GHz
// Intel Core Duo L2300 @ 1.50GHz
// Intel Core Duo L2400 @ 1.66GHz
// Intel Core Duo L2500 @ 1.83GHz
// Intel Core Duo T2050 @ 1.60GHz
// Intel Core Duo T2250 @ 1.73GHz
// Intel Core Duo T2300 @ 1.66GHz
// Intel Core Duo T2350 @ 1.86GHz
// Intel Core Duo T2400 @ 1.83GHz
// Intel Core Duo T2450 @ 2.00GHz
// Intel Core Duo T2500 @ 2.00GHz
// Intel Core Duo T2600 @ 2.16GHz
// Intel Core Duo T2700 @ 2.33GHz
// Intel Core Duo U2400 @ 1.06GHz
// Intel Core Duo U2500 @ 1.20GHz
// Intel Core i3-330E @ 2.13GHz
// Intel Core i3-330M @ 2.13GHz
// Intel Core i3-330UM @ 1.20GHz
// Intel Core i3-350M @ 2.27GHz
// Intel Core i3-370M @ 2.40GHz
// Intel Core i3-380M @ 2.53GHz
// Intel Core i3-380UM @ 1.33GHz
// Intel Core i3-390M @ 2.67GHz
// Intel Core i3-530 @ 2.93GHz
// Intel Core i3-540 @ 3.07GHz
// Intel Core i3-550 @ 3.20GHz
// Intel Core i3-560 @ 3.33GHz
// Intel Core i3-1000NG4 @ 1.10GHz
// Intel Core i3-1005G1 @ 1.20GHz
// Intel Core i3-1115G4 @ 3.00GHz
// Intel Core i3-1125G4 @ 2.00GHz
// Intel Core i3-2100 @ 3.10GHz
// Intel Core i3-2100T @ 2.50GHz
// Intel Core i3-2102 @ 3.10GHz
// Intel Core i3-2105 @ 3.10GHz
// Intel Core i3-2120 @ 3.30GHz
// Intel Core i3-2120T @ 2.60GHz
// Intel Core i3-2125 @ 3.30GHz
// Intel Core i3-2130 @ 3.40GHz
// Intel Core i3-2140 @ 3.50GHz
// Intel Core i3-2310E @ 2.10GHz
// Intel Core i3-2310M @ 2.10GHz
// Intel Core i3-2312M @ 2.10GHz
// Intel Core i3-2328M @ 2.20GHz
// Intel Core i3-2330E @ 2.20GHz
// Intel Core i3-2330M @ 2.20GHz
// Intel Core i3-2332M @ 2.20GHz
// Intel Core i3-2340UE @ 1.30GHz
// Intel Core i3-2348M @ 2.30GHz
// Intel Core i3-2350M @ 2.30GHz
// Intel Core i3-2357M @ 1.30GHz
// Intel Core i3-2365M @ 1.40GHz
// Intel Core i3-2367M @ 1.40GHz
// Intel Core i3-2370M @ 2.40GHz
// Intel Core i3-2375M @ 1.50GHz
// Intel Core i3-2377M @ 1.50GHz
// Intel Core i3-3110M @ 2.40GHz
// Intel Core i3-3120M @ 2.50GHz
// Intel Core i3-3130M @ 2.60GHz
// Intel Core i3-3210 @ 3.20GHz
// Intel Core i3-3217U @ 1.80GHz
// Intel Core i3-3217UE @ 1.60GHz
// Intel Core i3-3220 @ 3.30GHz
// Intel Core i3-3220T @ 2.80GHz
// Intel Core i3-3225 @ 3.30GHz
// Intel Core i3-3227U @ 1.90GHz
// Intel Core i3-3229Y @ 1.40GHz
// Intel Core i3-3240 @ 3.40GHz
// Intel Core i3-3240T @ 2.90GHz
// Intel Core i3-3245 @ 3.40GHz
// Intel Core i3-3250 @ 3.50GHz
// Intel Core i3-3250T @ 3.00GHz
// Intel Core i3-4000M @ 2.40GHz
// Intel Core i3-4005U @ 1.70GHz
// Intel Core i3-4010U @ 1.70GHz
// Intel Core i3-4010Y @ 1.30GHz
// Intel Core i3-4012Y @ 1.50GHz
// Intel Core i3-4020Y @ 1.50GHz
// Intel Core i3-4025U @ 1.90GHz
// Intel Core i3-4030U @ 1.90GHz
// Intel Core i3-4030Y @ 1.60GHz
// Intel Core i3-4100M @ 2.50GHz
// Intel Core i3-4110M @ 2.60GHz
// Intel Core i3-4110U @ 1.90GHz
// Intel Core i3-4120U @ 2.00GHz
// Intel Core i3-4130 @ 3.40GHz
// Intel Core i3-4130T @ 2.90GHz
// Intel Core i3-4150 @ 3.50GHz
// Intel Core i3-4150T @ 3.00GHz
// Intel Core i3-4158U @ 2.00GHz
// Intel Core i3-4160 @ 3.60GHz
// Intel Core i3-4160T @ 3.10GHz
// Intel Core i3-4170 @ 3.70GHz
// Intel Core i3-4170T @ 3.20GHz
// Intel Core i3-4330 @ 3.50GHz
// Intel Core i3-4330T @ 3.00GHz
// Intel Core i3-4330TE @ 2.40GHz
// Intel Core i3-4340 @ 3.60GHz
// Intel Core i3-4350 @ 3.60GHz
// Intel Core i3-4350T @ 3.10GHz
// Intel Core i3-4360 @ 3.70GHz
// Intel Core i3-4360T @ 3.20GHz
// Intel Core i3-4370 @ 3.80GHz
// Intel Core i3-4370T @ 3.30GHz
// Intel Core i3-4570T @ 2.90GHz
// Intel Core i3-5005U @ 2.00GHz
// Intel Core i3-5010U @ 2.10GHz
// Intel Core i3-5015U @ 2.10GHz
// Intel Core i3-5020U @ 2.20GHz
// Intel Core i3-5157U @ 2.50GHz
// Intel Core i3-6006U @ 2.00GHz
// Intel Core i3-6098P @ 3.60GHz
// Intel Core i3-6100 @ 3.70GHz
// Intel Core i3-6100E @ 2.70GHz
// Intel Core i3-6100H @ 2.70GHz
// Intel Core i3-6100T @ 3.20GHz
// Intel Core i3-6100TE @ 2.70GHz
// Intel Core i3-6100U @ 2.30GHz
// Intel Core i3-6102E @ 1.90GHz
// Intel Core i3-6157U @ 2.40GHz
// Intel Core i3-6300 @ 3.80GHz
// Intel Core i3-6300T @ 3.30GHz
// Intel Core i3-6320 @ 3.90GHz
// Intel Core i3-7020U @ 2.30GHz
// Intel Core i3-7100 @ 3.90GHz
// Intel Core i3-7100H @ 3.00GHz
// Intel Core i3-7100T @ 3.40GHz
// Intel Core i3-7100U @ 2.40GHz
// Intel Core i3-7101TE @ 3.40GHz
// Intel Core i3-7102E @ 2.10GHz
// Intel Core i3-7130U @ 2.70GHz
// Intel Core i3-7167U @ 2.80GHz
// Intel Core i3-7300 @ 4.00GHz
// Intel Core i3-7300T @ 3.50GHz
// Intel Core i3-7320 @ 4.10GHz
// Intel Core i3-7350K @ 4.20GHz
// Intel Core i3-8100 @ 3.60GHz
// Intel Core i3-8100B @ 3.60GHz
// Intel Core i3-8100T @ 3.10GHz
// Intel Core i3-8109U @ 3.00GHz
// Intel Core i3-8121U @ 2.20GHz
// Intel Core i3-8130U @ 2.20GHz
// Intel Core i3-8145U @ 2.10GHz
// Intel Core i3-8145UE @ 2.20GHz
// Intel Core i3-8300 @ 3.70GHz
// Intel Core i3-8300T @ 3.20GHz
// Intel Core i3-8350K @ 4.00GHz
// Intel Core i3-9100 @ 3.60GHz
// Intel Core i3-9100F @ 3.60GHz
// Intel Core i3-9100T @ 3.10GHz
// Intel Core i3-9100TE @ 2.20GHz
// Intel Core i3-9300 @ 3.70GHz
// Intel Core i3-9300T @ 3.20GHz
// Intel Core i3-9320 @ 3.70GHz
// Intel Core i3-9350K @ 4.00GHz
// Intel Core i3-9350KF @ 4.00GHz
// Intel Core i3-10100 @ 3.60GHz
// Intel Core i3-10100F @ 3.60GHz
// Intel Core i3-10100T @ 3.00GHz
// Intel Core i3-10105 @ 3.70GHz
// Intel Core i3-10105F @ 3.70GHz
// Intel Core i3-10105T @ 3.00GHz
// Intel Core i3-10110U @ 2.10GHz
// Intel Core i3-10110Y @ 1.00GHz
// Intel Core i3-10300 @ 3.70GHz
// Intel Core i3-10300T @ 3.00GHz
// Intel Core i3-10305 @ 3.80GHz
// Intel Core i3-10305T @ 3.00GHz
// Intel Core i3-10320 @ 3.80GHz
// Intel Core i3-21050 @ 3.10GHz
// Intel Core i5 750S @ 2.40GHz
// Intel Core i5 E 520 @ 2.40GHz
// Intel Core i5-7Y54 @ 1.20GHz
// Intel Core i5-7Y57 @ 1.20GHz
// Intel Core i5-430M @ 2.27GHz
// Intel Core i5-430UM @ 1.20GHz
// Intel Core i5-450M @ 2.40GHz
// Intel Core i5-460M @ 2.53GHz
// Intel Core i5-470UM @ 1.33GHz
// Intel Core i5-480M @ 2.67GHz
// Intel Core i5-520M @ 2.40GHz
// Intel Core i5-520UM @ 1.07GHz
// Intel Core i5-540M @ 2.53GHz
// Intel Core i5-540UM @ 1.20GHz
// Intel Core i5-560M @ 2.67GHz
// Intel Core i5-560UM @ 1.33GHz
// Intel Core i5-580M @ 2.67GHz
// Intel Core i5-650 @ 3.20GHz
// Intel Core i5-655K @ 3.20GHz
// Intel Core i5-660 @ 3.33GHz
// Intel Core i5-661 @ 3.33GHz
// Intel Core i5-670 @ 3.47GHz
// Intel Core i5-680 @ 3.60GHz
// Intel Core i5-750 @ 2.67GHz
// Intel Core i5-760 @ 2.80GHz
// Intel Core i5-760S @ 2.53GHz
// Intel Core i5-1030NG7 @ 1.10GHz
// Intel Core i5-1035G1 @ 1.00GHz
// Intel Core i5-1035G4 @ 1.10GHz
// Intel Core i5-1035G7 @ 1.20GHz
// Intel Core i5-1038NG7 @ 2.00GHz
// Intel Core i5-1130G7 @ 1.10GHz
// Intel Core i5-1135G7 @ 2.40GHz
// Intel Core i5-1140G7 @ 1.10GHz
// Intel Core i5-1145G7 @ 2.60GHz
// Intel Core i5-1145G7E @ 2.60GHz
// Intel Core i5-2300 @ 2.80GHz
// Intel Core i5-2310 @ 2.90GHz
// Intel Core i5-2320 @ 3.00GHz
// Intel Core i5-2380P @ 3.10GHz
// Intel Core i5-2390T @ 2.70GHz
// Intel Core i5-2400 @ 3.10GHz
// Intel Core i5-2400S @ 2.50GHz
// Intel Core i5-2405S @ 2.50GHz
// Intel Core i5-2410M @ 2.30GHz
// Intel Core i5-2415M @ 2.30GHz
// Intel Core i5-2430M @ 2.40GHz
// Intel Core i5-2435M @ 2.40GHz
// Intel Core i5-2450M @ 2.50GHz
// Intel Core i5-2450P @ 3.20GHz
// Intel Core i5-2467M @ 1.60GHz
// Intel Core i5-2500 @ 3.30GHz
// Intel Core i5-2500K @ 3.30GHz
// Intel Core i5-2500S @ 2.70GHz
// Intel Core i5-2500T @ 2.30GHz
// Intel Core i5-2510E @ 2.50GHz
// Intel Core i5-2515E @ 2.50GHz
// Intel Core i5-2520M @ 2.50GHz
// Intel Core i5-2537M @ 1.40GHz
// Intel Core i5-2540M @ 2.60GHz
// Intel Core i5-2550K @ 3.40GHz
// Intel Core i5-2557M @ 1.70GHz
// Intel Core i5-2560M @ 2.70GHz
// Intel Core i5-3170K @ 3.20GHz
// Intel Core i5-3210M @ 2.50GHz
// Intel Core i5-3230M @ 2.60GHz
// Intel Core i5-3317U @ 1.70GHz
// Intel Core i5-3320M @ 2.60GHz
// Intel Core i5-3330 @ 3.00GHz
// Intel Core i5-3330S @ 2.70GHz
// Intel Core i5-3335S @ 2.70GHz
// Intel Core i5-3337U @ 1.80GHz
// Intel Core i5-3339Y @ 1.50GHz
// Intel Core i5-3340 @ 3.10GHz
// Intel Core i5-3340M @ 2.70GHz
// Intel Core i5-3340S @ 2.80GHz
// Intel Core i5-3350P @ 3.10GHz
// Intel Core i5-3360M @ 2.80GHz
// Intel Core i5-3380M @ 2.90GHz
// Intel Core i5-3427U @ 1.80GHz
// Intel Core i5-3437U @ 1.90GHz
// Intel Core i5-3439Y @ 1.50GHz
// Intel Core i5-3450 @ 3.10GHz
// Intel Core i5-3450S @ 2.80GHz
// Intel Core i5-3470 @ 3.20GHz
// Intel Core i5-3470S @ 2.90GHz
// Intel Core i5-3470T @ 2.90GHz
// Intel Core i5-3475S @ 2.90GHz
// Intel Core i5-3550 @ 3.30GHz
// Intel Core i5-3550S @ 3.00GHz
// Intel Core i5-3570 @ 3.40GHz
// Intel Core i5-3570K @ 3.40GHz
// Intel Core i5-3570S @ 3.10GHz
// Intel Core i5-3570T @ 2.30GHz
// Intel Core i5-3610ME @ 2.70GHz
// Intel Core i5-4200H @ 2.80GHz
// Intel Core i5-4200M @ 2.50GHz
// Intel Core i5-4200U @ 1.60GHz
// Intel Core i5-4200Y @ 1.40GHz
// Intel Core i5-4202Y @ 1.60GHz
// Intel Core i5-4210H @ 2.90GHz
// Intel Core i5-4210M @ 2.60GHz
// Intel Core i5-4210U @ 1.70GHz
// Intel Core i5-4210Y @ 1.50GHz
// Intel Core i5-4220Y @ 1.60GHz
// Intel Core i5-4230U @ 1.90GHz
// Intel Core i5-4250U @ 1.30GHz
// Intel Core i5-4258U @ 2.40GHz
// Intel Core i5-4260U @ 1.40GHz
// Intel Core i5-4278U @ 2.60GHz
// Intel Core i5-4288U @ 2.60GHz
// Intel Core i5-4300M @ 2.60GHz
// Intel Core i5-4300U @ 1.90GHz
// Intel Core i5-4300Y @ 1.60GHz
// Intel Core i5-4302Y @ 1.60GHz
// Intel Core i5-4308U @ 2.80GHz
// Intel Core i5-4310M @ 2.70GHz
// Intel Core i5-4310U @ 2.00GHz
// Intel Core i5-4330M @ 2.80GHz
// Intel Core i5-4340M @ 2.90GHz
// Intel Core i5-4350U @ 1.40GHz
// Intel Core i5-4400E @ 2.70GHz
// Intel Core i5-4402E @ 1.60GHz
// Intel Core i5-4422E @ 1.80GHz
// Intel Core i5-4430 @ 3.00GHz
// Intel Core i5-4430S @ 2.70GHz
// Intel Core i5-4440 @ 3.10GHz
// Intel Core i5-4440S @ 2.80GHz
// Intel Core i5-4460 @ 3.20GHz
// Intel Core i5-4460S @ 2.90GHz
// Intel Core i5-4460T @ 1.90GHz
// Intel Core i5-4470S @ 3.00GHz
// Intel Core i5-4570 @ 3.20GHz
// Intel Core i5-4570R @ 2.70GHz
// Intel Core i5-4570S @ 2.90GHz
// Intel Core i5-4570T @ 2.90GHz
// Intel Core i5-4570TE @ 2.70GHz
// Intel Core i5-4590 @ 3.30GHz
// Intel Core i5-4590S @ 3.00GHz
// Intel Core i5-4590T @ 2.00GHz
// Intel Core i5-4670 @ 3.40GHz
// Intel Core i5-4670K @ 3.40GHz
// Intel Core i5-4670K CPT @ 3.40GHz
// Intel Core i5-4670R @ 3.00GHz
// Intel Core i5-4670S @ 3.10GHz
// Intel Core i5-4670T @ 2.30GHz
// Intel Core i5-4690 @ 3.50GHz
// Intel Core i5-4690K @ 3.50GHz
// Intel Core i5-4690S @ 3.20GHz
// Intel Core i5-4690T @ 2.50GHz
// Intel Core i5-5200U @ 2.20GHz
// Intel Core i5-5250U @ 1.60GHz
// Intel Core i5-5257U @ 2.70GHz
// Intel Core i5-5287U @ 2.90GHz
// Intel Core i5-5300U @ 2.30GHz
// Intel Core i5-5350U @ 1.80GHz
// Intel Core i5-5575R @ 2.80GHz
// Intel Core i5-5675C @ 3.10GHz
// Intel Core i5-5675R @ 3.10GHz
// Intel Core i5-6198DU @ 2.30GHz
// Intel Core i5-6200U @ 2.30GHz
// Intel Core i5-6260U @ 1.80GHz
// Intel Core i5-6267U @ 2.90GHz
// Intel Core i5-6287U @ 3.10GHz
// Intel Core i5-6300HQ @ 2.30GHz
// Intel Core i5-6300U @ 2.40GHz
// Intel Core i5-6360U @ 2.00GHz
// Intel Core i5-6400 @ 2.70GHz
// Intel Core i5-6400T @ 2.20GHz
// Intel Core i5-6402P @ 2.80GHz
// Intel Core i5-6440EQ @ 2.70GHz
// Intel Core i5-6440HQ @ 2.60GHz
// Intel Core i5-6442EQ @ 1.90GHz
// Intel Core i5-6500 @ 3.20GHz
// Intel Core i5-6500T @ 2.50GHz
// Intel Core i5-6500TE @ 2.30GHz
// Intel Core i5-6600 @ 3.30GHz
// Intel Core i5-6600K @ 3.50GHz
// Intel Core i5-6600T @ 2.70GHz
// Intel Core i5-7200U @ 2.50GHz
// Intel Core i5-7260U @ 2.20GHz
// Intel Core i5-7267U @ 3.10GHz
// Intel Core i5-7287U @ 3.30GHz
// Intel Core i5-7300HQ @ 2.50GHz
// Intel Core i5-7300U @ 2.60GHz
// Intel Core i5-7360U @ 2.30GHz
// Intel Core i5-7400 @ 3.00GHz
// Intel Core i5-7400T @ 2.40GHz
// AMD Ryzen 9 5900X
// AMD Ryzen 9 5950X
// Intel Core i5-7440EQ @ 2.90GHz
// Intel Core i5-7440HQ @ 2.80GHz
// Intel Core i5-7442EQ @ 2.10GHz
// Intel Core i5-7500 @ 3.40GHz
// Intel Core i5-7500T @ 2.70GHz
// Intel Core i5-7600 @ 3.50GHz
// Intel Core i5-7600K @ 3.80GHz
// Intel Core i5-7600T @ 2.80GHz
// Intel Core i5-7640X @ 4.00GHz
// Intel Core i5-8200Y @ 1.30GHz
// Intel Core i5-8210Y @ 1.60GHz
// Intel Core i5-8250U @ 1.60GHz
// Intel Core i5-8257U @ 1.40GHz
// Intel Core i5-8259U @ 2.30GHz
// Intel Core i5-8260U @ 1.60GHz
// Intel Core i5-8265U @ 1.60GHz
// Intel Core i5-8265UC @ 1.60GHz
// Intel Core i5-8269U @ 2.60GHz
// Intel Core i5-8279U @ 2.40GHz
// Intel Core i5-8300H @ 2.30GHz
// Intel Core i5-8305G @ 2.80GHz
// Intel Core i5-8350U @ 1.70GHz
// Intel Core i5-8365U @ 1.60GHz
// Intel Core i5-8365UE @ 1.60GHz
// Intel Core i5-8400 @ 2.80GHz
// Intel Core i5-8400H @ 2.50GHz
// Intel Core i5-8400T @ 1.70GHz
// Intel Core i5-8500 @ 3.00GHz
// Intel Core i5-8500B @ 3.00GHz
// Intel Core i5-8500T @ 2.10GHz
// Intel Core i5-8600 @ 3.10GHz
// Intel Core i5-8600K @ 3.60GHz
// Intel Core i5-8600T @ 2.30GHz
// Intel Core i5-9300H @ 2.40GHz
// Intel Core i5-9300HF @ 2.40GHz
// Intel Core i5-9400 @ 2.90GHz
// Intel Core i5-9400F @ 2.90GHz
// Intel Core i5-9400H @ 2.50GHz
// Intel Core i5-9400T @ 1.80GHz
// Intel Core i5-9500 @ 3.00GHz
// Intel Core i5-9500F @ 3.00GHz
// Intel Core i5-9500T @ 2.20GHz
// Intel Core i5-9500TE @ 2.20GHz
// Intel Core i5-9600 @ 3.10GHz
// Intel Core i5-9600K @ 3.70GHz
// Intel Core i5-9600KF @ 3.70GHz
// Intel Core i5-9600T @ 2.30GHz
// Intel Core i5-10200H @ 2.40GHz
// Intel Core i5-10210U @ 1.60GHz
// Intel Core i5-10210Y @ 1.00GHz
// Intel Core i5-10300H @ 2.50GHz
// Intel Core i5-10310U @ 1.70GHz
// Intel Core i5-10400 @ 2.90GHz
// Intel Core i5-10400F @ 2.90GHz
// Intel Core i5-10400H @ 2.60GHz
// Intel Core i5-10400T @ 2.00GHz
// Intel Core i5-10500 @ 3.10GHz
// Intel Core i5-10500H @ 2.50GHz
// Intel Core i5-10500T @ 2.30GHz
// Intel Core i5-10505 @ 3.20GHz
// Intel Core i5-10600 @ 3.30GHz
// Intel Core i5-10600K @ 4.10GHz
// Intel Core i5-10600KF @ 4.10GHz
// Intel Core i5-10600T @ 2.40GHz
// Intel Core i5-11260H @ 2.60GHz
// Intel Core i5-11300H @ 3.10GHz
// Intel Core i5-11400 @ 2.60GHz
// Intel Core i5-11400F @ 2.60GHz
// Intel Core i5-11400H @ 2.70GHz
// Intel Core i5-11400T @ 1.30GHz
// Intel Core i5-11500 @ 2.70GHz
// Intel Core i5-11500H @ 2.90GHz
// Intel Core i5-11600 @ 2.80GHz
// Intel Core i5-11600K @ 3.90GHz
// Intel Core i5-11600KF @ 3.90GHz
// Intel Core i5-24050S @ 2.50GHz
// Intel Core i5-L16G7 @ 1.40GHz
// Intel Core i7-7Y75 @ 1.30GHz
// Intel Core i7-610E @ 2.53GHz
// Intel Core i7-620LM @ 2.00GHz
// Intel Core i7-620M @ 2.67GHz
// Intel Core i7-620UM @ 1.07GHz
// Intel Core i7-640LM @ 2.13GHz
// Intel Core i7-640M @ 2.80GHz
// Intel Core i7-640UM @ 1.20GHz
// Intel Core i7-660UM @ 1.33GHz
// Intel Core i7-680UM @ 1.47GHz
// Intel Core i7-720QM @ 1.60GHz
// Intel Core i7-740QM @ 1.73GHz
// Intel Core i7-820QM @ 1.73GHz
// Intel Core i7-840QM @ 1.87GHz
// Intel Core i7-860 @ 2.80GHz
// Intel Core i7-860S @ 2.53GHz
// Intel Core i7-870 @ 2.93GHz
// Intel Core i7-870S @ 2.67GHz
// Intel Core i7-875K @ 2.93GHz
// Intel Core i7-880 @ 3.07GHz
// Intel Core i7-920 @ 2.67GHz
// Intel Core i7-920XM @ 2.00GHz
// Intel Core i7-930 @ 2.80GHz
// Intel Core i7-940 @ 2.93GHz
// Intel Core i7-940XM @ 2.13GHz
// Intel Core i7-950 @ 3.07GHz
// Intel Core i7-960 @ 3.20GHz
// Intel Core i7-965 @ 3.20GHz
// Intel Core i7-970 @ 3.20GHz
// Intel Core i7-975 @ 3.33GHz
// Intel Core i7-980 @ 3.33GHz
// Intel Core i7-980X @ 3.33GHz
// Intel Core i7-985 @ 3.47GHz
// Intel Core i7-990X @ 3.47GHz
// Intel Core i7-995X @ 3.60GHz
// Intel Core i7-1060NG7 @ 1.20GHz
// Intel Core i7-1065G7 @ 1.30GHz
// Intel Core i7-1068NG7 @ 2.30GHz
// Intel Core i7-1160G7 @ 1.20GHz
// Intel Core i7-1165G7 @ 2.80GHz
// Intel Core i7-1185G7 @ 3.00GHz
// Intel Core i7-1185G7E @ 2.80GHz
// Intel Core i7-1185GRE @ 2.80GHz
// Intel Core i7-2600 @ 3.40GHz
// Intel Core i7-2600K @ 3.40GHz
// Intel Core i7-2600S @ 2.80GHz
// Intel Core i7-2610UE @ 1.50GHz
// Intel Core i7-2617M @ 1.50GHz
// Intel Core i7-2620M @ 2.70GHz
// Intel Core i7-2630QM @ 2.00GHz
// Intel Core i7-2630UM @ 1.60GHz
// Intel Core i7-2635QM @ 2.00GHz
// Intel Core i7-2637M @ 1.70GHz
// Intel Core i7-2640M @ 2.80GHz
// Intel Core i7-2655LE @ 2.20GHz
// Intel Core i7-2670QM @ 2.20GHz
// Intel Core i7-2675QM @ 2.20GHz
// Intel Core i7-2677M @ 1.80GHz
// Intel Core i7-2700K @ 3.50GHz
// Intel Core i7-2710QE @ 2.10GHz
// Intel Core i7-2715QE @ 2.10GHz
// Intel Core i7-2720QM @ 2.20GHz
// Intel Core i7-2760QM @ 2.40GHz
// Intel Core i7-2820QM @ 2.30GHz
// Intel Core i7-2840QM @ 2.40GHz
// Intel Core i7-2860QM @ 2.50GHz
// Intel Core i7-2920XM @ 2.50GHz
// Intel Core i7-2960XM @ 2.70GHz
// Intel Core i7-3517U @ 1.90GHz
// Intel Core i7-3517UE @ 1.70GHz
// Intel Core i7-3520M @ 2.90GHz
// Intel Core i7-3537U @ 2.00GHz
// Intel Core i7-3540M @ 3.00GHz
// Intel Core i7-3555LE @ 2.50GHz
// Intel Core i7-3610QE @ 2.30GHz
// Intel Core i7-3610QM @ 2.30GHz
// Intel Core i7-3612QE @ 2.10GHz
// Intel Core i7-3612QM @ 2.10GHz
// Intel Core i7-3615QE @ 2.30GHz
// Intel Core i7-3615QM @ 2.30GHz
// Intel Core i7-3630QM @ 2.40GHz
// Intel Core i7-3632QM @ 2.20GHz
// Intel Core i7-3635QM @ 2.40GHz
// Intel Core i7-3667U @ 2.00GHz
// Intel Core i7-3687U @ 2.10GHz
// Intel Core i7-3689Y @ 1.50GHz
// Intel Core i7-3720QM @ 2.60GHz
// Intel Core i7-3740QM @ 2.70GHz
// Intel Core i7-3770 @ 3.40GHz
// Intel Core i7-3770K @ 3.50GHz
// Intel Core i7-3770S @ 3.10GHz
// Intel Core i7-3770T @ 2.50GHz
// Intel Core i7-3820 @ 3.60GHz
// Intel Core i7-3820QM @ 2.70GHz
// Intel Core i7-3840QM @ 2.80GHz
// Intel Core i7-3920XM @ 2.90GHz
// Intel Core i7-3930K @ 3.20GHz
// Intel Core i7-3940XM @ 3.00GHz
// Intel Core i7-3960X @ 3.30GHz
// Intel Core i7-3970X @ 3.50GHz
// Intel Core i7-4500U @ 1.80GHz
// Intel Core i7-4510U @ 2.00GHz
// Intel Core i7-4550U @ 1.50GHz
// Intel Core i7-4558U @ 2.80GHz
// Intel Core i7-4560U @ 1.60GHz
// Intel Core i7-4578U @ 3.00GHz
// Intel Core i7-4600M @ 2.90GHz
// Intel Core i7-4600U @ 2.10GHz
// Intel Core i7-4610M @ 3.00GHz
// Intel Core i7-4610Y @ 1.70GHz
// Intel Core i7-4650U @ 1.70GHz
// Intel Core i7-4700EQ @ 2.40GHz
// Intel Core i7-4700HQ @ 2.40GHz
// Intel Core i7-4700MQ @ 2.40GHz
// Intel Core i7-4702HQ @ 2.20GHz
// Intel Core i7-4702MQ @ 2.20GHz
// Intel Core i7-4710HQ @ 2.50GHz
// Intel Core i7-4710MQ @ 2.50GHz
// Intel Core i7-4712HQ @ 2.30GHz
// Intel Core i7-4712MQ @ 2.30GHz
// Intel Core i7-4720HQ @ 2.60GHz
// Intel Core i7-4722HQ @ 2.40GHz
// Intel Core i7-4750HQ @ 2.00GHz
// Intel Core i7-4760HQ @ 2.10GHz
// Intel Core i7-4765T @ 2.00GHz
// Intel Core i7-4770 @ 3.40GHz
// Intel Core i7-4770HQ @ 2.20GHz
// Intel Core i7-4770K @ 3.50GHz
// Intel Core i7-4770R @ 3.20GHz
// Intel Core i7-4770S @ 3.10GHz
// Intel Core i7-4770T @ 2.50GHz
// Intel Core i7-4770TE @ 2.30GHz
// Intel Core i7-4771 @ 3.50GHz
// Intel Core i7-4785T @ 2.20GHz
// Intel Core i7-4790 @ 3.60GHz
// Intel Core i7-4790K @ 4.00GHz
// Intel Core i7-4790S @ 3.20GHz
// Intel Core i7-4790T @ 2.70GHz
// Intel Core i7-4800MQ @ 2.70GHz
// Intel Core i7-4810MQ @ 2.80GHz
// Intel Core i7-4820K @ 3.70GHz
// Intel Core i7-4850HQ @ 2.30GHz
// Intel Core i7-4860EQ @ 1.80GHz
// Intel Core i7-4860HQ @ 2.40GHz
// Intel Core i7-4870HQ @ 2.50GHz
// Intel Core i7-4900MQ @ 2.80GHz
// Intel Core i7-4910MQ @ 2.90GHz
// Intel Core i7-4930K @ 3.40GHz
// Intel Core i7-4930MX @ 3.00GHz
// Intel Core i7-4940MX @ 3.10GHz
// Intel Core i7-4960HQ @ 2.60GHz
// Intel Core i7-4960X @ 3.60GHz
// Intel Core i7-4980HQ @ 2.80GHz
// Intel Core i7-5500U @ 2.40GHz
// Intel Core i7-5550U @ 2.00GHz
// Intel Core i7-5557U @ 3.10GHz
// Intel Core i7-5600U @ 2.60GHz
// Intel Core i7-5650U @ 2.20GHz
// Intel Core i7-5675C @ 3.10GHz
// Intel Core i7-5700EQ @ 2.60GHz
// Intel Core i7-5700HQ @ 2.70GHz
// Intel Core i7-5775C @ 3.30GHz
// Intel Core i7-5775R @ 3.30GHz
// Intel Core i7-5820K @ 3.30GHz
// Intel Core i7-5850EQ @ 2.70GHz
// Intel Core i7-5850HQ @ 2.70GHz
// Intel Core i7-5930K @ 3.50GHz
// Intel Core i7-5950HQ @ 2.90GHz
// Intel Core i7-5960X @ 3.00GHz
// Intel Core i7-6498DU @ 2.50GHz
// Intel Core i7-6500U @ 2.50GHz
// Intel Core i7-6560U @ 2.20GHz
// Intel Core i7-6567U @ 3.30GHz
// Intel Core i7-6600U @ 2.60GHz
// Intel Core i7-6650U @ 2.20GHz
// Intel Core i7-6660U @ 2.40GHz
// Intel Core i7-6700 @ 3.40GHz
// Intel Core i7-6700HQ @ 2.60GHz
// Intel Core i7-6700K @ 4.00GHz
// Intel Core i7-6700T @ 2.80GHz
// Intel Core i7-6700TE @ 2.40GHz
// Intel Core i7-6770HQ @ 2.60GHz
// Intel Core i7-6800K @ 3.40GHz
// Intel Core i7-6820EQ @ 2.80GHz
// Intel Core i7-6820HK @ 2.70GHz
// Intel Core i7-6820HQ @ 2.70GHz
// Intel Core i7-6822EQ @ 2.00GHz
// Intel Core i7-6850K @ 3.60GHz
// Intel Core i7-6900K @ 3.20GHz
// Intel Core i7-6920HQ @ 2.90GHz
// Intel Core i7-6950X @ 3.00GHz
// Intel Core i7-7500U @ 2.70GHz
// Intel Core i7-7560U @ 2.40GHz
// Intel Core i7-7567U @ 3.50GHz
// Intel Core i7-7600U @ 2.80GHz
// Intel Core i7-7660U @ 2.50GHz
// Intel Core i7-7700 @ 3.60GHz
// Intel Core i7-7700HQ @ 2.80GHz
// Intel Core i7-7700K @ 4.20GHz
// Intel Core i7-7700T @ 2.90GHz
// Intel Core i7-7740X @ 4.30GHz
// Intel Core i7-7800X @ 3.50GHz
// Intel Core i7-7820EQ @ 3.00GHz
// Intel Core i7-7820HK @ 2.90GHz
// Intel Core i7-7820HQ @ 2.90GHz
// Intel Core i7-7820X @ 3.60GHz
// Intel Core i7-7900X @ 3.30GHz
// Intel Core i7-7920HQ @ 3.10GHz
// Intel Core i7-8086K @ 4.00GHz
// Intel Core i7-8500Y @ 1.50GHz
// Intel Core i7-8550U @ 1.80GHz
// Intel Core i7-8557U @ 1.70GHz
// Intel Core i7-8559U @ 2.70GHz
// Intel Core i7-8565U @ 1.80GHz
// Intel Core i7-8565UC @ 1.80GHz
// Intel Core i7-8569U @ 2.80GHz
// Intel Core i7-8650U @ 1.90GHz
// Intel Core i7-8665U @ 1.90GHz
// Intel Core i7-8665UE @ 1.70GHz
// Intel Core i7-8700 @ 3.20GHz
// Intel Core i7-8700B @ 3.20GHz
// Intel Core i7-8700K @ 3.70GHz
// Intel Core i7-8700T @ 2.40GHz
// Intel Core i7-8705G @ 3.10GHz
// Intel Core i7-8706G @ 3.10GHz
// Intel Core i7-8709G @ 3.10GHz
// Intel Core i7-8750H @ 2.20GHz
// Intel Core i7-8809G @ 3.10GHz
// Intel Core i7-8850H @ 2.60GHz
// Intel Core i7-9700 @ 3.00GHz
// Intel Core i7-9700E @ 2.60GHz
// Intel Core i7-9700F @ 3.00GHz
// Intel Core i7-9700K @ 3.60GHz
// Intel Core i7-9700KF @ 3.60GHz
// Intel Core i7-9700T @ 2.00GHz
// Intel Core i7-9700TE @ 1.80GHz
// Intel Core i7-9750H @ 2.60GHz
// Intel Core i7-9750HF @ 2.60GHz
// Intel Core i7-9800X @ 3.80GHz
// Intel Core i7-9850H @ 2.60GHz
// Intel Core i7-9850HL @ 1.90GHz
// Intel Core i7-10510U @ 1.80GHz
// Intel Core i7-10510Y @ 1.20GHz
// Intel Core i7-10610U @ 1.80GHz
// Intel Core i7-10700 @ 2.90GHz
// Intel Core i7-10700F @ 2.90GHz
// Intel Core i7-10700K @ 3.80GHz
// Intel Core i7-10700KF @ 3.80GHz
// Intel Core i7-10700T @ 2.00GHz
// Intel Core i7-10700TE @ 2.00GHz
// Intel Core i7-10710U @ 1.10GHz
// Intel Core i7-10750H @ 2.60GHz
// Intel Core i7-10810U @ 1.10GHz
// Intel Core i7-10850H @ 2.70GHz
// Intel Core i7-10870H @ 2.20GHz
// Intel Core i7-10875H @ 2.30GHz
// Intel Core i7-11370H @ 3.30GHz
// Intel Core i7-11375H @ 3.30GHz
// Intel Core i7-11700 @ 2.50GHz
// Intel Core i7-11700F @ 2.50GHz
// Intel Core i7-11700K @ 3.60GHz
// Intel Core i7-11700KF @ 3.60GHz
// Intel Core i7-11800H @ 2.30GHz
// Intel Core i7-11850H @ 2.50GHz
// Intel Core i9-7900X @ 3.30GHz
// Intel Core i9-7920X @ 2.90GHz
// Intel Core i9-7940X @ 3.10GHz
// Intel Core i9-7960X @ 2.80GHz
// Intel Core i9-7980XE @ 2.60GHz
// Intel Core i9-8950HK @ 2.90GHz
// Intel Core i9-9820X @ 3.30GHz
// Intel Core i9-9880H @ 2.30GHz
// Intel Core i9-9900 @ 3.10GHz
// Intel Core i9-9900K @ 3.60GHz
// Intel Core i9-9900KF @ 3.60GHz
// Intel Core i9-9900KS @ 4.00GHz
// Intel Core i9-9900T @ 2.10GHz
// Intel Core i9-9900X @ 3.50GHz
// Intel Core i9-9920X @ 3.50GHz
// Intel Core i9-9940X @ 3.30GHz
// Intel Core i9-9960X @ 3.10GHz
// Intel Core i9-9980HK @ 2.40GHz
// Intel Core i9-9980XE @ 3.00GHz
// Intel Core i9-9990XE @ 4.00GHz
// Intel Core i9-10850K @ 3.60GHz
// Intel Core i9-10880H @ 2.30GHz
// Intel Core i9-10885H @ 2.40GHz
// Intel Core i9-10900 @ 2.80GHz
// Intel Core i9-10900F @ 2.80GHz
// Intel Core i9-10900K @ 3.70GHz
// Intel Core i9-10900KF @ 3.70GHz
// Intel Core i9-10900T @ 1.90GHz
// Intel Core i9-10900TE @ 1.80GHz
// Intel Core i9-10900X @ 3.70GHz
// Intel Core i9-10910 @ 3.60GHz
// Intel Core i9-10920X @ 3.50GHz
// Intel Core i9-10940X @ 3.30GHz
// Intel Core i9-10980HK @ 2.40GHz
// Intel Core i9-10980XE @ 3.00GHz
// Intel Core i9-11900 @ 2.50GHz
// Intel Core i9-11900F @ 2.50GHz
// Intel Core i9-11900H @ 2.50GHz
// Intel Core i9-11900K @ 3.50GHz
// Intel Core i9-11900KB @ 3.30GHz
// Intel Core i9-11900KF @ 3.50GHz
// Intel Core i9-11900T @ 1.50GHz
// Intel Core i9-11950H @ 2.60GHz
// Intel Core i9-11980HK @ 2.60GHz
// Intel Core m3-6Y30 @ 0.90GHz
// Intel Core m3-7Y30 @ 1.00GHz
// Intel Core m3-7Y32 @ 1.10GHz
// Intel Core m3-8100Y @ 1.10GHz
// Intel Core m5-6Y54 @ 1.10GHz
// Intel Core m5-6Y57 @ 1.10GHz
// Intel Core m7-6Y75 @ 1.20GHz
// Intel Core M-5Y10 @ 0.80GHz
// Intel Core M-5Y10a @ 0.80GHz
// Intel Core M-5Y10c @ 0.80GHz
// Intel Core M-5Y31 @ 0.90GHz
// Intel Core M-5Y51 @ 1.10GHz
// Intel Core M-5Y70 @ 1.10GHz
// Intel Core M-5Y71 @ 1.20GHz
// Intel Core Solo T1300 @ 1.66GHz
// Intel Core Solo T1350 @ 1.86GHz
// Intel Core Solo T1400 @ 1.83GHz
// Intel Core Solo U1300 @ 1.06GHz
// Intel Core Solo U1400 @ 1.20GHz
// Intel Core Solo U1500 @ 1.33GHz
// Intel Pentium 4 1.50GHz
// Intel Pentium 4 1.60GHz
// Intel Pentium 4 1.70GHz
// Intel Pentium 4 1.80GHz
// Intel Pentium 4 1.90GHz
// Intel Pentium 4 2.00GHz
// Intel Pentium 4 2.20GHz
// Intel Pentium 4 2.26GHz
// Intel Pentium 4 2.40GHz
// Intel Pentium 4 2.50GHz
// Intel Pentium 4 2.53GHz
// Intel Pentium 4 2.60GHz
// Intel Pentium 4 2.66GHz
// Intel Pentium 4 2.80GHz
// Intel Pentium 4 2.93GHz
// Intel Pentium 4 3.00GHz
// Intel Pentium 4 3.06GHz
// Intel Pentium 4 3.20GHz
// Intel Pentium 4 3.40GHz
// Intel Pentium 4 3.46GHz
// Intel Pentium 4 3.60GHz
// Intel Pentium 4 3.73GHz
// Intel Pentium 4 3.80GHz
// Intel Pentium 4 3.83GHz
// Intel Pentium 4 1300MHz
// Intel Pentium 4 1400MHz
// Intel Pentium 4 1500MHz
// Intel Pentium 4 1700MHz
// Intel Pentium 4 1800MHz
// Intel Pentium 4 Mobile 1.60GHz
// Intel Pentium 4 Mobile 1.80GHz
// Intel Pentium 4 Mobile 1.90GHz
// Intel Pentium 4 Mobile 2.00GHz
// Intel Pentium 957 @ 1.20GHz
// Intel Pentium 967 @ 1.30GHz
// Intel Pentium 987 @ 1.50GHz
// Intel Pentium 997 @ 1.60GHz
// Intel Pentium 1403 @ 2.60GHz
// Intel Pentium 1403 v2 @ 2.60GHz
// Intel Pentium 2020M @ 2.40GHz
// Intel Pentium 2030M @ 2.50GHz
// Intel Pentium 2117U @ 1.80GHz
// Intel Pentium 2127U @ 1.90GHz
// Intel Pentium 2129Y @ 1.10GHz
// Intel Pentium 3550M @ 2.30GHz
// Intel Pentium 3556U @ 1.70GHz
// Intel Pentium 3558U @ 1.70GHz
// Intel Pentium 3560M @ 2.40GHz
// Intel Pentium 3560Y @ 1.20GHz
// Intel Pentium 3805U @ 1.90GHz
// Intel Pentium 3825U @ 1.90GHz
// Intel Pentium 4405U @ 2.10GHz
// Intel Pentium 4405Y @ 1.50GHz
// Intel Pentium 4410Y @ 1.50GHz
// Intel Pentium 4415U @ 2.30GHz
// Intel Pentium 4415Y @ 1.60GHz
// Intel Pentium 4417U @ 2.30GHz
// Intel Pentium 4425Y @ 1.70GHz
// Intel Pentium 5405U @ 2.30GHz
// Intel Pentium 6405U @ 2.40GHz
// Intel Pentium 6805 @ 1.10GHz
// Intel Pentium A1018 @ 2.10GHz
// Intel Pentium A1020 @ 2.41GHz
// Intel Pentium B940 @ 2.00GHz
// Intel Pentium B950 @ 2.10GHz
// Intel Pentium B960 @ 2.20GHz
// Intel Pentium B970 @ 2.30GHz
// Intel Pentium B980 @ 2.40GHz
// Intel Pentium D1508 @ 2.20GHz
// Intel Pentium D 805 @ 2.66GHz
// Intel Pentium D 830 @ 3.00GHz
// Intel Pentium D 915 @ 2.80GHz
// Intel Pentium D 940 @ 3.20GHz
// Intel Pentium D 950 @ 3.40GHz
// Intel Pentium D 960 @ 3.60GHz
// Intel Pentium E2140 @ 1.60GHz
// Intel Pentium E2160 @ 1.80GHz
// Intel Pentium E2180 @ 2.00GHz
// Intel Pentium E2200 @ 2.20GHz
// Intel Pentium E2210 @ 2.20GHz
// Intel Pentium E2220 @ 2.40GHz
// Intel Pentium E5200 @ 2.50GHz
// Intel Pentium E5300 @ 2.60GHz
// Intel Pentium E5400 @ 2.70GHz
// Intel Pentium E5500 @ 2.80GHz
// Intel Pentium E5700 @ 3.00GHz
// Intel Pentium E5800 @ 3.20GHz
// Intel Pentium E6300 @ 2.80GHz
// Intel Pentium E6500 @ 2.93GHz
// Intel Pentium E6600 @ 3.06GHz
// Intel Pentium E6700 @ 3.20GHz
// Intel Pentium E6800 @ 3.33GHz
// Intel Pentium Extreme Edition 955 @ 3.46GHz
// Intel Pentium Extreme Edition 965 @ 3.73GHz
// Intel Pentium G620 @ 2.60GHz
// Intel Pentium G620T @ 2.20GHz
// Intel Pentium G630 @ 2.70GHz
// Intel Pentium G630T @ 2.30GHz
// Intel Pentium G640 @ 2.80GHz
// Intel Pentium G640T @ 2.40GHz
// Intel Pentium G645 @ 2.90GHz
// Intel Pentium G645T @ 2.50GHz
// Intel Pentium G840 @ 2.80GHz
// Intel Pentium G850 @ 2.90GHz
// Intel Pentium G860 @ 3.00GHz
// Intel Pentium G870 @ 3.10GHz
// Intel Pentium G2010 @ 2.80GHz
// Intel Pentium G2020 @ 2.90GHz
// Intel Pentium G2020T @ 2.50GHz
// Intel Pentium G2030 @ 3.00GHz
// Intel Pentium G2030T @ 2.60GHz
// Intel Pentium G2100T @ 2.60GHz
// Intel Pentium G2120 @ 3.10GHz
// Intel Pentium G2120T @ 2.70GHz
// Intel Pentium G2130 @ 3.20GHz
// Intel Pentium G2140 @ 3.30GHz
// Intel Pentium G3220 @ 3.00GHz
// Intel Pentium G3220T @ 2.60GHz
// Intel Pentium G3240 @ 3.10GHz
// Intel Pentium G3240T @ 2.70GHz
// Intel Pentium G3250 @ 3.20GHz
// Intel Pentium G3250T @ 2.80GHz
// Intel Pentium G3258 @ 3.20GHz
// Intel Pentium G3260 @ 3.30GHz
// Intel Pentium G3260T @ 2.90GHz
// Intel Pentium G3320TE @ 2.30GHz
// Intel Pentium G3420 @ 3.20GHz
// Intel Pentium G3420T @ 2.70GHz
// Intel Pentium G3430 @ 3.30GHz
// Intel Pentium G3440 @ 3.30GHz
// Intel Pentium G3440T @ 2.80GHz
// Intel Pentium G3450 @ 3.40GHz
// Intel Pentium G3450T @ 2.90GHz
// Intel Pentium G3460 @ 3.50GHz
// Intel Pentium G3470 @ 3.60GHz
// Intel Pentium G4400 @ 3.30GHz
// Intel Pentium G4400T @ 2.90GHz
// Intel Pentium G4400TE @ 2.40GHz
// Intel Pentium G4500 @ 3.50GHz
// Intel Pentium G4500T @ 3.00GHz
// Intel Pentium G4520 @ 3.60GHz
// Intel Pentium G4560 @ 3.50GHz
// Intel Pentium G4560T @ 2.90GHz
// Intel Pentium G4600 @ 3.60GHz
// Intel Pentium G4600T @ 3.00GHz
// Intel Pentium G4620 @ 3.70GHz
// Intel Pentium G6950 @ 2.80GHz
// Intel Pentium G6951 @ 2.80GHz
// Intel Pentium G6960 @ 2.93GHz
// Intel Pentium Gold 7505 @ 2.00GHz
// Intel Pentium Gold G5400 @ 3.70GHz
// Intel Pentium Gold G5400T @ 3.10GHz
// Intel Pentium Gold G5420 @ 3.80GHz
// Intel Pentium Gold G5420T @ 3.20GHz
// Intel Pentium Gold G5500 @ 3.80GHz
// Intel Pentium Gold G5500T @ 3.20GHz
// Intel Pentium Gold G5600 @ 3.90GHz
// Intel Pentium Gold G5600F @ 3.90GHz
// Intel Pentium Gold G5620 @ 4.00GHz
// Intel Pentium Gold G6400 @ 4.00GHz
// Intel Pentium Gold G6400T @ 3.40GHz
// Intel Pentium Gold G6405 @ 4.10GHz
// Intel Pentium Gold G6405T @ 3.50GHz
// Intel Pentium Gold G6500 @ 4.10GHz
// Intel Pentium Gold G6500T @ 3.50GHz
// Intel Pentium Gold G6505 @ 4.20GHz
// Intel Pentium Gold G6600 @ 4.20GHz
// Intel Pentium Gold G6605 @ 4.30GHz
// Intel Pentium III 1400 @ 1400MHz
// Intel Pentium III 1400S @ 1400MHz
// Intel Pentium III Mobile 800MHz

// Intel Pentium III Mobile 866MHz
// Intel Pentium III Mobile 1066MHz
// Intel Pentium III Mobile 1133MHz
// Intel Pentium III Mobile 1200MHz
// Intel Pentium J2850 @ 2.41GHz
// Intel Pentium J2900 @ 2.41GHz
// Intel Pentium J3710 @ 1.60GHz
// Intel Pentium J4205 @ 1.50GHz
// Intel Pentium M 1.10GHz
// Intel Pentium M 1.20GHz
// Intel Pentium M 1.30GHz
// Intel Pentium M 1.40GHz
// Intel Pentium M 1.50GHz
// Intel Pentium M 1.60GHz
// Intel Pentium M 1.70GHz
// Intel Pentium M 1.73GHz
// Intel Pentium M 1.80GHz
// Intel Pentium M 1.86GHz
// Intel Pentium M 2.00GHz
// Intel Pentium M 2.10GHz
// Intel Pentium M 2.13GHz
// Intel Pentium M 2.26GHz
// Intel Pentium M 900MHz
// Intel Pentium M 1000MHz
// Intel Pentium M 1200MHz
// Intel Pentium M 1300MHz
// Intel Pentium M 1400MHz
// Intel Pentium M 1500MHz
// Intel Pentium M 1600MHz
// Intel Pentium M 1700MHz
// Intel Pentium N3510 @ 1.99GHz
// Intel Pentium N3520 @ 2.16GHz
// Intel Pentium N3530 @ 2.16GHz
// Intel Pentium N3540 @ 2.16GHz
// Intel Pentium N3700 @ 1.60GHz
// Intel Pentium N3710 @ 1.60GHz
// Intel Pentium N4200 @ 1.10GHz
// Intel Pentium N6415 @ 1.20GHz
// Intel Pentium P6000 @ 1.87GHz
// Intel Pentium P6100 @ 2.00GHz
// Intel Pentium P6200 @ 2.13GHz
// Intel Pentium P6300 @ 2.27GHz
// Intel Pentium Silver J5005 @ 1.50GHz
// Intel Pentium Silver J5040 @ 2.00GHz
// Intel Pentium Silver N5000 @ 1.10GHz
// Intel Pentium Silver N5030 @ 1.10GHz
// Intel Pentium Silver N6000 @ 1.10GHz
// Intel Pentium SU2700 @ 1.30GHz
// Intel Pentium SU4100 @ 1.30GHz
// Intel Pentium T2060 @ 1.60GHz
// Intel Pentium T2080 @ 1.73GHz
// Intel Pentium T2130 @ 1.86GHz
// Intel Pentium T2310 @ 1.46GHz
// Intel Pentium T2330 @ 1.60GHz
// Intel Pentium T2370 @ 1.73GHz
// Intel Pentium T2390 @ 1.86GHz
// Intel Pentium T2410 @ 2.00GHz
// Intel Pentium T3200 @ 2.00GHz
// Intel Pentium T3400 @ 2.16GHz
// Intel Pentium T4200 @ 2.00GHz
// Intel Pentium T4300 @ 2.10GHz
// Intel Pentium T4400 @ 2.20GHz
// Intel Pentium T4500 @ 2.30GHz
// Intel Pentium U5400 @ 1.20GHz
// Intel Pentium U5600 @ 1.33GHz
// Intel T1400 @ 1.73GHz
// Intel T1500 @ 1.86GHz
// Intel T2050 @ 2.00GHz
// Intel Xeon 2.00GHz
// Intel XEON 2.20GHz
// Intel Xeon 2.40GHz
// Intel Xeon 2.80GHz
// Intel Xeon 3.00GHz
// Intel Xeon 3.20GHz
// Intel Xeon 3.40GHz
// Intel Xeon 3.60GHz
// Intel Xeon 3.73GHz
// Intel Xeon 3.80GHz
// Intel Xeon 3040 @ 1.86GHz
// Intel Xeon 3050 @ 2.13GHz
// Intel Xeon 3060 @ 2.40GHz
// Intel Xeon 3065 @ 2.33GHz
// Intel Xeon 3070 @ 2.66GHz
// Intel Xeon 3075 @ 2.66GHz
// Intel Xeon 3085 @ 3.00GHz
// Intel Xeon 5110 @ 1.60GHz
// Intel Xeon 5120 @ 1.86GHz
// Intel Xeon 5130 @ 2.00GHz
// Intel Xeon 5133 @ 2.20GHz
// Intel Xeon 5140 @ 2.33GHz
// Intel Xeon 5148 @ 2.33GHz
// Intel Xeon 5150 @ 2.66GHz
// Intel Xeon 5160 @ 3.00GHz
// Intel Xeon @ 2.00GHz
// Intel Xeon @ 2.20GHz
// Intel Xeon Bronze 3104 @ 1.70GHz
// Intel Xeon Bronze 3106 @ 1.70GHz
// Intel Xeon Bronze 3204 @ 1.90GHz
// Intel Xeon D-1518 @ 2.20GHz
// Intel Xeon D-1520 @ 2.20GHz
// Intel Xeon D-1521 @ 2.40GHz
// Intel Xeon D-1528 @ 1.90GHz
// Intel Xeon D-1531 @ 2.20GHz
// Intel Xeon D-1537 @ 1.70GHz
// Intel Xeon D-1539 @ 1.60GHz
// Intel Xeon D-1540 @ 2.00GHz
// Intel Xeon D-1541 @ 2.10GHz
// Intel Xeon D-1548 @ 2.00GHz
// Intel Xeon D-1557 @ 1.50GHz
// Intel Xeon D-1559 @ 1.50GHz
// Intel Xeon D-1567 @ 2.10GHz
// Intel Xeon D-1577 @ 1.30GHz
// Intel Xeon D-1587 @ 1.70GHz
// Intel Xeon D-1602 @ 2.50GHz
// Intel Xeon D-1622 @ 2.60GHz
// Intel Xeon D-2123IT @ 2.20GHz
// Intel Xeon D-2141I @ 2.20GHz
// Intel Xeon D-2143IT @ 2.20GHz
// Intel Xeon D-2146NT @ 2.30GHz
// Intel Xeon D-2166NT @ 2.00GHz
// Intel Xeon D-2183IT @ 2.20GHz
// Intel Xeon D-2187NT @ 2.00GHz
// Intel Xeon E3-1205 v6 @ 3.00GHz
// Intel Xeon E3-1220 @ 3.10GHz
// Intel Xeon E3-1220 V2 @ 3.10GHz
// Intel Xeon E3-1220 v3 @ 3.10GHz
// Intel Xeon E3-1220 v5 @ 3.00GHz
// Intel Xeon E3-1220 v6 @ 3.00GHz
// Intel Xeon E3-1220L @ 2.20GHz
// Intel Xeon E3-1220L V2 @ 2.30GHz
// Intel Xeon E3-1220L v3 @ 1.10GHz
// Intel Xeon E3-1225 @ 3.10GHz
// Intel Xeon E3-1225 V2 @ 3.20GHz
// Intel Xeon E3-1225 v3 @ 3.20GHz
// Intel Xeon E3-1225 v5 @ 3.30GHz
// Intel Xeon E3-1225 v6 @ 3.30GHz
// Intel Xeon E3-1226 v3 @ 3.30GHz
// Intel Xeon E3-1230 @ 3.20GHz
// Intel Xeon E3-1230 V2 @ 3.30GHz
// Intel Xeon E3-1230 v3 @ 3.30GHz
// Intel Xeon E3-1230 v5 @ 3.40GHz
// Intel Xeon E3-1230 v6 @ 3.50GHz
// Intel Xeon E3-1230L v3 @ 1.80GHz
// Intel Xeon E3-1231 v3 @ 3.40GHz
// Intel Xeon E3-1235 @ 3.20GHz
// Intel Xeon E3-1235L v5 @ 2.00GHz
// Intel Xeon E3-1240 @ 3.30GHz
// Intel Xeon E3-1240 V2 @ 3.40GHz
// Intel Xeon E3-1240 v3 @ 3.40GHz
// Intel Xeon E3-1240 v5 @ 3.50GHz
// Intel Xeon E3-1240 v6 @ 3.70GHz
// Intel Xeon E3-1240L v3 @ 2.00GHz
// Intel Xeon E3-1240L v5 @ 2.10GHz
// Intel Xeon E3-1241 v3 @ 3.50GHz
// Intel Xeon E3-1245 @ 3.30GHz
// Intel Xeon E3-1245 V2 @ 3.40GHz
// Intel Xeon E3-1245 v3 @ 3.40GHz
// Intel Xeon E3-1245 v5 @ 3.50GHz
// Intel Xeon E3-1245 v6 @ 3.70GHz
// Intel Xeon E3-1246 v3 @ 3.50GHz
// Intel Xeon E3-1260L @ 2.40GHz
// Intel Xeon E3-1260L v5 @ 2.90GHz
// Intel Xeon E3-1265L @ 2.40GHz
// Intel Xeon E3-1265L V2 @ 2.50GHz
// Intel Xeon E3-1265L v3 @ 2.50GHz
// Intel Xeon E3-1265L v4 @ 2.30GHz
// Intel Xeon E3-1268L v3 @ 2.30GHz
// Intel Xeon E3-1268L v5 @ 2.40GHz
// Intel Xeon E3-1270 @ 3.40GHz
// Intel Xeon E3-1270 V2 @ 3.50GHz
// Intel Xeon E3-1270 v3 @ 3.50GHz
// Intel Xeon E3-1270 v5 @ 3.60GHz
// Intel Xeon E3-1270 v6 @ 3.80GHz
// Intel Xeon E3-1270L v4 @ 3.00GHz
// Intel Xeon E3-1271 v3 @ 3.60GHz
// Intel Xeon E3-1275 @ 3.40GHz
// Intel Xeon E3-1275 V2 @ 3.50GHz
// Intel Xeon E3-1275 v3 @ 3.50GHz
// Intel Xeon E3-1275 v5 @ 3.60GHz
// Intel Xeon E3-1275 v6 @ 3.80GHz
// Intel Xeon E3-1275L v3 @ 2.70GHz
// Intel Xeon E3-1276 v3 @ 3.60GHz
// Intel Xeon E3-1280 @ 3.50GHz
// Intel Xeon E3-1280 V2 @ 3.60GHz
// Intel Xeon E3-1280 v3 @ 3.60GHz
// Intel Xeon E3-1280 v5 @ 3.70GHz
// Intel Xeon E3-1280 v6 @ 3.90GHz
// Intel Xeon E3-1281 v3 @ 3.70GHz
// Intel Xeon E3-1285 v3 @ 3.60GHz
// Intel Xeon E3-1285 v4 @ 3.50GHz
// Intel Xeon E3-1285 v6 @ 4.10GHz
// Intel Xeon E3-1285L v3 @ 3.10GHz
// Intel Xeon E3-1285L v4 @ 3.40GHz
// Intel Xeon E3-1286 v3 @ 3.70GHz
// Intel Xeon E3-1286L v3 @ 3.20GHz
// Intel Xeon E3-1290 @ 3.60GHz
// Intel Xeon E3-1290 V2 @ 3.70GHz
// Intel Xeon E3-1505L v5 @ 2.00GHz
// Intel Xeon E3-1505L v6 @ 2.20GHz
// Intel Xeon E3-1505M v5 @ 2.80GHz
// Intel Xeon E3-1505M v6 @ 3.00GHz
// Intel Xeon E3-1515M v5 @ 2.80GHz
// Intel Xeon E3-1535M v5 @ 2.90GHz
// Intel Xeon E3-1535M v6 @ 3.10GHz
// Intel Xeon E3-1545M v5 @ 2.90GHz
// Intel Xeon E3-1575M v5 @ 3.00GHz
// Intel Xeon E3-1585 v5 @ 3.50GHz
// Intel Xeon E3-1585L v5 @ 3.00GHz
// Intel Xeon E5-1410 @ 2.80GHz
// Intel Xeon E5-1410 v2 @ 2.80GHz
// Intel Xeon E5-1428L v2 @ 2.20GHz
// Intel Xeon E5-1603 @ 2.80GHz
// Intel Xeon E5-1603 v3 @ 2.80GHz
// Intel Xeon E5-1603 v4 @ 2.80GHz
// Intel Xeon E5-1607 @ 3.00GHz
// Intel Xeon E5-1607 v2 @ 3.00GHz
// Intel Xeon E5-1607 v3 @ 3.10GHz
// Intel Xeon E5-1607 v4 @ 3.10GHz
// Intel Xeon E5-1620 @ 3.60GHz
// Intel Xeon E5-1620 v2 @ 3.70GHz
// Intel Xeon E5-1620 v3 @ 3.50GHz
// Intel Xeon E5-1620 v4 @ 3.50GHz
// Intel Xeon E5-1630 v3 @ 3.70GHz
// Intel Xeon E5-1630 v4 @ 3.70GHz
// Intel Xeon E5-1650 @ 3.20GHz
// Intel Xeon E5-1650 v2 @ 3.50GHz
// Intel Xeon E5-1650 v3 @ 3.50GHz
// Intel Xeon E5-1650 v4 @ 3.60GHz
// Intel Xeon E5-1660 @ 3.30GHz
// Intel Xeon E5-1660 v2 @ 3.70GHz
// Intel Xeon E5-1660 v3 @ 3.00GHz
// Intel Xeon E5-1660 v4 @ 3.20GHz
// Intel Xeon E5-1680 v2 @ 3.00GHz
// Intel Xeon E5-1680 v3 @ 3.20GHz
// Intel Xeon E5-1680 v4 @ 3.40GHz
// Intel Xeon E5-1681 v3 @ 2.90GHz
// Intel Xeon E5-2403 @ 1.80GHz
// Intel Xeon E5-2403 v2 @ 1.80GHz
// Intel Xeon E5-2407 @ 2.20GHz
// Intel Xeon E5-2407 v2 @ 2.40GHz
// Intel Xeon E5-2418L @ 2.00GHz
// Intel Xeon E5-2420 @ 1.90GHz
// Intel Xeon E5-2420 v2 @ 2.20GHz
// Intel Xeon E5-2430 @ 2.20GHz
// Intel Xeon E5-2430 v2 @ 2.50GHz
// Intel Xeon E5-2430L @ 2.00GHz
// Intel Xeon E5-2430L v2 @ 2.40GHz
// Intel Xeon E5-2440 @ 2.40GHz
// Intel Xeon E5-2440 v2 @ 1.90GHz
// Intel Xeon E5-2448L v2 @ 1.80GHz
// Intel Xeon E5-2450 @ 2.10GHz
// Intel Xeon E5-2450L @ 1.80GHz
// Intel Xeon E5-2470 @ 2.30GHz
// Intel Xeon E5-2470 v2 @ 2.40GHz
// Intel Xeon E5-2603 @ 1.80GHz
// Intel Xeon E5-2603 v2 @ 1.80GHz
// Intel Xeon E5-2603 v3 @ 1.60GHz
// Intel Xeon E5-2603 v4 @ 1.70GHz
// Intel Xeon E5-2608L v3 @ 2.00GHz
// Intel Xeon E5-2609 @ 2.40GHz
// Intel Xeon E5-2609 v2 @ 2.50GHz
// Intel Xeon E5-2609 v3 @ 1.90GHz
// Intel Xeon E5-2609 v4 @ 1.70GHz
// Intel Xeon E5-2618L v3 @ 2.30GHz
// Intel Xeon E5-2618L v4 @ 2.20GHz
// Intel Xeon E5-2620 @ 2.00GHz
// Intel Xeon E5-2620 v2 @ 2.10GHz
// Intel Xeon E5-2620 v3 @ 2.40GHz
// Intel Xeon E5-2620 v4 @ 2.10GHz
// Intel Xeon E5-2623 v3 @ 3.00GHz
// Intel Xeon E5-2623 v4 @ 2.60GHz
// Intel Xeon E5-2628L v2 @ 1.90GHz
// Intel Xeon E5-2628L v3 @ 2.00GHz
// Intel Xeon E5-2628L v4 @ 1.90GHz
// Intel Xeon E5-2629 v3 @ 2.40GHz
// Intel Xeon E5-2630 @ 2.30GHz
// Intel Xeon E5-2630 v2 @ 2.60GHz
// Intel Xeon E5-2630 v3 @ 2.40GHz
// Intel Xeon E5-2630 v4 @ 2.20GHz
// Intel Xeon E5-2630L @ 2.00GHz
// Intel Xeon E5-2630L v2 @ 2.40GHz
// Intel Xeon E5-2630L v3 @ 1.80GHz
// Intel Xeon E5-2630L v4 @ 1.80GHz
// Intel Xeon E5-2637 @ 3.00GHz
// Intel Xeon E5-2637 v2 @ 3.50GHz
// Intel Xeon E5-2637 v3 @ 3.50GHz
// Intel Xeon E5-2637 v4 @ 3.50GHz
// Intel Xeon E5-2640 @ 2.50GHz
// Intel Xeon E5-2640 v2 @ 2.00GHz
// Intel Xeon E5-2640 v3 @ 2.60GHz
// Intel Xeon E5-2640 v4 @ 2.40GHz
// Intel Xeon E5-2643 @ 3.30GHz
// Intel Xeon E5-2643 v2 @ 3.50GHz
// Intel Xeon E5-2643 v3 @ 3.40GHz
// Intel Xeon E5-2643 v4 @ 3.40GHz
// Intel Xeon E5-2648L @ 1.80GHz
// Intel Xeon E5-2648L v2 @ 1.90GHz
// Intel Xeon E5-2648L v3 @ 1.80GHz
// Intel Xeon E5-2648L v4 @ 1.80GHz
// Intel Xeon E5-2649 v3 @ 2.30GHz
// Intel Xeon E5-2650 @ 2.00GHz
// Intel Xeon E5-2650 v2 @ 2.60GHz
// Intel Xeon E5-2650 v3 @ 2.30GHz
// Intel Xeon E5-2650 v4 @ 2.20GHz
// Intel Xeon E5-2650L @ 1.80GHz
// Intel Xeon E5-2650L v2 @ 1.70GHz
// Intel Xeon E5-2650L v3 @ 1.80GHz
// Intel Xeon E5-2650L v4 @ 1.70GHz
// Intel Xeon E5-2651 v2 @ 1.80GHz
// Intel Xeon E5-2658 @ 2.10GHz
// Intel Xeon E5-2658 v2 @ 2.40GHz
// Intel Xeon E5-2658 v3 @ 2.20GHz
// Intel Xeon E5-2658 v4 @ 2.30GHz
// Intel Xeon E5-2660 @ 2.20GHz
// Intel Xeon E5-2660 v2 @ 2.20GHz
// Intel Xeon E5-2660 v3 @ 2.60GHz
// Intel Xeon E5-2660 v4 @ 2.00GHz
// Intel Xeon E5-2663 v3 @ 2.80GHz
// Intel Xeon E5-2665 @ 2.40GHz
// Intel Xeon E5-2667 @ 2.90GHz
// Intel Xeon E5-2667 v2 @ 3.30GHz
// Intel Xeon E5-2667 v3 @ 3.20GHz
// Intel Xeon E5-2667 v4 @ 3.20GHz
// Intel Xeon E5-2669 v3 @ 2.30GHz
// Intel Xeon E5-2670 @ 2.60GHz
// Intel Xeon E5-2670 v2 @ 2.50GHz
// Intel Xeon E5-2670 v3 @ 2.30GHz
// Intel Xeon E5-2673 v2 @ 3.30GHz
// Intel Xeon E5-2673 v3 @ 2.40GHz
// Intel Xeon E5-2673 v4 @ 2.30GHz
// Intel Xeon E5-2675 v3 @ 1.80GHz
// Intel Xeon E5-2676 v3 @ 2.40GHz
// Intel Xeon E5-2676 v4 @ 2.40GHz
// Intel Xeon E5-2678 v3 @ 2.50GHz
// Intel Xeon E5-2679 v4 @ 2.50GHz
// Intel Xeon E5-2680 @ 2.70GHz
// Intel Xeon E5-2680 v2 @ 2.80GHz
// Intel Xeon E5-2680 v3 @ 2.50GHz
// Intel Xeon E5-2680 v4 @ 2.40GHz
// Intel Xeon E5-2680R v4 @ 2.40GHz
// Intel Xeon E5-2682 v4 @ 2.50GHz
// Intel Xeon E5-2683 v3 @ 2.00GHz
// Intel Xeon E5-2683 v4 @ 2.10GHz
// Intel Xeon E5-2685 v3 @ 2.60GHz
// Intel Xeon E5-2686 v3 @ 2.00GHz
// Intel Xeon E5-2686 v4 @ 2.30GHz
// Intel Xeon E5-2687W @ 3.10GHz
// Intel Xeon E5-2687W v2 @ 3.40GHz
// Intel Xeon E5-2687W v3 @ 3.10GHz
// Intel Xeon E5-2687W v4 @ 3.00GHz
// Intel Xeon E5-2689 @ 2.60GHz
// Intel Xeon E5-2689 v4 @ 3.10GHz
// Intel Xeon E5-2690 @ 2.90GHz
// Intel Xeon E5-2690 v2 @ 3.00GHz
// Intel Xeon E5-2690 v3 @ 2.60GHz
// Intel Xeon E5-2690 v4 @ 2.60GHz
// Intel Xeon E5-2692 v2 @ 2.20GHz
// Intel Xeon E5-2695 v2 @ 2.40GHz
// Intel Xeon E5-2695 v3 @ 2.30GHz
// Intel Xeon E5-2695 v4 @ 2.10GHz
// Intel Xeon E5-2696 v2 @ 2.50GHz
// Intel Xeon E5-2696 v3 @ 2.30GHz
// Intel Xeon E5-2696 v4 @ 2.20GHz
// Intel Xeon E5-2697 v2 @ 2.70GHz
// Intel Xeon E5-2697 v3 @ 2.60GHz
// Intel Xeon E5-2697 v4 @ 2.30GHz
// Intel Xeon E5-2697A v4 @ 2.60GHz
// Intel Xeon E5-2697R v4 @ 2.30GHz
// Intel Xeon E5-2698 v3 @ 2.30GHz
// Intel Xeon E5-2698 v4 @ 2.20GHz
// Intel Xeon E5-2699 v3 @ 2.30GHz
// Intel Xeon E5-2699 v4 @ 2.20GHz
// Intel Xeon E5-2699A v4 @ 2.40GHz
// Intel Xeon E5-4603 @ 2.00GHz
// Intel Xeon E5-4607 v2 @ 2.60GHz
// Intel Xeon E5-4610 @ 2.40GHz
// Intel Xeon E5-4610 v3 @ 1.70GHz
// Intel Xeon E5-4617 @ 2.90GHz
// Intel Xeon E5-4620 @ 2.20GHz
// Intel Xeon E5-4620 v3 @ 2.00GHz
// Intel Xeon E5-4627 v2 @ 3.30GHz
// Intel Xeon E5-4627 v3 @ 2.60GHz
// Intel Xeon E5-4627 v4 @ 2.60GHz
// Intel Xeon E5-4640 @ 2.40GHz
// Intel Xeon E5-4640 v3 @ 1.90GHz
// Intel Xeon E5-4648 v3 @ 1.70GHz
// Intel Xeon E5-4650 @ 2.70GHz
// Intel Xeon E5-4650 v3 @ 2.10GHz
// Intel Xeon E5-4650L @ 2.60GHz
// Intel Xeon E5-4655 v3 @ 2.90GHz
// Intel Xeon E5-4657L v2 @ 2.40GHz
// Intel Xeon E5-4660 v3 @ 2.10GHz
// Intel Xeon E5-4667 v3 @ 2.00GHz
// Intel Xeon E5-4669 v3 @ 2.10GHz
// Intel Xeon E5-4669 v4 @ 2.20GHz
// Intel Xeon E7- 2830 @ 2.13GHz
// Intel Xeon E3110 @ 3.00GHz
// Intel Xeon E3113 @ 3.00GHz
// Intel Xeon E3120 @ 3.16GHz
// Intel Xeon E5205 @ 1.86GHz
// Intel Xeon E5240 @ 3.00GHz
// Intel Xeon E5310 @ 1.60GHz
// Intel Xeon E5320 @ 1.86GHz
// Intel Xeon E5335 @ 2.00GHz
// Intel Xeon E5345 @ 2.33GHz
// Intel Xeon E5405 @ 2.00GHz
// Intel Xeon E5410 @ 2.33GHz
// Intel Xeon E5420 @ 2.50GHz
// Intel Xeon E5430 @ 2.66GHz
// Intel Xeon E5440 @ 2.83GHz
// Intel Xeon E5450 @ 3.00GHz
// Intel Xeon E5462 @ 2.80GHz
// Intel Xeon E5472 @ 3.00GHz
// Intel Xeon E5502 @ 1.87GHz
// Intel Xeon E5503 @ 2.00GHz
// Intel Xeon E5504 @ 2.00GHz
// Intel Xeon E5506 @ 2.13GHz
// Intel Xeon E5507 @ 2.27GHz
// Intel Xeon E5520 @ 2.27GHz
// Intel Xeon E5530 @ 2.40GHz
// Intel Xeon E5540 @ 2.53GHz
// Intel Xeon E5603 @ 1.60GHz
// Intel Xeon E5606 @ 2.13GHz
// Intel Xeon E5607 @ 2.27GHz
// Intel Xeon E5620 @ 2.40GHz
// Intel Xeon E5630 @ 2.53GHz
// Intel Xeon E5640 @ 2.67GHz
// Intel Xeon E5645 @ 2.40GHz
// Intel Xeon E5649 @ 2.53GHz
// Intel Xeon E7320 @ 2.13GHz
// Intel Xeon E-2104G @ 3.20GHz
// Intel Xeon E-2124 @ 3.30GHz
// Intel Xeon E-2124G @ 3.40GHz
// Intel Xeon E-2126G @ 3.30GHz
// Intel Xeon E-2134 @ 3.50GHz
// Intel Xeon E-2136 @ 3.30GHz
// Intel Xeon E-2144G @ 3.60GHz
// Intel Xeon E-2146G @ 3.50GHz
// Intel Xeon E-2174G @ 3.80GHz
// Intel Xeon E-2176G @ 3.70GHz
// Intel Xeon E-2176M @ 2.70GHz
// Intel Xeon E-2186G @ 3.80GHz
// Intel Xeon E-2186M @ 2.90GHz
// Intel Xeon E-2224 @ 3.40GHz
// Intel Xeon E-2224G @ 3.50GHz
// Intel Xeon E-2226G @ 3.40GHz
// Intel Xeon E-2234 @ 3.60GHz
// Intel Xeon E-2236 @ 3.40GHz
// Intel Xeon E-2244G @ 3.80GHz
// Intel Xeon E-2246G @ 3.60GHz
// Intel Xeon E-2254ML @ 1.70GHz
// Intel Xeon E-2274G @ 4.00GHz
// Intel Xeon E-2276G @ 3.80GHz
// Intel Xeon E-2276M @ 2.80GHz
// Intel Xeon E-2276ME @ 2.80GHz
// Intel Xeon E-2278G @ 3.40GHz
// Intel Xeon E-2278GE @ 3.30GHz
// Intel Xeon E-2278GEL @ 2.00GHz
// Intel Xeon E-2286G @ 4.00GHz
// Intel Xeon E-2286M @ 2.40GHz
// Intel Xeon E-2288G @ 3.70GHz
// Intel Xeon Gold 5117 @ 2.00GHz
// Intel Xeon Gold 5118 @ 2.30GHz
// Intel Xeon Gold 5120 @ 2.20GHz
// Intel Xeon Gold 5120T @ 2.20GHz
// Intel Xeon Gold 5122 @ 3.60GHz
// Intel Xeon Gold 5215 @ 2.50GHz
// Intel Xeon Gold 5217 @ 3.00GHz
// Intel Xeon Gold 5218 @ 2.30GHz
// Intel Xeon Gold 5218R @ 2.10GHz
// Intel Xeon Gold 5220 @ 2.20GHz
// Intel Xeon Gold 5222 @ 3.80GHz
// Intel Xeon Gold 5315Y @ 3.20GHz
// Intel Xeon Gold 5317 @ 3.00GHz
// Intel Xeon Gold 6126 @ 2.60GHz
// Intel Xeon Gold 6128 @ 3.40GHz
// Intel Xeon Gold 6130 @ 2.10GHz
// Intel Xeon Gold 6130T @ 2.10GHz
// Intel Xeon Gold 6132 @ 2.60GHz
// Intel Xeon Gold 6133 @ 2.50GHz
// Intel Xeon Gold 6134 @ 3.20GHz
// Intel Xeon Gold 6136 @ 3.00GHz
// Intel Xeon Gold 6137 @ 3.90GHz
// Intel Xeon Gold 6138 @ 2.00GHz
// Intel Xeon Gold 6138T @ 2.00GHz
// Intel Xeon Gold 6140 @ 2.30GHz
// Intel Xeon Gold 6143 @ 2.80GHz
// Intel Xeon Gold 6144 @ 3.50GHz
// Intel Xeon Gold 6146 @ 3.20GHz
// Intel Xeon Gold 6148 @ 2.40GHz
// Intel Xeon Gold 6152 @ 2.10GHz
// Intel Xeon Gold 6154 @ 3.00GHz
// Intel Xeon Gold 6208U @ 2.90GHz
// Intel Xeon Gold 6210U @ 2.50GHz
// Intel Xeon Gold 6212U @ 2.40GHz
// Intel Xeon Gold 6226 @ 2.70GHz
// Intel Xeon Gold 6226R @ 2.90GHz
// Intel Xeon Gold 6230 @ 2.10GHz
// Intel Xeon Gold 6230R @ 2.10GHz
// Intel Xeon Gold 6238 @ 2.10GHz
// Intel Xeon Gold 6242 @ 2.80GHz
// Intel Xeon Gold 6242R @ 3.10GHz
// Intel Xeon Gold 6246 @ 3.30GHz
// Intel Xeon Gold 6246R @ 3.40GHz
// Intel Xeon Gold 6248 @ 2.50GHz
// Intel Xeon Gold 6248R @ 3.00GHz
// Intel Xeon Gold 6252 @ 2.10GHz
// Intel Xeon Gold 6254 @ 3.10GHz
// Intel Xeon Gold 6334 @ 3.60GHz
// Intel Xeon Gold 6336Y @ 2.40GHz
// Intel Xeon Gold 6342 @ 2.80GHz
// Intel Xeon Gold 6348 @ 2.60GHz
// Intel Xeon L3110 @ 3.00GHz
// Intel Xeon L3360 @ 2.83GHz
// Intel Xeon L3406 @ 2.27GHz
// Intel Xeon L3426 @ 1.87GHz
// Intel Xeon L5240 @ 3.00GHz
// Intel Xeon L5310 @ 1.60GHz
// Intel Xeon L5320 @ 1.86GHz
// Intel Xeon L5335 @ 2.00GHz
// Intel Xeon L5408 @ 2.13GHz
// Intel Xeon L5410 @ 2.33GHz
// Intel Xeon L5420 @ 2.50GHz
// Intel Xeon L5430 @ 2.66GHz
// Intel Xeon L5520 @ 2.27GHz
// Intel Xeon L5530 @ 2.40GHz
// Intel Xeon L5609 @ 1.87GHz
// Intel Xeon L5630 @ 2.13GHz
// Intel Xeon L5638 @ 2.00GHz
// Intel Xeon L5639 @ 2.13GHz
// Intel Xeon L5640 @ 2.27GHz
// Intel Xeon L7455 @ 2.13GHz
// Intel Xeon MV 3.20GHz
// Intel Xeon Platinum 8124M @ 3.00GHz
// Intel Xeon Platinum 8151 @ 3.40GHz
// Intel Xeon Platinum 8160 @ 2.10GHz
// Intel Xeon Platinum 8167M @ 2.00GHz
// Intel Xeon Platinum 8168 @ 2.70GHz
// Intel Xeon Platinum 8173M @ 2.00GHz
// Intel Xeon Platinum 8175M @ 2.50GHz
// Intel Xeon Platinum 8176 @ 2.10GHz
// Intel Xeon Platinum 8259CL @ 2.50GHz
// Intel Xeon Platinum 8260M @ 2.30GHz
// Intel Xeon Platinum 8268 @ 2.90GHz
// Intel Xeon Platinum 8280 @ 2.70GHz
// Intel Xeon Platinum 8358 @ 2.60GHz
// Intel Xeon Platinum 8380 @ 2.30GHz
// Intel Xeon Silver 4108 @ 1.80GHz
// Intel Xeon Silver 4109T @ 2.00GHz
// Intel Xeon Silver 4110 @ 2.10GHz
// Intel Xeon Silver 4112 @ 2.60GHz
// Intel Xeon Silver 4114 @ 2.20GHz
// Intel Xeon Silver 4116 @ 2.10GHz
// Intel Xeon Silver 4116T @ 2.10GHz
// Intel Xeon Silver 4123 @ 3.00GHz
// Intel Xeon Silver 4208 @ 2.10GHz
// Intel Xeon Silver 4210 @ 2.20GHz
// Intel Xeon Silver 4210R @ 2.40GHz
// Intel Xeon Silver 4214 @ 2.20GHz
// Intel Xeon Silver 4214R @ 2.40GHz
// Intel Xeon Silver 4214Y @ 2.20GHz
// Intel Xeon Silver 4215 @ 2.50GHz
// Intel Xeon Silver 4216 @ 2.10GHz
// Intel Xeon Silver 4310 @ 2.10GHz
// Intel Xeon Silver 4314 @ 2.40GHz
// Intel Xeon Silver 4316 @ 2.30GHz
// Intel Xeon W3503 @ 2.40GHz
// Intel Xeon W3505 @ 2.53GHz
// Intel Xeon W3520 @ 2.67GHz
// Intel Xeon W3530 @ 2.80GHz
// Intel Xeon W3540 @ 2.93GHz
// Intel Xeon W3550 @ 3.07GHz
// Intel Xeon W3565 @ 3.20GHz
// Intel Xeon W3570 @ 3.20GHz
// Intel Xeon W3580 @ 3.33GHz
// Intel Xeon W3670 @ 3.20GHz
// Intel Xeon W3680 @ 3.33GHz
// Intel Xeon W3690 @ 3.47GHz
// Intel Xeon W5580 @ 3.20GHz
// Intel Xeon W5590 @ 3.33GHz
// Intel Xeon W-1250 @ 3.30GHz
// Intel Xeon W-1250P @ 4.10GHz
// Intel Xeon W-1270 @ 3.40GHz
// Intel Xeon W-1270P @ 3.80GHz
// Intel Xeon W-1290 @ 3.20GHz
// Intel Xeon W-1290E @ 3.50GHz
// Intel Xeon W-1290P @ 3.70GHz
// Intel Xeon W-1290T @ 1.90GHz
// Intel Xeon W-1350 @ 3.30GHz
// Intel Xeon W-1370P @ 3.60GHz
// Intel Xeon W-2102 @ 2.90GHz
// Intel Xeon W-2104 @ 3.20GHz
// Intel Xeon W-2123 @ 3.60GHz
// Intel Xeon W-2125 @ 4.00GHz
// Intel Xeon W-2133 @ 3.60GHz
// Intel Xeon W-2135 @ 3.70GHz
// Intel Xeon W-2140B @ 3.20GHz
// Intel Xeon W-2145 @ 3.70GHz
// Intel Xeon W-2150B @ 3.00GHz
// Intel Xeon W-2155 @ 3.30GHz
// Intel Xeon W-2170B @ 2.50GHz
// Intel Xeon W-2175 @ 2.50GHz
// Intel Xeon W-2191B @ 2.30GHz
// Intel Xeon W-2195 @ 2.30GHz
// Intel Xeon W-2223 @ 3.60GHz
// Intel Xeon W-2225 @ 4.10GHz
// Intel Xeon W-2235 @ 3.80GHz
// Intel Xeon W-2245 @ 3.90GHz
// Intel Xeon W-2255 @ 3.70GHz
// Intel Xeon W-2265 @ 3.50GHz
// Intel Xeon W-2275 @ 3.30GHz
// Intel Xeon W-2295 @ 3.00GHz
// Intel Xeon W-3175X @ 3.10GHz
// Intel Xeon W-3223 @ 3.50GHz
// Intel Xeon W-3235 @ 3.30GHz
// Intel Xeon W-3245 @ 3.20GHz
// Intel Xeon W-3265 @ 2.70GHz
// Intel Xeon W-3275M @ 2.50GHz
// Intel Xeon W-10855M @ 2.80GHz
// Intel Xeon W-10885M @ 2.40GHz
// Intel Xeon W-11855M @ 3.20GHz
// Intel Xeon W-11955M @ 2.60GHz
// Intel Xeon X3210 @ 2.13GHz
// Intel Xeon X3220 @ 2.40GHz
// Intel Xeon X3230 @ 2.66GHz
// Intel Xeon X3320 @ 2.50GHz
// Intel Xeon X3323 @ 2.50GHz
// Intel Xeon X3330 @ 2.66GHz
// Intel Xeon X3350 @ 2.66GHz
// Intel Xeon X3353 @ 2.66GHz
// Intel Xeon X3360 @ 2.83GHz
// Intel Xeon X3363 @ 2.83GHz
// Intel Xeon X3370 @ 3.00GHz
// Intel Xeon X3380 @ 3.16GHz
// Intel Xeon X3430 @ 2.40GHz
// Intel Xeon X3440 @ 2.53GHz
// Intel Xeon X3450 @ 2.67GHz
// Intel Xeon X3460 @ 2.80GHz
// Intel Xeon X3470 @ 2.93GHz
// Intel Xeon X3480 @ 3.07GHz
// Intel Xeon X5260 @ 3.33GHz
// Intel Xeon X5270 @ 3.50GHz
// Intel Xeon X5272 @ 3.40GHz
// Intel Xeon X5355 @ 2.66GHz
// Intel Xeon X5365 @ 3.00GHz
// Intel Xeon X5450 @ 3.00GHz
// Intel Xeon X5460 @ 3.16GHz
// Intel Xeon X5470 @ 3.33GHz
// Intel Xeon X5472 @ 3.00GHz
// Intel Xeon X5482 @ 3.20GHz
// Intel Xeon X5492 @ 3.40GHz
// Intel Xeon X5550 @ 2.67GHz
// Intel Xeon X5560 @ 2.80GHz
// Intel Xeon X5570 @ 2.93GHz
// Intel Xeon X5647 @ 2.93GHz
// Intel Xeon X5650 @ 2.67GHz
// Intel Xeon X5660 @ 2.80GHz
// Intel Xeon X5667 @ 3.07GHz
// Intel Xeon X5670 @ 2.93GHz
// Intel Xeon X5672 @ 3.20GHz
// Intel Xeon X5675 @ 3.07GHz
// Intel Xeon X5677 @ 3.47GHz
// Intel Xeon X5679 @ 3.20GHz
// Intel Xeon X5680 @ 3.33GHz
// Intel Xeon X5687 @ 3.60GHz
// Intel Xeon X5690 @ 3.47GHz
// Intel Xeon X5698 @ 4.40GHz
// Intel Xeon X6550 @ 2.00GHz
// Manta
// Mars based on Qualcomm Technologies, Inc SM8350
// MediaTek MT6735
// MediaTek MT6737
// MediaTek MT6737M
// MediaTek MT6737T
// MediaTek MT6739WA
// MediaTek MT6739WW
// MediaTek MT6750
// MediaTek MT6750T
// MediaTek MT6750V/WT
// MediaTek MT6753
// MediaTek MT6753T
// MediaTek MT6757CD
// MediaTek MT6757V
// MediaTek MT6761V/WBB
// MediaTek MT6761V/WE
// MediaTek MT6762G
// MediaTek MT6762V/CA
// MediaTek MT6762V/CB
// MediaTek MT6762V/CN
// MediaTek MT6762V/WA
// MediaTek MT6762V/WB
// MediaTek MT6762V/WD
// MediaTek MT6762V/WR
// MediaTek MT6763V/CE
// MediaTek MT6763V/V
// MediaTek MT6765G
// MediaTek MT6765V/CA
// MediaTek MT6765V/CB
// MediaTek MT6768V/CA
// MediaTek MT6769T
// MediaTek MT6769V/CB
// MediaTek MT6769V/CU
// MediaTek MT6769V/WB
// MediaTek MT6769Z
// MediaTek MT6771V/C
// MediaTek MT6771V/CT
// MediaTek MT6771V/W
// MediaTek MT6771V/WM
// MediaTek MT6771V/WT
// MediaTek MT6779V/CE
// MediaTek MT6779V/CU
// MediaTek MT6779V/CV
// MediaTek MT6785V/CC
// MediaTek MT6785V/CD
// MediaTek MT6797
// MediaTek MT6797T
// MediaTek MT6797X
// MediaTek MT6853T
// MediaTek MT6873
// MediaTek MT8163
// MediaTek MT8166B
// MediaTek MT8167B
// MediaTek MT8168A
// MediaTek MT8183
// MediaTek MT8735B
// MediaTek MT8768CT
// MediaTek MT8768WA
// MediaTek MT8768WT
// Microsoft ARM SQ1 @ 3.0 GHz
// Microsoft SQ2 @ 3.15 GHz
// Mobile AMD Athlon 4 2400+
// Mobile AMD Athlon 64 3200+
// Mobile AMD Athlon 64 3400+
// Mobile AMD Athlon 64 3700+
// Mobile AMD Athlon 64 4000+
// Mobile AMD Athlon 2500+
// Mobile AMD Athlon MP-M 1800+
// Mobile AMD Athlon MP-M 2400+
// Mobile AMD Athlon XP-M 1600+
// Mobile AMD Athlon XP-M 1800+
// Mobile AMD Athlon XP-M 2000+
// Mobile AMD Athlon XP-M 2200+
// Mobile AMD Athlon XP-M 2400+
// Mobile AMD Athlon XP-M 2500+
// Mobile AMD Athlon XP-M 2600+
// Mobile AMD Athlon XP-M 2800+
// Mobile AMD Athlon XP-M 3000+
// Mobile AMD Sempron 2100+
// Mobile AMD Sempron 2600+
// Mobile AMD Sempron 2800+
// Mobile AMD Sempron 3000+
// Mobile AMD Sempron 3100+
// Mobile AMD Sempron 3200+
// Mobile AMD Sempron 3300+
// Mobile AMD Sempron 3400+
// Mobile AMD Sempron 3500+
// Mobile AMD Sempron 3600+
// Mobile AMD Sempron 3800+
// Mobile Intel Celeron 1.70GHz
// Mobile Intel Celeron 1.80GHz
// Mobile Intel Celeron 2.00GHz
// Mobile Intel Celeron 2.20GHz
// Mobile Intel Celeron 2.40GHz
// Mobile Intel Celeron 1333MHz
// Mobile Intel Pentium 4 2.66GHz
// Mobile Intel Pentium 4 2.80GHz
// Mobile Intel Pentium 4 3.06GHz
// Mobile Intel Pentium 4 3.20GHz
// Mobile Intel Pentium 4 3.33GHz
// Mobile Intel Pentium 4 - M 1.70GHz
// Mobile Intel Pentium 4 - M 1.80GHz
// Mobile Intel Pentium 4 - M 2.00GHz
// Mobile Intel Pentium 4 - M 2.20GHz
// Mobile Intel Pentium 4 - M 2.40GHz
// Mobile Intel Pentium III - M 933MHz
// Mobile Intel Pentium III - M 1200MHz
// msm8960dt
// MT6592
// MT6735M
// MT6735P
// MT6738
// MT6750V/W
// MT6755BM
// MT6755M
// MT6755V/B
// MT6755V/CM
// MT6755V/WM
// MT6755V/WS
// MT6757W
// MT6757WD
// MT6757WH
// MT6761V/CAB
// MT6761V/CBB
// MT6761V/CD
// MT6761V/WAB
// mt6762m
// MT6762V/CR
// MT6763V/B
// MT6763V/CT
// MT6763V/WT
// MT6765
// MT6765V/WA
// MT6765V/WB
// MT6769V/CT
// MT6769V/CZ
// MT6771V/WL
// MT6785
// MT6795
// MT6795M
// MT6795MM
// MT6797M
// MT6833
// MT6833V/NZA
// MT6833V/ZA
// MT6853V/NZA
// MT6853V/TNZA
// MT6875
// MT6877V/ZA
// MT6889Z/CZA
// MT6893Z/CZA
// MT6893Z_A/CZA
// MT6969T
// MT8165
// MT8168B
// MT8735
// MT8735P
// MT8765WB
// MT8766A
// MT8766B
// MT8768WD
// MT8788
// MT9950
// MTK6757
// Nvidia Tegra T132
// Nvidia Tegra T210
// Pentium Dual-Core E6000 @ 3.46GHz
// Pentium Dual-Core T4500 @ 2.30GHz
// QCT APQ8064 AWIFI
// QCT APQ8064 DEB
// QCT APQ8064 FLO
// QCT APQ8064 MAKO
// Qualcomm APQ8026
// Qualcomm APQ8084
// Qualcomm APQ 8084 (Flattened Device Tree)
// Qualcomm MSM8226
// Qualcomm MSM8228
// Qualcomm MSM8626
// Qualcomm MSM8917
// Qualcomm MSM8926
// Qualcomm MSM8928
// Qualcomm MSM8937
// Qualcomm MSM8939
// Qualcomm MSM8953
// Qualcomm MSM8974
// Qualcomm MSM8974PRO-AA
// Qualcomm MSM8974PRO-AB
// Qualcomm MSM8974PRO-AC
// Qualcomm MSM8992
// Qualcomm MSM8994
// Qualcomm MSM8996
// Qualcomm MSM8996PRO-AB
// Qualcomm MSM 8939 HUAWEI KIW-L21
// Qualcomm MSM 8939 HUAWEI KIW-L24
// Qualcomm MSM 8939 HUAWEI TEXAS-A1
// Qualcomm MSM 8974 HAMMERHEAD (Flattened Device Tre
// Qualcomm Snapdragon 8350
// Qualcomm Technologies, Inc APQ8009
// Qualcomm Technologies, Inc APQ8016
// Qualcomm Technologies, Inc APQ8017
// Qualcomm Technologies, Inc APQ8053
// Qualcomm Technologies, Inc APQ8076
// Qualcomm Technologies, Inc APQ8096
// Qualcomm Technologies, Inc ATOLL-AB
// Qualcomm Technologies, Inc BENGAL
// Qualcomm Technologies, Inc BENGALP
// Qualcomm Technologies, Inc KONA
// Qualcomm Technologies, Inc LAGOON
// Qualcomm Technologies, Inc LITO
// Qualcomm Technologies, Inc MSM8216
// Qualcomm Technologies, Inc MSM8909
// Qualcomm Technologies, Inc MSM8916
// Qualcomm Technologies, Inc MSM8917
// Qualcomm Technologies, Inc MSM8920
// Qualcomm Technologies, Inc MSM8929
// Qualcomm Technologies, Inc MSM8937
// Qualcomm Technologies, Inc MSM8939
// Qualcomm Technologies, Inc MSM8940
// Qualcomm Technologies, Inc MSM8952
// Qualcomm Technologies, Inc MSM8953
// Qualcomm Technologies, Inc MSM8956
// Qualcomm Technologies, Inc MSM8976
// Qualcomm Technologies, Inc MSM8976SG
// Qualcomm Technologies, Inc MSM8992
// Qualcomm Technologies, Inc MSM8994
// Qualcomm Technologies, Inc MSM8996
// Qualcomm Technologies, Inc MSM8996pro
// Qualcomm Technologies, Inc MSM8998
// Qualcomm Technologies, Inc QCM2150
// Qualcomm Technologies, Inc QM215
// Qualcomm Technologies, Inc SDA450
// Qualcomm Technologies, Inc SDA660
// Qualcomm Technologies, Inc SDM429
// Qualcomm Technologies, Inc SDM439
// Qualcomm Technologies, Inc SDM450
// Qualcomm Technologies, Inc SDM460
// Qualcomm Technologies, Inc SDM630
// Qualcomm Technologies, Inc SDM632
// Qualcomm Technologies, Inc SDM636
// Qualcomm Technologies, Inc SDM660
// Qualcomm Technologies, Inc SDM662
// Qualcomm Technologies, Inc SDM665
// Qualcomm Technologies, Inc SDM670
// Qualcomm Technologies, Inc SDM710
// Qualcomm Technologies, Inc SDM712
// Qualcomm Technologies, Inc SDM720G
// Qualcomm Technologies, Inc SDM730G AIE
// Qualcomm Technologies, Inc SDM765G 5G
// Qualcomm Technologies, Inc SDMMAGPIE
// Qualcomm Technologies, Inc SDMMAGPIEP
// Qualcomm Technologies, Inc SM4250
// Qualcomm Technologies, Inc SM4350
// Qualcomm Technologies, Inc SM6115
// Qualcomm Technologies, Inc SM6125
// Qualcomm Technologies, Inc SM6150
// Qualcomm Technologies, Inc SM7125
// Qualcomm Technologies, Inc SM7150
// Qualcomm Technologies, Inc SM7225
// Qualcomm Technologies, Inc SM7250
// Qualcomm Technologies, Inc SM8150
// Qualcomm Technologies, Inc SM8150_Plus
// Qualcomm Technologies, Inc SM8150P
// Qualcomm Technologies, Inc SM8250
// Qualcomm Technologies, Inc SM8350
// Qualcomm Technologies, Inc TRINKET
// Renoir based on Qualcomm Technologies, Inc SM7350
// Rockchip (Device Tree)
// Rockchip RK3229
// Rockchip RK3288
// Rockchip RK3288 (Flattened Device Tree)
// Rockchip RK3326
// Rockchip RK3328
// Rockchip RK3368
// Rockchip RK3399
// Samsung EXYNOS5420
// Samsung EXYNOS5433
// SAMSUNG Exynos7420
// SAMSUNG Exynos7580
// Samsung Exynos 2100
// Samsung Exynos 7420
// Samsung Exynos 7570
// Samsung Exynos 7580
// Samsung Exynos 7870
// Samsung Exynos 7880
// Samsung Exynos 7884
// Samsung Exynos 7885
// Samsung Exynos 7904
// Samsung Exynos 8890
// Samsung Exynos 8895
// Samsung Exynos 9610
// Samsung Exynos 9611
// Samsung Exynos 9810
// Samsung Exynos 9820
// Samsung Exynos 9825
// Samsung GrandPrimePlus LTE CIS rev04 board based o
// Samsung GrandPrimePlus LTE LTN OPEN rev04 board ba
// Samsung J7 Max LTE SWA board based on MT6757V/WL
// SAMSUNG JF
// SAMSUNG SERRANO
// SMDK4x12
// Snapdragon 7c @ 2.40 GHz
// Snapdragon 7c Gen 2 @ 2.55
// Snapdragon 8cx @ 2.84 GHz
// Snapdragon 8cx Gen 2 @ 3.1
// Snapdragon 835
// Snapdragon 850 @ 2.96 GHz
// Sony Mobile fusion3
// Spreadtrum SC7731e
// Spreadtrum SC9853I-IA
// Star based on Qualcomm Technologies, Inc SM8350
// tn8
// Unisoc SC7731e
// Unisoc SC9832e
// Unisoc SC9863a
// Unisoc T618
// Unisoc UIS8581E
// Unisoc ums512
// UNIVERSAL3475
// vendor Kirin990
// vendor Kirin9000
// Venus based on Qualcomm Technologies, Inc SM8350
// VIA C7-D 1800MHz
// VIA C7-M 1200MHz
// VIA C7-M 1600MHz
// VIA C7-M 6300MHz
// VIA Eden 1000MHz
// VIA Eden 1200MHz
// VIA Eden C1050@1.06GHz
// VIA Eden X2 U4200 @ 1.0+ GHz
// VIA Eden X4 C4250 @ 1.2+GHz
// VIA Esther 1000MHz
// VIA Esther 1500MHz
// VIA Nano L2007@1600MHz
// VIA Nano L2100@1800MHz
// VIA Nano L2207@1600MHz
// VIA Nano U2250 (1.6GHz Capable)
// VIA Nano U2250@1300+MHz
// VIA Nano U2500@1200MHz
// VIA Nano U3500@1000MHz
// VIA Nano X2 U4025 @ 1.2 GHz
// VIA Nehemiah
// VIA QuadCore C4650@2.0GHz
// VIA QuadCore L4700 @ 1.2+ GHz
// VIA QuadCore U4650 @ 1.0+ GHz
// ZHAOXIN KaiXian KX-6640MA@2.2+GHz
// ZHAOXIN KaiXian KX-U6580@2.5GHz
// ZHAOXIN KaiXian KX-U6780A@2.7GHz
// AMD Phenom X4 Quad-Core GP-9600
// AMD Phenom X4 Quad-Core GP-9730
// AMD Phenom X4 Quad-Core GS-6560
// AMD PRO A4-3350B APU
// AMD PRO A4-4350B
// AMD PRO A4-8350B
// AMD PRO A6-7350B
// AMD PRO A6-8500B
// AMD PRO A6-8530B
// AMD PRO A6-8550B
// AMD PRO A6-8570
// AMD PRO A6-8570E
// AMD PRO A6-9500
// AMD PRO A6-9500B
// AMD PRO A6-9500E
// AMD PRO A8-8600B
// AMD PRO A8-8650B
// AMD PRO A8-8670E
// AMD PRO A8-9600
// AMD PRO A8-9600B
// AMD PRO A10-8700B
// AMD PRO A10-8730B
// AMD PRO A10-8750B
// AMD PRO A10-8770
// AMD PRO A10-8770E
// AMD PRO A10-8850B
// AMD PRO A10-9700
// AMD PRO A10-9700B
// AMD PRO A10-9700E
// AMD PRO A12-8800B
// AMD PRO A12-8830B
// AMD PRO A12-8870
// AMD PRO A12-8870E
// AMD PRO A12-9800
// AMD PRO A12-9800B
// AMD PRO A12-9800E
// AMD QC-4000
// AMD R-260H APU
// AMD R-272F APU
// AMD R-460L APU
// AMD R-464L APU
// AMD RX-425BB
// AMD RX-427BB
// AMD Ryzen 3 1200
// AMD Ryzen 3 1300X
// AMD Ryzen 3 2200G
// AMD Ryzen 3 2200GE
// AMD Ryzen 3 2200U
// AMD Ryzen 3 2300U
// AMD Ryzen 3 2300X
// AMD Ryzen 3 3100
// AMD Ryzen 3 3200G
// AMD Ryzen 3 3200GE
// AMD Ryzen 3 3200U
// AMD Ryzen 3 3250U
// AMD Ryzen 3 3300U
// AMD Ryzen 3 3300X
// AMD Ryzen 3 3350U
// AMD Ryzen 3 4300G
// AMD Ryzen 3 4300GE
// AMD Ryzen 3 4300U
// AMD Ryzen 3 5300G
// AMD Ryzen 3 5300GE
// AMD Ryzen 3 5300U
// AMD Ryzen 3 5400U
// AMD Ryzen 3 PRO 1200
// AMD Ryzen 3 PRO 1300
// AMD Ryzen 3 PRO 2100GE
// AMD Ryzen 3 PRO 2200G
// AMD Ryzen 3 PRO 2200GE
// AMD Ryzen 3 PRO 2300U
// AMD Ryzen 3 PRO 3200G
// AMD Ryzen 3 PRO 3200GE
// AMD Ryzen 3 PRO 3300U
// AMD Ryzen 3 PRO 4200G
// AMD Ryzen 3 PRO 4200GE
// AMD Ryzen 3 PRO 4350G
// AMD Ryzen 3 PRO 4350GE
// AMD Ryzen 3 PRO 4450U
// AMD Ryzen 3 PRO 5350G
// AMD Ryzen 3 PRO 5350GE
// AMD Ryzen 3 PRO 5450U
// AMD Ryzen 5 1400
// AMD Ryzen 5 1500X
// AMD Ryzen 5 1600
// AMD Ryzen 5 1600X
// AMD Ryzen 5 2400G
// AMD Ryzen 5 2400GE
// AMD Ryzen 5 2500U
// AMD Ryzen 5 2500X
// AMD Ryzen 5 2600
// AMD Ryzen 5 2600H
// AMD Ryzen 5 2600X
// AMD Ryzen 5 3350G
// AMD Ryzen 5 3350GE
// AMD Ryzen 5 3400G
// AMD Ryzen 5 3400GE
// AMD Ryzen 5 3450U
// AMD Ryzen 5 3500
// AMD Ryzen 5 3500C
// AMD Ryzen 5 3500U
// AMD Ryzen 5 3500X
// AMD Ryzen 5 3550H
// AMD Ryzen 5 3550U
// AMD Ryzen 5 3580U
// AMD Ryzen 5 3600
// AMD Ryzen 5 3600X
// AMD Ryzen 5 3600XT
// AMD Ryzen 5 4500U
// AMD Ryzen 5 4600G
// AMD Ryzen 5 4600GE
// AMD Ryzen 5 4600H
// AMD Ryzen 5 4600HS
// AMD Ryzen 5 4600U
// AMD Ryzen 5 5500U
// AMD Ryzen 5 5600G
// AMD Ryzen 5 5600GE
// AMD Ryzen 5 5600H
// AMD Ryzen 5 5600U
// AMD Ryzen 5 5600X
// AMD Ryzen 5 PRO 1500
// AMD Ryzen 5 PRO 1600
// AMD Ryzen 5 PRO 2400G
// AMD Ryzen 5 PRO 2400GE
// AMD Ryzen 5 PRO 2500U
// AMD Ryzen 5 PRO 2600
// AMD Ryzen 5 PRO 3350G
// AMD Ryzen 5 PRO 3350GE
// AMD Ryzen 5 PRO 3400G
// AMD Ryzen 5 PRO 3400GE
// AMD Ryzen 5 PRO 3500U
// AMD Ryzen 5 PRO 3600
// AMD Ryzen 5 PRO 4400G
// AMD Ryzen 5 PRO 4400GE
// AMD Ryzen 5 PRO 4500U
// AMD Ryzen 5 PRO 4650G
// AMD Ryzen 5 PRO 4650GE
// AMD Ryzen 5 PRO 4650U
// AMD Ryzen 5 PRO 5650G
// AMD Ryzen 5 PRO 5650GE
// AMD Ryzen 5 PRO 5650U
// AMD Ryzen 7 1700
// AMD Ryzen 7 1700X
// AMD Ryzen 7 1800X
// AMD Ryzen 7 2700
// AMD Ryzen 7 2700E
// AMD Ryzen 7 2700U
// AMD Ryzen 7 2700X
// AMD Ryzen 7 2800H
// AMD Ryzen 7 3700U
// AMD Ryzen 7 3700X
// AMD Ryzen 7 3750H
// AMD Ryzen 7 3780U
// AMD Ryzen 7 3800X
// AMD Ryzen 7 3800XT
// AMD Ryzen 7 4700G
// AMD Ryzen 7 4700GE
// AMD Ryzen 7 4700U
// AMD Ryzen 7 4800H
// AMD Ryzen 7 4800HS
// AMD Ryzen 7 4800U
// AMD Ryzen 7 5700G
// AMD Ryzen 7 5700GE
// AMD Ryzen 7 5700U
// AMD Ryzen 7 5800
// AMD Ryzen 7 5800H
// AMD Ryzen 7 5800HS
// AMD Ryzen 7 5800U
// AMD Ryzen 7 5800X
// AMD Ryzen 7 Extreme Edition
// AMD Ryzen 7 PRO 1700
// AMD Ryzen 7 PRO 1700X
// AMD Ryzen 7 PRO 2700
// AMD Ryzen 7 PRO 2700U
// AMD Ryzen 7 PRO 2700X
// AMD Ryzen 7 PRO 3700
// AMD Ryzen 7 PRO 3700U
// AMD Ryzen 7 PRO 4700G
// AMD Ryzen 7 PRO 4750G
// AMD Ryzen 7 PRO 4750GE
// AMD Ryzen 7 PRO 4750U
// AMD Ryzen 7 PRO 5750G
// AMD Ryzen 7 PRO 5750GE
// AMD Ryzen 7 PRO 5850U
// AMD Ryzen 9 3900
// AMD Ryzen 9 3900X
// AMD Ryzen 9 3900XT
// AMD Ryzen 9 3950X
// AMD Ryzen 9 4900H
// AMD Ryzen 9 4900HS
// AMD Ryzen 9 5900
// AMD Ryzen 9 5900HS
// AMD Ryzen 9 5900HX