<div>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Community Wall</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Submit
                                        Statement</a>
                                <li class="nav-item"><a class="nav-link " href="#activity"
                                        data-toggle="tab">FLokal Wall</a></li>

                                </li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active " id="settings">
                                    <form wire:submit.prevent="submitFeedback" class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input wire:model.defer="data.name" type="name" class="form-control"
                                                    id="name" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="message" class="col-sm-2 col-form-label">Message*</label>
                                            <div class="col-sm-10">
                                                <textarea wire:model.defer="data.message" class="form-control" id="message" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="image_path" class="col-sm-2 col-form-label">Image</label>
                                            <div class="col-sm-10">
                                                <div x-data="{ isUploading: false, progress: 0 }"
                                                    x-on:livewire-upload-start="isUploading = true"
                                                    x-on:livewire-upload-finish="isUploading = false"
                                                    x-on:livewire-upload-error="isUploading = false"
                                                    x-on:livewire-upload-progress="progress = $event.detail.progress">
                                                    <input wire:model="data.image_path" name="image_path" type="file"
                                                        class="form-control" id="image_path">
                                                    <div x-show="isUploading">
                                                        <progress max="100"
                                                            x-bind:value="progress"></progress>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>



                                <div class=" tab-pane" id="activity">

                                    @forelse($feedbacks as $key => $value)
                                        <div class="post">
                                            <div class="user-block">
                                                <img class="img-circle img-bordered-sm"
                                                    src="{{ Storage::disk('images')->url('guest.png') }}"
                                                    alt="user image">
                                                <span class="username">
                                                    <a href="#">{{ $value->name }}</a>
                                                </span>
                                                @if ($value->created_at instanceof \Carbon\Carbon)
                                                    <span
                                                        class="description">{{ $value->created_at->diffForHumans() }}</span>
                                                @endif

                                            </div>
                                            @if ($value->image_path)
                                                <img src="{{ Storage::disk('feedback')->url($value->image_path) }}"
                                                    alt="Image Description" width="300" height="200">
                                            @endif
                                            <p class="mt-2">{{ $value->message }}</p>
                                        </div>
                                    @empty
                                    @endforelse


                                </div>


                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
</div>
