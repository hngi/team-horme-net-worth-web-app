var assetForm = document.querySelector("#asset-form");
var liabilityForm = document.querySelector("#liability-form");
var totalAsset = document.getElementById("total-asset");
var totalLiability = document.getElementById("total-liability");
const deleteLiability = document.getElementById("deleteLiability");
const deleteAsset = document.getElementById("deleteAsset");

//prevent form submission
assetForm.onsubmit = function(e) {
    e.preventDefault();
};
liabilityForm.onsubmit = function(e) {
    e.preventDefault();
};

//Reset input fields using "clear" button
function assetReset() {
    assetForm.reset();
    updateTotalAsset();
}

function liabilityReset() {
    liabilityForm.reset();
    updateTotalLiability();
}

// function to add an asset
function newAssetField() {
    var assetForm = document.querySelector("#asset-form");
    var formLength = assetForm.firstElementChild.children.length / 2;

    var asset = document.createElement("div");
    asset.classList.add("col-md-6");
    asset.innerHTML = `
        <div class="form-group m-2">
            <input
                type="text"
                name="value"
                id="asset${formLength}"
                placeholder="Asset${formLength + 1}"
                class="p-4 form-control form-control-lg pl-5"
            />
        </div>
    `;

    var assetValue = document.createElement("div");
    assetValue.classList.add("col-md-6");
    assetValue.innerHTML = `
        <div class="form-group m-2">
            <input
                type="number"
                name="value"
                id="asset-value${formLength}"
                placeholder=" ASSET ${formLength + 1} monetary worth"
                onchange="updateTotalAsset()"
                class="p-4 asset-value form-control form-control-lg pl-5"
                required
            />
        </div>
    `;

    assetForm.firstElementChild.appendChild(asset);
    assetForm.firstElementChild.appendChild(assetValue);
}
//delete asset input
const deleteAssetInput = e => {
    var assetForm = document.querySelector("#asset-form");
    let formLength = assetForm.firstElementChild.children.length / 2;

    let asset = `asset${formLength - 1}`;
    let assetValue = `asset-value${formLength - 1}`;
    console.log(asset);

    document.getElementById(asset).parentElement.parentElement.remove();
    document.getElementById(assetValue).parentElement.parentElement.remove();
    updateTotalAsset();
    e.preventDefault();
};
deleteAsset.addEventListener("click", deleteAssetInput);

//function to add a liability
function newLiabilityField() {
    var liabilityForm = document.querySelector("#liability-form");
    var formLength = liabilityForm.firstElementChild.children.length / 2;

    var liability = document.createElement("div");
    liability.classList.add("col-md-6");
    liability.innerHTML = `
        <div class="form-group m-2">
            <input
                type="text"
                name="value"
                id="liability${formLength}"
                placeholder="Liability${formLength + 1}"
                class="p-4 form-control form-control-lg pl-5"
            />
        </div>
    `;

    var liabilityValue = document.createElement("div");
    liabilityValue.classList.add("col-md-6");
    liabilityValue.innerHTML = `
        <div class="form-group m-2">
            <input
                type="number"
                name="value"
                id="liability-value${formLength}"
                placeholder=" LIABILITY ${formLength + 1} monetary worth"
                onchange="updateTotalLiability()"
                class="p-4 asset-value liability-value form-control form-control-lg pl-5"
                required
            />
        </div>
    `;

    liabilityForm.firstElementChild.appendChild(liability);
    liabilityForm.firstElementChild.appendChild(liabilityValue);
}
//delete liability input
const deleteLiabilityInput = e => {
    var liabilityForm = document.querySelector("#liability-form");
    var formLength = liabilityForm.firstElementChild.children.length / 2;

    let liability = `liability${formLength - 1}`;
    let liabilityValue = `liability-value${formLength - 1}`;

    document.getElementById(liability).parentElement.parentElement.remove();
    document
        .getElementById(liabilityValue)
        .parentElement.parentElement.remove();
    updateTotalLiability();

    e.preventDefault();
};

deleteLiability.addEventListener("click", deleteLiabilityInput);

//Update values of total asset, total liability, and net worth on form change
function updateTotalAsset() {
    var totalAsset = document.getElementById("total-asset");
    var assetValues = document.getElementsByClassName("asset-value");
    var total = 0;
    for (i = 0; i < assetValues.length; i++) {
        if (assetValues[i].value !== "") {
            total += parseFloat(assetValues[i].value);
        }
    }
    totalAsset.innerHTML = total;

    updateNetWorth();
}

function updateTotalLiability() {
    var totalLiability = document.getElementById("total-liability");
    var liabilityValues = document.getElementsByClassName("liability-value");
    var total = 0;
    for (i = 0; i < liabilityValues.length; i++) {
        if (liabilityValues[i].value !== "") {
            total += parseFloat(liabilityValues[i].value);
        }
    }
    totalLiability.innerHTML = total;

    updateNetWorth();
}

function updateNetWorth() {
    var assets = totalAsset.innerHTML || 0;
    var liabilities = totalLiability.innerHTML || 0;

    var totalNetWorth = document.getElementById("net-worth");
    totalNetWorth.innerHTML = parseFloat(assets) - parseFloat(liabilities);
}
