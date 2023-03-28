@extends("layouts.global")

@section("title") Testing @endsection

@section("content")


<div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h3 class="text-center"><a href="https://santrikoding.com">Testing Relationship Area</a></h3>
                <h5 class="text-center my-4">Laravel Eloquent Relationship : Area & Aging</h5>
                <p>Periode : {{ $periodes->month }}</p>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Area</th>
                            <th>Project</th>
                            <th>Target</th>
                            <th>Jumlah Site</th>
                            <th>Bobot</th>
                            <th>Tercapai</th>
                            <th>Persentase</th>
                            <th>Final Achiev</th>
                        </tr>
                    </thead>
                        <?php
                            $no = 1;
                            $jumlah_site = 0;
                            $jumlah_bobot = 0;
                            $total_achiev = 0;
                        ?>
                    <tbody>
                            <tr>
                                <td>{{ $areas->area }}</td>
                                <td>@foreach ($areas->aging as $ag)
                                    <div class="card shadow-sm mb-2">
                                            <div class="card-body">
                                            {{ $ag->project }}
                                            </div>
                                    </div>
                                    @endforeach</td>
                                <td>@foreach ($areas->aging as $ag)
                                        <div class="card shadow-sm mb-2">
                                            <div class="card-body">
                                            {{ $ag->target }}
                                            </div>
                                        </div>
                                    @endforeach</td>
                                <td>@foreach ($areas->aging as $ag)
                                        <div class="card shadow-sm mb-2">
                                            <div class="card-body">
                                            {{ $ag->jumlah_site }}
                                            </div>
                                        </div>
                                    @endforeach</td>
                                <td>@foreach ($areas->aging as $ag)
                                        <div class="card shadow-sm mb-2">
                                            <div class="card-body">
                                            {{ $ag->bobot }}
                                            </div>
                                        </div>
                                    @endforeach</td>
                                <td>@foreach ($areas->aging as $ag)
                                        <div class="card shadow-sm mb-2">
                                            <div class="card-body">
                                            {{ $ag->tercapai }}
                                            </div>
                                        </div>
                                    @endforeach</td>
                                <td>@foreach ($areas->aging as $ag)
                                        <div class="card shadow-sm mb-2">
                                            <div class="card-body">
                                            {{ $ag->persentase }}
                                            </div>
                                        </div>
                                    @endforeach</td>
                                <td>@foreach ($areas->aging as $ag)
                                        <div class="card shadow-sm mb-2">
                                            <div class="card-body">
                                            {{ $ag->final }}
                                            </div>
                                        </div>
                                    @endforeach</td>
                            </tr>
                            @foreach ($areas->aging as $ag)
                                <?php $jumlah_site += $ag['jumlah_site']; ?>
                                <?php $jumlah_bobot += $ag['bobot']; ?>

                                <?php $total_achiev += $ag['final']; ?>
                            @endforeach

                            <tr>
                                <th colspan="3">Total</th>
                                <th><?php echo ("$jumlah_site"); ?></th>
                                <th><?php echo ("$jumlah_bobot%"); ?></th>
                                <th colspan="2"></th>
                                <th><?php echo ("$total_achiev%"); ?></th>
                            </tr>
                    </tbody>
                </table>
            
            </div>
        </div>
    </div>


<div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h3 class="text-center"><a href="https://santrikoding.com">Testing Relationship Area</a></h3>
                <h5 class="text-center my-4">Laravel Eloquent Relationship : Area & Aging</h5>
                <p>Periode : {{ $periodes->month }}</p>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Area</th>
                            <th>Project</th>
                            <th>Target</th>
                            <th>Jumlah Site</th>
                            <th>Bobot</th>
                            <th>Tercapai</th>
                            <th>Persentase</th>
                            <th>Final Achiev</th>
                        </tr>
                    </thead>
                        <?php
                            $no = 1;
                            $jumlah_site = 0;
                            $jumlah_bobot = 0;
                            $total_achiev = 0;
                        ?>
                    <tbody>
                            <tr>
                                <td>{{ $area2->area }}</td>
                                <td>@foreach ($area2->aging as $ag)
                                    <div class="card shadow-sm mb-2">
                                            <div class="card-body">
                                            {{ $ag->project }}
                                            </div>
                                        </div>
                                    @endforeach</td>
                                <td>@foreach ($area2->aging as $ag)
                                        <div class="card shadow-sm mb-2">
                                            <div class="card-body">
                                            {{ $ag->target }}
                                            </div>
                                        </div>
                                    @endforeach</td>
                                <td>@foreach ($area2->aging as $ag)
                                        <div class="card shadow-sm mb-2">
                                            <div class="card-body">
                                            {{ $ag->jumlah_site }}
                                            </div>
                                        </div>
                                    @endforeach</td>
                                <td>@foreach ($area2->aging as $ag)
                                        <div class="card shadow-sm mb-2">
                                            <div class="card-body">
                                            {{ $ag->bobot }}
                                            </div>
                                        </div>
                                    @endforeach</td>
                                <td>@foreach ($area2->aging as $ag)
                                        <div class="card shadow-sm mb-2">
                                            <div class="card-body">
                                            {{ $ag->tercapai }}
                                            </div>
                                        </div>
                                    @endforeach</td>
                                <td>@foreach ($area2->aging as $ag)
                                        <div class="card shadow-sm mb-2">
                                            <div class="card-body">
                                            {{ $ag->persentase }}
                                            </div>
                                        </div>
                                    @endforeach</td>
                                <td>@foreach ($area2->aging as $ag)
                                        <div class="card shadow-sm mb-2">
                                            <div class="card-body">
                                            {{ $ag->final }}
                                            </div>
                                        </div>
                                    @endforeach</td>
                            </tr>
                            @foreach ($area2->aging as $ag)
                                <?php $jumlah_site += $ag['jumlah_site']; ?>
                                <?php $jumlah_bobot += $ag['bobot']; ?>

                                <?php $total_achiev += $ag['final']; ?>
                            @endforeach
                            <tr>
                                <th colspan="3">Total</th>
                                <th><?php echo ("$jumlah_site"); ?></th>
                                <th><?php echo ("$jumlah_bobot%"); ?></th>
                                <th colspan="2"></th>
                                <th><?php echo ("$total_achiev%"); ?></th>
                            </tr>
                        
                    </tbody>
                </table>
            
            </div>
        </div>
    </div>



@endsection