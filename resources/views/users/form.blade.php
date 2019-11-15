

                                @csrf

                                <input autocomplete="off" class='form-control' name='name' placeholder='Name' value="{{ old('name') ?? $user->name   }}">
                                <input autocomplete="off" class='form-control' name='email' placeholder='Email' value="{{ old('email') ?? $user->email  }}">
                                {{-- <input class='form-control' name='email' placeholder='Email'> --}}
                                <select name='status' class='form-control'>
                                    <option  disabled>Status</option>

                                    @foreach ($user->getStatus() as $statusKey => $statusValue)
                                        <option value='{{ $statusKey }}' {{ $statusValue == $user->status ? 'selected' : '' }}>
                                            {{ $statusValue }}
                                        </option>
                                    @endforeach


                                </select>

                                <select name='company_id' class='form-control'>

                                    @foreach ($companies as $company)
                                        <option {{ ($user->company->id ?? '') == $company->id ? 'selected' : '' }}

                                         value='{{$company->id}}'> {{$company->name}} </option>
                                    @endforeach

                                </select>
