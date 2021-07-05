const form = (id) => {
    const html = `<div class="input-group mt-2" id="input-${id}" >
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="foto[]" id="foto-${id}" aria-describedby="foto-${id}">
                            <label class="custom-file-label" for="foto-${id}">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <button class="btn btn-danger" onclick="deleteForm(${id})" type="button" id="inputGroupFileAddon04">Button</button>
                        </div>
                    </div>`;
    $("#container").append(html);
};

const deleteForm = (id) => {
    const element = document.getElementById(`input-${id}`);
    const parentElement = element.parentNode;
    parentElement.removeChild(element);
};

$(document).ready(function () {
    let count = 0;
    $("#tambahGambar").click(function (e) {
        e.preventDefault();
        form(count++);
    });
});
