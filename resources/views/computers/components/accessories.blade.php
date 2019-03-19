<div class="modal is-active">
    <div class="modal-background"></div>
    
    <div class="modal-card">
        <header class="modal-card-head">
            <p class="modal-card-title">{{ ucwords($accessory) }}</p>
            <a class="delete" href="{{ route('computers.show', $computer) }}" aria-label="close"></a>
        </header><!-- modal-card-head -->
            
        <section class="modal-card-body">
            @include ('shared.bulma-status')

            <div class="box">
                <form method="post" @submit="submit" id="attach-form" action="{{ route("computers.$accessory.attach", $computer) }}">
                    @csrf
                    @method ('patch')

                    <label class="label" for="{{ $accessory }}">Select {{ ucwords($accessory) }}:</label>
                    
                    <div class="field is-grouped">
                        <div class="control is-expanded">
                            <div class="select is-fullwidth {{ $errors->has($accessory) ? ' is-danger' : '' }}">
                                <select id="{{ $accessory }}" name="{{ $accessory }}" autofocus required>
                                    @foreach ($items as $item)
                                        <option value="{{ $item->id }}" {{ $item->computer ? 'disabled' : '' }}>
                                            {{ $item->{ $accessory . 'Name'  } }}
                                        </option>
                                    @endforeach{{-- $Items as $item --}}
                                </select>
                            </div><!-- select -->
                        </div><!-- control -->

                        <div class="control">
                            <button type="submit" class="button is-link" :class="{ 'is-loading': isLoading }">Attach</button>
                        </div>{{-- control --}}
                    </div><!-- field -->

                    <p class="help is-danger">{{ $errors->first($accessory) }}</p>
                </form>
            </div>{{-- box --}}

            <div class="box">
                <form method="post" @submit="submit" action="{{ route("computers.$accessory.store", $computer) }}">
                    @csrf

                    <label class="label" for="{{ $accessory . 'Name' }}">Add New {{ ucwords($accessory) }}:</label>

                    <div class="field is-grouped">
                        <div class="control is-expanded has-icons-right">
                            <input type="text" id="{{ $accessory . 'Name' }}" name="{{ $accessory . 'Name' }}" placeholder="{{ ucwords($accessory) }} Name"
                                class="input {{ $errors->has( $accessory . 'Name') ? ' is-danger' : '' }}"
                                value="{{ old( $accessory . 'Name') }}" required>
                    
                            <span class="icon is-small is-right">
                                <i class="fas {{ "fa-$icon" }}"></i>
                            </span><!-- icon -->
                        </div><!-- control -->

                        <div class="control">
                            <button class="button is-info" :class="{ 'is-loading': isLoading }">Record</button>
                        </div>{{-- control --}}
                    </div><!-- field -->

                    <p class="help is-danger">{{ $errors->first( $accessory . 'Name') }}</p>
                </form>
            </div>{{-- box --}}
        </section><!-- modal-card-body -->
        
        <footer class="modal-card-foot">
            <my-link class="button" href="{{ route('computers.show', $computer) }}">Go Back</my-link>
        </footer><!-- modal-card-foot -->
    </div><!-- modal-card -->
</div><!-- modal -->