<div class="row">
  <div class="col-12 mb-3 pb-2 text-white bg-success">
    <div class="row align-items-center">
      <div class="control-group col-3">
        <label class="hasTip" for="commodity_id">Komoditas</label>
        <div class="controls">
          <select id="commodity_id" name="commodity_id" class="form-control">
            <option value="cat-1" selected="selected">Beras</option>
            <option value="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Beras Kualitas Bawah I</option>
            <option value="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Beras Kualitas Bawah II</option>
            <option value="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Beras Kualitas Medium I</option>
            <option value="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Beras Kualitas Medium II</option>
            <option value="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Beras Kualitas Super I</option>
            <option value="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Beras Kualitas Super II</option>
            <option value="cat-2">Daging Ayam</option>
            <option value="7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daging Ayam Ras Segar</option>
            <option value="cat-3">Daging Sapi</option>
            <option value="8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daging Sapi Kualitas 1</option>
            <option value="9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daging Sapi Kualitas 2</option>
            <option value="cat-4">Telur Ayam</option>
            <option value="10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Telur Ayam Ras Segar
            </option>
            <option value="cat-5">Bawang Merah</option>
            <option value="11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bawang Merah Ukuran Sedang</option>
            <option value="cat-6">Bawang Putih</option>
            <option value="12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bawang Putih Ukuran Sedang</option>
            <option value="cat-7">Cabai Merah</option>
            <option value="13">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cabai Merah Besar</option>
            <option value="14">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cabai Merah Keriting </option>
            <option value="cat-8">Cabai Rawit</option>
            <option value="15">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cabai Rawit Hijau</option>
            <option value="16">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cabai Rawit Merah</option>
            <option value="cat-9">Minyak Goreng</option>
            <option value="17">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Minyak Goreng Curah</option>
            <option value="18">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Minyak Goreng Kemasan Bermerk 1</option>
            <option value="19">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Minyak Goreng Kemasan Bermerk 2</option>
            <option value="cat-10">Gula Pasir</option>
            <option value="20">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gula Pasir Kualitas Premium</option>
            <option value="21">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gula Pasir Lokal</option>
          </select>
        </div>
      </div>
      <div class="control-group col-2">
        <label class="hasTip" for="price_type_id">Jenis Pasar</label>
        <div class="controls">
          <select id="price_type_id" name="price_type_id" class="form-control">
            <option value="1" selected="selected">Pasar Tradisional</option>
            <option value="2">Pasar Modern</option>
            <option value="3">Pedagang Besar</option>
          </select>
        </div>
      </div>
      <div class="control-group col-2">
        <label class="hasTip" for="data_type">Jenis Informasi Harga</label>
        <div class="controls">
          <select id="data_type" name="data_type" class="form-control">
            <option value="price">Perbandingan Harga</option>
            <option value="fluctuation">Perubahan Harga (Inflasi Daerah)</option>
            <option value="fluctuation2">Perubahan Harga (Inflasi Nasional)</option>
          </select>
        </div>
      </div>
      <div class="control-group col-2">
        <label class="hasTip" for="date">Tanggal</label>
        <div class="controls">
          <div class="input-group date" id="date_container"><span class="input-group-addon btn btn-danger" onclick="jQuery(this).next().val(null)"><i class="fa fa-times"></i></span><input type="text" class="form-control" readonly="" style="background-color:white" value="01-04-2022" id="date" name="date"><span class="input-group-addon btn btn-info"><i class="fa fa-calendar"></i></span></div>
        </div>
      </div>
      <div class="control-group col-2">
        <label class="hasTip" for="layout">Periode Perbandingan</label>
        <div class="controls">
          <select id="layout" name="layout" class="form-control" disabled="disabled">
            <option value="default">Day to Day (DTD)</option>
            <option value="wtw">Week to Week (WTW)</option>
            <option value="mtm">Month to Month (MTM)</option>
          </select>
        </div>
      </div>
      <div class="control-group col-1">
        <button class="btn btn-primary btn-lg btn-block" type="submit"><i class="fa fa-fw fa-arrow-down"></i></button>
      </div>
    </div>
  </div>
  <div class="col-9">
    <div class="mapcontainer" style="background-image: radial-gradient(circle, #3f91cd, #0e314b);">
      <div class="map">Alternative content</div>
      <div class="areaLegend" style="margin:-50px 0 0 20px"></div>
      <div class="areaLegendDesc" style="margin-left:20px; width: 500px;">
        <div class="price" style="display: inline-flex;">
          <div class="text-white" style="width:100px">Harga<br /> Terendah</div>
          <div class="" style="width:300px">&nbsp;</div>
          <div class="text-white text-right" style="width:100px; float: right;">Harga<br /> Tertinggi</div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-3">
    <table class="table table-bordered" style="max-height: 390px;
  overflow: auto;
  display:inline-block;">
      <thead>
        <tr>
          <td>Provinsi</td>
          <td>Harga</td>
        </tr>
      </thead>
      <tbody id="tableData">
        
      </tbody>
    </table>
  </div>
