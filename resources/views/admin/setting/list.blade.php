@extends('admin.layout')
@push('css')
@endpush
@push('js')
@endpush
@section('title')
@endsection
@section('content')
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-xl-10">

                <div class="row">

                    <div class="col-xl-9">

                        <div id="general" class="mb-5">
                            <h4><i class="far fa-user fa-fw"></i> General</h4>
                            <p>View and update your general account information and settings.</p>
                            <div class="card">
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item d-flex align-items-center">
                                        <div class="flex-fill">
                                            <div>Name</div>
                                            <div class="text-gray-700">Sean Ngu</div>
                                        </div>
                                        <div class="width-100">
                                            <a href="#modalEdit" data-toggle="modal"
                                               class="btn btn-default width-100">Edit</a>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex align-items-center">
                                        <div class="flex-fill">
                                            <div>Username</div>
                                            <div class="text-gray-700">@seantheme</div>
                                        </div>
                                        <div>
                                            <a href="#modalEdit" data-toggle="modal"
                                               class="btn btn-default width-100">Edit</a>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex align-items-center">
                                        <div class="flex-fill">
                                            <div>Phone</div>
                                            <div class="text-gray-700">+1-202-555-0183</div>
                                        </div>
                                        <div>
                                            <a href="#modalEdit" data-toggle="modal"
                                               class="btn btn-default width-100">Edit</a>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex align-items-center">
                                        <div class="flex-fill">
                                            <div>Email address</div>
                                            <div class="text-gray-700"><a
                                                    href="https://seantheme.com/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="60131510100f12142013141504090f4e030f0d">[email&#160;protected]</a>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#modalEdit" data-toggle="modal"
                                               class="btn btn-default width-100">Edit</a>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex align-items-center">
                                        <div class="flex-fill">
                                            <div>Password</div>
                                        </div>
                                        <div>
                                            <a href="#modalEdit" data-toggle="modal"
                                               class="btn btn-default width-100">Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div id="notifications" class="mb-5">
                            <h4><i class="far fa-bell fa-fw"></i> Notifications</h4>
                            <p>Enable or disable what notifications you want to receive.</p>
                            <div class="card">
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item d-flex align-items-center">
                                        <div class="flex-fill">
                                            <div>Comments</div>
                                            <div class="text-gray-700 d-flex align-items-center">
                                                <i class="fa fa-circle fs-8px fa-fw text-success mr-1"></i>
                                                Enabled (Push, SMS)
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#modalEdit" data-toggle="modal"
                                               class="btn btn-default width-100">Edit</a>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex align-items-center">
                                        <div class="flex-fill">
                                            <div>Tags</div>
                                            <div class="text-gray-700 d-flex align-items-center">
                                                <i class="fa fa-circle fs-8px fa-fw text-muted mr-1"></i>
                                                Disabled
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#modalEdit" data-toggle="modal"
                                               class="btn btn-default width-100">Edit</a>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex align-items-center">
                                        <div class="flex-fill">
                                            <div>Reminders</div>
                                            <div class="text-gray-700 d-flex align-items-center">
                                                <i class="fa fa-circle fs-8px fa-fw text-success mr-1"></i>
                                                Enabled (Push, Email, SMS)
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#modalEdit" data-toggle="modal"
                                               class="btn btn-default width-100">Edit</a>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex align-items-center">
                                        <div class="flex-fill">
                                            <div>New orders</div>
                                            <div class="text-gray-700 d-flex align-items-center">
                                                <i class="fa fa-circle fs-8px fa-fw text-success mr-1"></i>
                                                Enabled (Push, Email, SMS)
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#modalEdit" data-toggle="modal"
                                               class="btn btn-default width-100">Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div id="privacyAndSecurity" class="mb-5">
                            <h4><i class="far fa-copyright fa-fw"></i> Privacy and security</h4>
                            <p>Limit the account visibility and the security settings for your website.</p>
                            <div class="card">
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item d-flex align-items-center">
                                        <div class="flex-fill">
                                            <div>Who can see your future posts?</div>
                                            <div class="text-gray-700 d-flex align-items-center">
                                                Friends only
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#modalEdit" data-toggle="modal"
                                               class="btn btn-default width-100">Edit</a>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex align-items-center">
                                        <div class="flex-fill">
                                            <div>Photo tagging</div>
                                            <div class="text-gray-700 d-flex align-items-center">
                                                <i class="fa fa-circle fs-8px fa-fw text-success mr-1"></i>
                                                Enabled
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#modalEdit" data-toggle="modal"
                                               class="btn btn-default width-100">Edit</a>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex align-items-center">
                                        <div class="flex-fill">
                                            <div>Location information</div>
                                            <div class="text-gray-700 d-flex align-items-center">
                                                <i class="fa fa-circle fs-8px fa-fw text-muted mr-1"></i>
                                                Disabled
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#modalEdit" data-toggle="modal"
                                               class="btn btn-default width-100">Edit</a>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex align-items-center">
                                        <div class="flex-fill">
                                            <div>Firewall</div>
                                            <div class="text-gray-700 d-block d-xl-flex align-items-center">
                                                <div class="d-flex align-items-center"><i
                                                        class="fa fa-circle fs-8px fa-fw text-muted mr-1"></i>
                                                    Disabled</div>
                                                <span
                                                    class="bg-warning-transparent-1 text-warning ml-xl-3 mt-1 d-inline-block mt-xl-0 px-1 rounded-sm">
															<i
                                                                class="fa fa-exclamation-circle text-warning fs-12px mr-1"></i>
															<span class="text-warning">Please enable the firewall for
																your website</span>
														</span>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#modalEdit" data-toggle="modal"
                                               class="btn btn-default width-100">Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div id="payment" class="mb-5">
                            <h4><i class="far fa-credit-card fa-fw"></i> Payment</h4>
                            <p>Manage your website payment provider</p>
                            <div class="card">
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item d-flex align-items-center">
                                        <div class="flex-fill">
                                            <div>Allowed payment method</div>
                                            <div class="text-gray-700">
                                                Paypal, Credit Card, Apple Pay, Amazon Pay, Google Wallet,
                                                Alipay, Wechatpay
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#modalEdit" data-toggle="modal"
                                               class="btn btn-default width-100">Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div id="shipping" class="mb-5">
                            <h4><i class="far fa-paper-plane fa-fw"></i> Shipping</h4>
                            <p>Allowed shipping area and zone setting</p>
                            <div class="card">
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item d-flex align-items-center">
                                        <div class="flex-fill">
                                            <div>Allowed shipping method</div>
                                            <div class="text-gray-700">
                                                Local, Domestic
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#modalEdit" data-toggle="modal"
                                               class="btn btn-default width-100">Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div id="mediaAndFiles" class="mb-5">
                            <h4><i class="far fa-images fa-fw"></i> Media and Files</h4>
                            <p>Allowed files and media format upload setting</p>
                            <div class="card">
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item d-flex align-items-center">
                                        <div class="flex-fill">
                                            <div>Allowed files and media format</div>
                                            <div class="text-gray-700">
                                                .png, .jpg, .gif, .mp4
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#modalEdit" data-toggle="modal"
                                               class="btn btn-default width-100">Edit</a>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex align-items-center">
                                        <div class="flex-fill">
                                            <div>Media and files cdn</div>
                                            <div class="text-gray-700 d-flex align-items-center">
                                                <i class="fa fa-circle fs-8px fa-fw text-muted mr-1"></i>
                                                Disabled
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#modalEdit" data-toggle="modal"
                                               class="btn btn-default width-100">Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div id="languages" class="mb-5">
                            <h4><i class="fa fa-language fa-fw"></i> Languages</h4>
                            <p>Language font support and auto translation enabled</p>
                            <div class="card">
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item d-flex align-items-center">
                                        <div class="flex-fill">
                                            <div>Language enabled</div>
                                            <div class="text-gray-700">
                                                English (default), Chinese, France, Portuguese, Japense
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#modalEdit" data-toggle="modal"
                                               class="btn btn-default width-100">Edit</a>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex align-items-center">
                                        <div class="flex-fill">
                                            <div>Auto translation</div>
                                            <div class="text-gray-700 d-flex align-items-center">
                                                <i class="fa fa-circle fs-8px fa-fw text-success mr-1"></i>
                                                Enabled
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#modalEdit" data-toggle="modal"
                                               class="btn btn-default width-100">Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div id="system" class="mb-5">
                            <h4><i class="far fa-hdd fa-fw"></i> System</h4>
                            <p>System storage, bandwidth and database setting</p>
                            <div class="card">
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item d-flex align-items-center">
                                        <div class="flex-fill">
                                            <div>Web storage</div>
                                            <div class="text-gray-700">
                                                40.8gb / 100gb
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#modalEdit" data-toggle="modal"
                                               class="btn btn-default width-100">Manage</a>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex align-items-center">
                                        <div class="flex-fill">
                                            <div>Monthly bandwidth</div>
                                            <div class="text-gray-700">
                                                Unlimited
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex align-items-center">
                                        <div class="flex-fill">
                                            <div>Database</div>
                                            <div class="text-gray-700">
                                                MySQL version 8.0.19
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#modalEdit" data-toggle="modal"
                                               class="btn btn-default width-100 disabled">Update</a>
                                        </div>
                                    </div>
                                    <div class="list-group-item d-flex align-items-center">
                                        <div class="flex-fill">
                                            <div>Platform</div>
                                            <div class="text-gray-700">
                                                PHP 7.4.4, NGINX 1.17.0
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#modalEdit" data-toggle="modal"
                                               class="btn btn-success width-100">Update</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div id="resetSettings" class="mb-5">
                            <h4><i class="fa fa-redo fa-fw"></i> Reset settings</h4>
                            <p>Reset all website setting to factory default setting.</p>
                            <div class="card">
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item d-flex align-items-center">
                                        <div class="flex-fill">
                                            <div>Reset Settings</div>
                                            <div class="text-gray-700">
                                                This action will clear and reset all the current website
                                                setting.
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#" class="btn btn-default width-100">Reset</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="col-xl-3">

                        <nav id="sidebar-bootstrap" class="navbar navbar-sticky d-none d-xl-block">
                            <nav class="nav">
                                <a class="nav-link" href="#general" data-toggle="scroll-to">General</a>
                                <a class="nav-link" href="#notifications"
                                   data-toggle="scroll-to">Notifications</a>
                                <a class="nav-link" href="#privacyAndSecurity" data-toggle="scroll-to">Privacy
                                    and security</a>
                                <a class="nav-link" href="#payment" data-toggle="scroll-to">Payment</a>
                                <a class="nav-link" href="#shipping" data-toggle="scroll-to">Shipping</a>
                                <a class="nav-link" href="#mediaAndFiles" data-toggle="scroll-to">Media and
                                    Files</a>
                                <a class="nav-link" href="#languages" data-toggle="scroll-to">Languages</a>
                                <a class="nav-link" href="#system" data-toggle="scroll-to">System</a>
                                <a class="nav-link" href="#resetSettings" data-toggle="scroll-to">Reset
                                    settings</a>
                            </nav>
                        </nav>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="modal fade" id="modalEdit">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit name</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <div class="row row-space-10">
                            <div class="col-4">
                                <input class="form-control" placeholder="First" value="Sean" />
                            </div>
                            <div class="col-4">
                                <input class="form-control" placeholder="Middle" value="" />
                            </div>
                            <div class="col-4">
                                <input class="form-control" placeholder="Last" value="Ngu" />
                            </div>
                        </div>
                    </div>
                    <div class="alert alert-muted">
                        <b>Please note:</b>
                        If you change your name, you can't change it again for 60 days.
                        Don't add any unusual capitalization, punctuation, characters or random words.
                        <a href="#" class="alert-link">Learn more.</a>
                    </div>
                    <div class="form-group">
                        <label>Other Names</label>
                        <div>
                            <a href="#"><i class="fa fa-plus fa-fw"></i> Add other names</a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
