<tr x-data="{ modalIsOpen : false }">
    <td class="">{{ $quartier->name }}</td>
    <td class="">{{ $quartier->pachalik->name }}</td>


    @if(getCrudConfig('Quartier')->delete or getCrudConfig('Quartier')->update)
        <td>

            @if(getCrudConfig('Quartier')->update && hasPermission(getRouteName().'.quartier.update', 1, 1, $quartier))
                <a href="@route(getRouteName().'.quartier.update', $quartier->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('Quartier')->delete && hasPermission(getRouteName().'.quartier.delete', 1, 1, $quartier))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('Quartier') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('Quartier') ]) }}</p>
                        <div class="mt-5 d-flex justify-content-between">
                            <a wire:click.prevent="delete" class="text-white btn btn-success shadow">{{ __('Yes, Delete it.') }}</a>
                            <a @click.prevent="modalIsOpen = false" class="text-white btn btn-danger shadow">{{ __('No, Cancel it.') }}</a>
                        </div>
                    </div>
                </div>
            @endif
        </td>
    @endif
</tr>