</div>

<div class="row">
  <div class="col-12">

    <div class="card">
      <!-- <div class="card-header">
            <a href=<?= base_url("Product/create") ?> class="btn btn-success">Create Data</a>
          </div> -->
      <!-- /.card-header -->
      <div class="card-body">
        <!-- chart  -->
        <div class="row">
          <div class="col-3">
            <h6 class="text-center">harga terendah</h6>
            <div id="chart1"></div>

          </div>
          <div class="col-3">
            <h6 class="text-center">harga rendah</h6>
            <div id="chart2"></div>

          </div>
          <div class="col-3">
            <h6 class="text-center">harga sedang</h6>
            <div id="chart3"></div>

          </div>
          <div class="col-3">
            <h6 class="text-center">harga tinggi</h6>
            <div id="chart4"></div>

          </div>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="containerModal" class="text-dark"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(function() {
    var tableDB = {"tableData":[{"value":"9350","name":"Nusa Tenggara Barat","display":"Rp9.350","id":"18"},{"value":"9900","name":"Sulawesi Selatan","display":"Rp9.900","id":"26"},{"value":"9950","name":"Sulawesi Barat","display":"Rp9.950","id":"30"},{"value":"10350","name":"Aceh","display":"Rp10.350","id":"1"},{"value":"10600","name":"Jawa Timur","display":"Rp10.600","id":"16"},{"value":"10600","name":"Sulawesi Tengah","display":"Rp10.600","id":"28"},{"value":"10950","name":"Jawa Tengah","display":"Rp10.950","id":"14"},{"value":"11000","name":"Gorontalo","display":"Rp11.000","id":"25"},{"value":"11050","name":"Sulawesi Tenggara","display":"Rp11.050","id":"27"},{"value":"11250","name":"DI Yogyakarta","display":"Rp11.250","id":"15"},{"value":"11250","name":"Sumatera Utara","display":"Rp11.250","id":"2"},{"value":"11300","name":"Sumatera Selatan","display":"Rp11.300","id":"8"},{"value":"11350","name":"Bengkulu","display":"Rp11.350","id":"7"},{"value":"11350","name":"Jawa Barat","display":"Rp11.350","id":"12"},{"value":"11400","name":"Banten","display":"Rp11.400","id":"11"},{"value":"11400","name":"Lampung","display":"Rp11.400","id":"10"},{"value":"11450","name":"Nusa Tenggara Timur","display":"Rp11.450","id":"19"},{"value":"11500","name":"Sulawesi Utara","display":"Rp11.500","id":"29"},{"value":"11650","name":"Bali","display":"Rp11.650","id":"17"},{"value":"11700","name":"Kepulauan Bangka Belitung","display":"Rp11.700","id":"9"},{"value":"11800","name":"Jambi","display":"Rp11.800","id":"6"},{"value":"12200","name":"Riau","display":"Rp12.200","id":"4"},{"value":"12300","name":"Kalimantan Timur","display":"Rp12.300","id":"23"},{"value":"12300","name":"Papua","display":"Rp12.300","id":"33"},{"value":"12650","name":"Maluku Utara","display":"Rp12.650","id":"32"},{"value":"13100","name":"Kepulauan Riau","display":"Rp13.100","id":"5"},{"value":"13150","name":"Kalimantan Selatan","display":"Rp13.150","id":"21"},{"value":"13200","name":"Maluku","display":"Rp13.200","id":"31"},{"value":"13200","name":"Papua Barat","display":"Rp13.200","id":"34"},{"value":"13250","name":"Sumatera Barat","display":"Rp13.250","id":"3"},{"value":"13300","name":"Kalimantan Barat","display":"Rp13.300","id":"20"},{"value":"13450","name":"DKI Jakarta","display":"Rp13.450","id":"13"},{"value":"13500","name":"Kalimantan Utara","display":"Rp13.500","id":"24"},{"value":"14100","name":"Kalimantan Tengah","display":"Rp14.100","id":"22"}]}
    console.log('table:', tableDB)
    let isiTable = '';
    tableDB.tableData.forEach(el => {
      isiTable += `<tr><td>${el.name}</td><td>${el.value}</td></tr>`;
    });
    
    $("#tableData").html(isiTable);

    var areas = {
      "ID-AC": {
        "tooltip": {
          "content": "<strong>Aceh</strong><br/><div style=\"font-size:1.3em\">Rp10.350</div><small>Avg: Rp11.800 / StdDev: Rp1.150</small><br/><small>Update : 30 Mar 22</small>"
        },
        "name": "Aceh",
        "date": "2022-03-30",
        "prov_id": "1",
        "value": 2
      },
      "ID-SU": {
        "tooltip": {
          "content": "<strong>Sumatera Utara</strong><br/><div style=\"font-size:1.3em\">Rp11.250</div><small>Avg: Rp11.800 / StdDev: Rp1.150</small><br/><small>Update : 30 Mar 22</small>"
        },
        "name": "Sumatera Utara",
        "date": "2022-03-30",
        "prov_id": "2",
        "value": 2
      },
      "ID-SB": {
        "tooltip": {
          "content": "<strong>Sumatera Barat</strong><br/><div style=\"font-size:1.3em\">Rp13.250</div><small>Avg: Rp11.800 / StdDev: Rp1.150</small><br/><small>Update : 30 Mar 22</small>"
        },
        "name": "Sumatera Barat",
        "date": "2022-03-30",
        "prov_id": "3",
        "value": 5
      },
      "ID-RI": {
        "tooltip": {
          "content": "<strong>Riau</strong><br/><div style=\"font-size:1.3em\">Rp12.200</div><small>Avg: Rp11.800 / StdDev: Rp1.150</small><br/><small>Update : 30 Mar 22</small>"
        },
        "name": "Riau",
        "date": "2022-03-30",
        "prov_id": "4",
        "value": 3
      },
      "ID-KR": {
        "tooltip": {
          "content": "<strong>Kepulauan Riau</strong><br/><div style=\"font-size:1.3em\">Rp13.100</div><small>Avg: Rp11.800 / StdDev: Rp1.150</small><br/><small>Update : 30 Mar 22</small>"
        },
        "name": "Kepulauan Riau",
        "date": "2022-03-30",
        "prov_id": "5",
        "value": 4
      },
      "ID-JA": {
        "tooltip": {
          "content": "<strong>Jambi</strong><br/><div style=\"font-size:1.3em\">Rp11.800</div><small>Avg: Rp11.800 / StdDev: Rp1.150</small><br/><small>Update : 30 Mar 22</small>"
        },
        "name": "Jambi",
        "date": "2022-03-30",
        "prov_id": "6",
        "value": 3
      },
      "ID-BE": {
        "tooltip": {
          "content": "<strong>Bengkulu</strong><br/><div style=\"font-size:1.3em\">Rp11.350</div><small>Avg: Rp11.800 / StdDev: Rp1.150</small><br/><small>Update : 30 Mar 22</small>"
        },
        "name": "Bengkulu",
        "date": "2022-03-30",
        "prov_id": "7",
        "value": 3
      },
      "ID-SS": {
        "tooltip": {
          "content": "<strong>Sumatera Selatan</strong><br/><div style=\"font-size:1.3em\">Rp11.300</div><small>Avg: Rp11.800 / StdDev: Rp1.150</small><br/><small>Update : 30 Mar 22</small>"
        },
        "name": "Sumatera Selatan",
        "date": "2022-03-30",
        "prov_id": "8",
        "value": 3
      },
      "ID-BB": {
        "tooltip": {
          "content": "<strong>Kepulauan Bangka Belitung</strong><br/><div style=\"font-size:1.3em\">Rp11.700</div><small>Avg: Rp11.800 / StdDev: Rp1.150</small><br/><small>Update : 30 Mar 22</small>"
        },
        "name": "Kepulauan Bangka Belitung",
        "date": "2022-03-30",
        "prov_id": "9",
        "value": 3
      },
      "ID-LA": {
        "tooltip": {
          "content": "<strong>Lampung</strong><br/><div style=\"font-size:1.3em\">Rp11.400</div><small>Avg: Rp11.800 / StdDev: Rp1.150</small><br/><small>Update : 30 Mar 22</small>"
        },
        "name": "Lampung",
        "date": "2022-03-30",
        "prov_id": "10",
        "value": 3
      },
      "ID-BT": {
        "tooltip": {
          "content": "<strong>Banten</strong><br/><div style=\"font-size:1.3em\">Rp11.400</div><small>Avg: Rp11.800 / StdDev: Rp1.150</small><br/><small>Update : 30 Mar 22</small>"
        },
        "name": "Banten",
        "date": "2022-03-30",
        "prov_id": "11",
        "value": 3
      },
      "ID-JB": {
        "tooltip": {
          "content": "<strong>Jawa Barat</strong><br/><div style=\"font-size:1.3em\">Rp11.350</div><small>Avg: Rp11.800 / StdDev: Rp1.150</small><br/><small>Update : 30 Mar 22</small>"
        },
        "name": "Jawa Barat",
        "date": "2022-03-30",
        "prov_id": "12",
        "value": 3
      },
      "ID-JK": {
        "tooltip": {
          "content": "<strong>DKI Jakarta</strong><br/><div style=\"font-size:1.3em\">Rp13.450</div><small>Avg: Rp11.800 / StdDev: Rp1.150</small><br/><small>Update : 30 Mar 22</small>"
        },
        "name": "DKI Jakarta",
        "date": "2022-03-30",
        "prov_id": "13",
        "value": 5
      },
      "ID-JT": {
        "tooltip": {
          "content": "<strong>Jawa Tengah</strong><br/><div style=\"font-size:1.3em\">Rp10.950</div><small>Avg: Rp11.800 / StdDev: Rp1.150</small><br/><small>Update : 30 Mar 22</small>"
        },
        "name": "Jawa Tengah",
        "date": "2022-03-30",
        "prov_id": "14",
        "value": 2
      },
      "ID-YO": {
        "tooltip": {
          "content": "<strong>DI Yogyakarta</strong><br/><div style=\"font-size:1.3em\">Rp11.250</div><small>Avg: Rp11.800 / StdDev: Rp1.150</small><br/><small>Update : 30 Mar 22</small>"
        },
        "name": "DI Yogyakarta",
        "date": "2022-03-30",
        "prov_id": "15",
        "value": 2
      },
      "ID-JI": {
        "tooltip": {
          "content": "<strong>Jawa Timur</strong><br/><div style=\"font-size:1.3em\">Rp10.600</div><small>Avg: Rp11.800 / StdDev: Rp1.150</small><br/><small>Update : 30 Mar 22</small>"
        },
        "name": "Jawa Timur",
        "date": "2022-03-30",
        "prov_id": "16",
        "value": 2
      },
      "ID-BA": {
        "tooltip": {
          "content": "<strong>Bali</strong><br/><div style=\"font-size:1.3em\">Rp11.650</div><small>Avg: Rp11.800 / StdDev: Rp1.150</small><br/><small>Update : 30 Mar 22</small>"
        },
        "name": "Bali",
        "date": "2022-03-30",
        "prov_id": "17",
        "value": 3
      },
      "ID-NB": {
        "tooltip": {
          "content": "<strong>Nusa Tenggara Barat</strong><br/><div style=\"font-size:1.3em\">Rp9.350</div><small>Avg: Rp11.800 / StdDev: Rp1.150</small><br/><small>Update : 30 Mar 22</small>"
        },
        "name": "Nusa Tenggara Barat",
        "date": "2022-03-30",
        "prov_id": "18",
        "value": 1
      },
      "ID-NT": {
        "tooltip": {
          "content": "<strong>Nusa Tenggara Timur</strong><br/><div style=\"font-size:1.3em\">Rp11.450</div><small>Avg: Rp11.800 / StdDev: Rp1.150</small><br/><small>Update : 30 Mar 22</small>"
        },
        "name": "Nusa Tenggara Timur",
        "date": "2022-03-30",
        "prov_id": "19",
        "value": 3
      },
      "ID-KB": {
        "tooltip": {
          "content": "<strong>Kalimantan Barat</strong><br/><div style=\"font-size:1.3em\">Rp13.300</div><small>Avg: Rp11.800 / StdDev: Rp1.150</small><br/><small>Update : 30 Mar 22</small>"
        },
        "name": "Kalimantan Barat",
        "date": "2022-03-30",
        "prov_id": "20",
        "value": 5
      },
      "ID-KS": {
        "tooltip": {
          "content": "<strong>Kalimantan Selatan</strong><br/><div style=\"font-size:1.3em\">Rp13.150</div><small>Avg: Rp11.800 / StdDev: Rp1.150</small><br/><small>Update : 30 Mar 22</small>"
        },
        "name": "Kalimantan Selatan",
        "date": "2022-03-30",
        "prov_id": "21",
        "value": 4
      },
      "ID-KT": {
        "tooltip": {
          "content": "<strong>Kalimantan Tengah</strong><br/><div style=\"font-size:1.3em\">Rp14.100</div><small>Avg: Rp11.800 / StdDev: Rp1.150</small><br/><small>Update : 30 Mar 22</small>"
        },
        "name": "Kalimantan Tengah",
        "date": "2022-03-30",
        "prov_id": "22",
        "value": 5
      },
      "ID-KI": {
        "tooltip": {
          "content": "<strong>Kalimantan Timur</strong><br/><div style=\"font-size:1.3em\">Rp12.300</div><small>Avg: Rp11.800 / StdDev: Rp1.150</small><br/><small>Update : 30 Mar 22</small>"
        },
        "name": "Kalimantan Timur",
        "date": "2022-03-30",
        "prov_id": "23",
        "value": 4
      },
      "ID-KU": {
        "tooltip": {
          "content": "<strong>Kalimantan Utara</strong><br/><div style=\"font-size:1.3em\">Rp13.500</div><small>Avg: Rp11.800 / StdDev: Rp1.150</small><br/><small>Update : 30 Mar 22</small>"
        },
        "name": "Kalimantan Utara",
        "date": "2022-03-30",
        "prov_id": "24",
        "value": 5
      },
      "ID-GO": {
        "tooltip": {
          "content": "<strong>Gorontalo</strong><br/><div style=\"font-size:1.3em\">Rp11.000</div><small>Avg: Rp11.800 / StdDev: Rp1.150</small><br/><small>Update : 30 Mar 22</small>"
        },
        "name": "Gorontalo",
        "date": "2022-03-30",
        "prov_id": "25",
        "value": 2
      },
      "ID-SN": {
        "tooltip": {
          "content": "<strong>Sulawesi Selatan</strong><br/><div style=\"font-size:1.3em\">Rp9.900</div><small>Avg: Rp11.800 / StdDev: Rp1.150</small><br/><small>Update : 30 Mar 22</small>"
        },
        "name": "Sulawesi Selatan",
        "date": "2022-03-30",
        "prov_id": "26",
        "value": 1
      },
      "ID-SG": {
        "tooltip": {
          "content": "<strong>Sulawesi Tenggara</strong><br/><div style=\"font-size:1.3em\">Rp11.050</div><small>Avg: Rp11.800 / StdDev: Rp1.150</small><br/><small>Update : 30 Mar 22</small>"
        },
        "name": "Sulawesi Tenggara",
        "date": "2022-03-30",
        "prov_id": "27",
        "value": 2
      },
      "ID-ST": {
        "tooltip": {
          "content": "<strong>Sulawesi Tengah</strong><br/><div style=\"font-size:1.3em\">Rp10.600</div><small>Avg: Rp11.800 / StdDev: Rp1.150</small><br/><small>Update : 30 Mar 22</small>"
        },
        "name": "Sulawesi Tengah",
        "date": "2022-03-30",
        "prov_id": "28",
        "value": 2
      },
      "ID-SA": {
        "tooltip": {
          "content": "<strong>Sulawesi Utara</strong><br/><div style=\"font-size:1.3em\">Rp11.450</div><small>Avg: Rp11.800 / StdDev: Rp1.150</small><br/><small>Update : 30 Mar 22</small>"
        },
        "name": "Sulawesi Utara",
        "date": "2022-03-30",
        "prov_id": "29",
        "value": 3
      },
      "ID-SR": {
        "tooltip": {
          "content": "<strong>Sulawesi Barat</strong><br/><div style=\"font-size:1.3em\">Rp10.000</div><small>Avg: Rp11.800 / StdDev: Rp1.150</small><br/><small>Update : 30 Mar 22</small>"
        },
        "name": "Sulawesi Barat",
        "date": "2022-03-30",
        "prov_id": "30",
        "value": 1
      },
      "ID-MA": {
        "tooltip": {
          "content": "<strong>Maluku</strong><br/><div style=\"font-size:1.3em\">Rp13.200</div><small>Avg: Rp11.800 / StdDev: Rp1.150</small><br/><small>Update : 30 Mar 22</small>"
        },
        "name": "Maluku",
        "date": "2022-03-30",
        "prov_id": "31",
        "value": 5
      },
      "ID-MU": {
        "tooltip": {
          "content": "<strong>Maluku Utara</strong><br/><div style=\"font-size:1.3em\">Rp12.650</div><small>Avg: Rp11.800 / StdDev: Rp1.150</small><br/><small>Update : 30 Mar 22</small>"
        },
        "name": "Maluku Utara",
        "date": "2022-03-30",
        "prov_id": "32",
        "value": 4
      },
      "ID-PA": {
        "tooltip": {
          "content": "<strong>Papua</strong><br/><div style=\"font-size:1.3em\">Rp12.300</div><small>Avg: Rp11.800 / StdDev: Rp1.150</small><br/><small>Update : 30 Mar 22</small>"
        },
        "name": "Papua",
        "date": "2022-03-30",
        "prov_id": "33",
        "value": 4
      },
      "ID-PB": {
        "tooltip": {
          "content": "<strong>Papua Barat</strong><br/><div style=\"font-size:1.3em\">Rp13.200</div><small>Avg: Rp11.800 / StdDev: Rp1.150</small><br/><small>Update : 30 Mar 22</small>"
        },
        "name": "Papua Barat",
        "date": "2022-03-30",
        "prov_id": "34",
        "value": 5
      }
    }
    // console.log(areas)

    var placeholder = {
      legend: {
        area: {
          // display: false,
          title: "Beras Berkualitas Bawah II per kg",
          mode: "horizontal",
          marginLeft: 0,
          marginLeftTitle: 0,
          marginLeftLabel: 0,
          titleAttrs: {
            "font-family": "RobotoCondensed, sans-serif",
            "font-size": "19pt",
            "font-weight": "bold",
            "fill": "#fff"
          }

          ,
          slices: [{
            min: 1,
            max: 1,
            label: '',
            attrs: {
              fill: "#1C8246"
            },
            attrsHover: {
              fill: "#1C8246",
              stroke: "#146034",
              "stroke-width": 3
            },
            legendSpecificAttrs: {
              "stroke-width": 0,
              height: 10,
              width: 100
            }
          }, {
            min: 2,
            max: 2,
            label: '',
            attrs: {
              fill: "#27AE65"
            },
            attrsHover: {
              fill: "#27AE65",
              stroke: "#227A46",
              "stroke-width": 3
            },
            legendSpecificAttrs: {
              "stroke-width": 0,
              height: 10,
              width: 100
            }
          }, {
            min: 3,
            max: 3,
            label: ' ',
            attrs: {
              fill: "#8CB938"
            },
            attrsHover: {
              fill: "#8CB938",
              stroke: "#789B31",
              "stroke-width": 3
            },
            legendSpecificAttrs: {
              "stroke-width": 0,
              height: 10,
              width: 100
            }
          }, {
            min: 4,
            max: 4,
            label: ' ',
            attrs: {
              fill: "#C0392B"
            },
            attrsHover: {
              fill: "#C0392B",
              stroke: "#8E2C23",
              "stroke-width": 3
            },
            legendSpecificAttrs: {
              "stroke-width": 0,
              height: 10,
              width: 100
            }
          }, {
            min: 5,
            max: 5,
            label: ' ',
            attrs: {
              fill: "#7C1D15"
            },
            attrsHover: {
              fill: "#7C1D15",
              stroke: "#591B16",
              "stroke-width": 3
            },
            legendSpecificAttrs: {
              "stroke-width": 0,
              height: 10,
              width: 100
            }
          }]
        }
      },
      areas: {
        "NONE": {
          value: -1,
          attrs: {
            fill: "#2D6D9B"
          },
          attrsHover: "#2D6D9B"
        }
      }
    }

    $(".mapcontainer").mapael({
      map: {
        name: "indonesia",
        defaultArea: {
          eventHandlers: {
            click: function(e, id, mapElem, textElem, elemOptions) {
              // console.log('id:', id)
              // console.log('mapElem:', mapElem)
              // console.log('textElem:', textElem)
              // console.log('elemOptions:', elemOptions)
              var area = areas[id];
              if (typeof(area) != "undefined") {
                // $('#exampleModal .modal-title').html(area.name + ' - ' + mapData.title);
                $('#exampleModalLabel').html(area.name);
                $('#containerModal').html(area.tooltip.content);
                $('#exampleModal').modal('show');
                // $('#contentLoad').show();
                // getProvinceDetail(area.prov_id, mapData.commodity_id, mapData.price_type_id, area.date, mapData.layout);
              }
              console.log('areaNya:', area)
            }
          },
          attrs: {
            fill: "#D7EDAD",
            stroke: "#2D6D9B",
            "stroke-width": 1
          },
          attrsHover: {
            fill: "#D7EDAD"
          },
          text: {
            attrs: {
              fill: "#505444"
            },
            attrsHover: {
              fill: "#000"
            }
          }

        },
      },
      legend: placeholder.legend,
      areas: placeholder.areas,
    });

    $(".mapcontainer").trigger('update', [{
      mapOptions: {
        areas: areas
      },
      animDuration: 300,
    }])

  });
