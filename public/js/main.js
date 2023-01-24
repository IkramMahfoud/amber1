// add multi product start


document.getElementById("addListProduct").addEventListener("click", () =>
{
    
    var htmlForm = `
                    <p class="fw-light  text-black text-center py-2">New Item</p>

                    <div class="input-group mb-3">
                        <input name="name[]" type="text" class="form-control" placeholder="item name" aria-describedby="basic-addon2" required>
                        <span class="input-group-text" id="basic-addon2" >Name</span>
                    </div>

                    <div class="input-group mb-3">
                        <input name="price[]" type="text" class="form-control" placeholder="item price" aria-describedby="basic-addon2" required>
                        <span class="input-group-text" id="basic-addon2" >Price</span>
                    </div>

                    <div class="input-group mb-3">
                        <input name="category[]" type="text" class="form-control" placeholder="item category" aria-describedby="basic-addon2" required>
                        <span class="input-group-text" id="basic-addon2" >Category</span>
                    </div>

                    <div class="input-group mb-3"><input name="image[]" type="file" class="form-control" id="inputGroupFile" required>
                        <label class="input-group-text" for="inputGroupFile">Image</label>
                    </div>`

    var Form = document.createElement('div');
    Form.innerHTML = htmlForm;

    document.getElementById("AllForms").append(Form);
});
//  add multi product end


var mb = 10;
