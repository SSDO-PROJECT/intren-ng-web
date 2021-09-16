<x-app-layout>
    <x-slot name="header_content">
        <h1>Dashboard</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        </div>
    </x-slot>

    <div class="row">
        <div class="col-xl-12 col-md-12" style="margin-bottom: 10px">
            <div class="card-body shadow">
                {!! $chart->container() !!}
            </div>
        </div>
        <div class="col-xl-12 col-md-12" style="margin-bottom: 10px">
            <div class="card-body shadow text-center">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                    Total Agents Total AgentsTotal AgentsTotal AgentsTotal AgentsTotal AgentsTotal AgentsTotal AgentsTotal AgentsTotal AgentsTotal AgentsTotal AgentsTotal Agents
                </div>
            </div>
        </div>

    </div>

    <script src="{{ $chart->cdn() }}"></script>

    {{ $chart->script() }}
</x-app-layout>