</script>

<script type="text/javascript">
  $(function() {
    var chart1 = c3.generate({
      size: 200,
      bindto: '#chart1',
      data: {
        // iris data from R
        columns: [
          ['data1', 30],
          ['data2', 120],
          ['data3', 30],
          ['data4', 120],
          ['data5', 30],
          ['data6', 120],
          ['data7', 30],
          ['data8', 120],
          ['data9', 30],
          ['data10', 120],
        ],
        type: 'pie',
        onclick: function(d, i) {
          console.log("onclick", d, i, 'ares', areas);
        },
        onmouseover: function(d, i) {
          console.log("onmouseover", d, i);
        },
        onmouseout: function(d, i) {
          console.log("onmouseout", d, i);
        }
      }
    });

    var chart2 = c3.generate({
      bindto: '#chart2',
      data: {
        // iris data from R
        columns: [
          ['data1', 30],
          ['data2', 300],
          ['data3', 56],
          ['data4', 120],
          ['data5', 23],
          ['data6', 120],
          ['data7', 88],
          ['data8', 120],
          ['data9', 90],
          ['data10', 120],
        ],
        type: 'pie',
        onclick: function(d, i) {
          console.log("onclick", d, i);
        },
        onmouseover: function(d, i) {
          console.log("onmouseover", d, i);
        },
        onmouseout: function(d, i) {
          console.log("onmouseout", d, i);
        }
      }
    });

    var chart3 = c3.generate({
      bindto: '#chart3',
      data: {
        // iris data from R
        columns: [
          ['data1', 55],
          ['data2', 120],
          ['data3', 66],
          ['data4', 77],
          ['data5', 30],
          ['data6', 120],
          ['data7', 72],
          ['data8', 120],
          ['data9', 30],
          ['data10', 120],
        ],
        type: 'pie',
        onclick: function(d, i) {
          console.log("onclick", d, i);
        },
        onmouseover: function(d, i) {
          console.log("onmouseover", d, i);
        },
        onmouseout: function(d, i) {
          console.log("onmouseout", d, i);
        }
      }
    });

    var chart4 = c3.generate({
      bindto: '#chart4',
      data: {
        // iris data from R
        columns: [
          ['data1', 23],
          ['data2', 120],
          ['data3', 46],
          ['data4', 120],
          ['data5', 71],
          ['data6', 120],
          ['data7', 22],
          ['data8', 120],
          ['data9', 30],
          ['data10', 120],
        ],
        type: 'pie',
        onclick: function(d, i) {
          console.log("onclick", d, i);
        },
        onmouseover: function(d, i) {
          console.log("onmouseover", d, i);
        },
        onmouseout: function(d, i) {
          console.log("onmouseout", d, i);
        }
      }
    });
  });
</script>