<x-pages.form-container>
    <form wire:submit.prevent="submit">
        <x-templates.form-wrapper>
            <x-organisms.form-col-group>
                <x-molecules.input-area model="role.name" id="role-name" type="text" label="Name">
                </x-molecules.input-area>
            </x-organisms.form-col-group>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                @foreach ($this->listsForFields['permissions'] as $key=>$permission_list)
                <div class="relative flex flex-col h-full w-full min-w-0 break-words bg-gray-100 border-0 shadow-soft-xl rounded-2xl bg-clip-border mr-1">
                    <div class="flex p-4 pb-0 mb-0 bg-gray-100 border-b-0 rounded-t-2xl">
                        <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">{{ucfirst($key)}}</h6>
                        <input id="follow" class="
                        mt-0.54 rounded-10 duration-250 ease-soft-in-out after:rounded-circle after:shadow-soft-2xl after:duration-250 checked:after:translate-x-5.25 h-5-em relative float-left ml-auto w-10 cursor-pointer appearance-none border border-solid border-gray-200
                        bg-indigo-500/10 
                        bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px
                         after:bg-gray-100 
                         after:content-[''] checked:border-slate-800/95 checked:bg-slate-800/95 checked:bg-none checked:bg-right" type="checkbox" " wire:click=" toggleGroupPermissions('{{ $key }}')" />
                        <!-- <input id=" answer" class="
                        mt-0.54 rounded-10 duration-250 ease-soft-in-out after:rounded-circle after:shadow-soft-2xl after:duration-250 checked:after:translate-x-5.25 h-5-em relative float-left ml-auto w-10 cursor-pointer appearance-none  border border-solid border-gray-200
                        bg-slate-800/10 
                        bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px
                         after:bg-white 
                         after:content-[''] checked:border-slate-800/95 checked:bg-slate-800/95 checked:bg-none checked:bg-right" type="checkbox" /> -->
                    </div>
                    <div class=" flex-auto p-4">
                        <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                            @foreach ($permission_list as $permission)
                            <li class="block px-0 py-2 bg-gray-100 border-0 rounded-t-lg text-inherit">
                                <div class="min-h-6 mb-0.5 block pl-0">
                                    <x-checkbox value="{{ $permission['id'] }}" wire:model="permissions" />
                                    <label for=" follow" class="mb-0 ml-4 overflow-hidden font-normal cursor-pointer select-none text-size-sm text-ellipsis whitespace-nowrap text-slate-500" for="flexSwitchCheckDefault">{{$permission['name']}}</label>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>

        </x-templates.form-wrapper>
        <x-atoms.btn-submit>
            Save changes
        </x-atoms.btn-submit>
    </form>
</x-pages.form-container>
@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script src="vendor/select2/dist/js/select2.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#select').select2();
    });
</script>
@endpush