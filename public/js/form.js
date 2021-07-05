const form = (id) => {
    const html = `<div class="row mt-2" id="form-${id}">
      <div class="col-md-5">
          <input type="text" name="fasilitas[][nama]" class="form-control">
      </div>
      <div class="col-md-6">
          <input type="text" name="fasilitas[][icon]" class="form-control">
      </div>
      <div class="col-md-1">
          <button class="btn btn-danger" onclick="delForm(${id})">Hapus</button>
      </div>
  </div>`;
    $("#container").append(html);
};

const delForm = (id) => {
    const element = document.getElementById(`form-${id}`);
    const parentElement = element.parentNode;
    parentElement.removeChild(element);
};

const btnHapus = document.getElementById("hapus");

const count = 0;
btnHapus.addEventListener("click", (e) => {
    e.preventDefault();
});

$(document).ready(function () {
    let count = 0;
    $("#tambah").click(function (e) {
        e.preventDefault();
        form(count++);
    });
});
