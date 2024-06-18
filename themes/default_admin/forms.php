<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Services Form</h6>
                <form method="POST" action="<?=BURL?>services/chemical_cleaning_action" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Service Name</label>
                        <input type="text" class="form-control" id="exampleInputName1"
                            aria-describedby="nameHelp" name="service_name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputbulletPoint1" class="form-label">Point</label>
                        <textarea type="text" class="form-control" id="exampleInputbulletPoint1" name="points"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-check-label" for="exampleCheck1">Corresponding Image</label>
                        <input type="file" class="form-control" id="exampleCheck1" name="service_img" accept=".jpeg, .jpg, .png, .gif, .webp">
                    </div>
                    <div class="text-center"><button type="submit" class="btn btn-primary col-6">Send</button></div>
                </form>
            </div>
        </div>
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Rental Form</h6>
                <form action="<?=BURL?>forms/rental_action" method="POST" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="name" class="form-control" id="inputName3" name="name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputFile3" class="col-sm-2 col-form-label">Rental Image</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="inputFile3" name="rental_img" accept=".jpeg, .jpg, .png, .gif, .webp">
                        </div>
                    </div>

                    <div class="text-center"><button type="submit" class="btn btn-primary col-6">Send</button></div>
                </form>
            </div>
        </div>
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Projects Form</h6>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput"
                        placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword"
                        placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect"
                        aria-label="Floating label select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <label for="floatingSelect">Works with selects</label>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here"
                        id="floatingTextarea" style="height: 150px;"></textarea>
                    <label for="floatingTextarea">Comments</label>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">File Input</h6>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Default file input example</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                </div>
                <div class="mb-3">
                    <label for="formFileSm" class="form-label">Small file input example</label>
                    <input class="form-control form-control-sm" id="formFileSm" type="file">
                </div>
                <div>
                    <label for="formFileLg" class="form-label">Large file input example</label>
                    <input class="form-control form-control-lg" id="formFileLg" type="file">
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Select</h6>
                <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <select class="form-select mb-3" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <select class="form-select" multiple aria-label="multiple select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Check, Radio & Switch</h6>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Default checkbox
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Checked checkbox
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">1</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">2</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"
                        disabled>
                    <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                </div>
                <hr>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                        id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Default radio
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                        id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Default checked radio
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                        value="option1">
                    <label class="form-check-label" for="inlineRadio1">1</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                        value="option2">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                        value="option3" disabled>
                    <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
                </div>
                <hr>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch"
                        id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox
                        input</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch"
                        id="flexSwitchCheckChecked" checked>
                    <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox
                        input</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch"
                        id="flexSwitchCheckDisabled" disabled>
                    <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch checkbox
                        input</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch"
                        id="flexSwitchCheckCheckedDisabled" checked disabled>
                    <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked
                        switch checkbox input</label>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Input Group</h6>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                        aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Recipient's username"
                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                </div>
                <label for="basic-url" class="form-label">Your vanity URL</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">$</span>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-text">.00</span>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" placeholder="Server" aria-label="Server">
                </div>
                <div class="input-group">
                    <span class="input-group-text">With textarea</span>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Sizing</h6>
                <input class="form-control form-control-lg mb-3" type="text" placeholder=".form-control-lg"
                    aria-label=".form-control-lg example">
                <input class="form-control mb-3" type="text" placeholder="Default input"
                    aria-label="default input example">
                <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm"
                    aria-label=".form-control-sm example">
            </div>
        </div>
    </div>
</div>
<!-- Form End -->