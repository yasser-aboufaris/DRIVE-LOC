const dynamicButton = document.getElementById("addField");
const form = document.getElementById("adding");
let fieldNum = 0;
let i=0;
function addField() {
    i++;
    const newField = `
    <hr>
    <br>
    <div class="field${i}">
        <!-- Car Model Field -->
        <div>
            <label for="carModel" class="block text-sm font-medium text-gray-700 mb-1">Car Model</label>
            <input type="text" id="carModel}" name="carModel"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 placeholder-gray-400"
                placeholder="Enter the car model" />
        </div>

        <!-- Description Field -->
        <div>
            <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
            <textarea id="description-${i}" name="description"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 placeholder-gray-400"
                rows="3" placeholder="Enter a description of the car"></textarea>
        </div>

        <!-- Image URL Field -->
        <div>
            <label for="imageUrl" class="block text-sm font-medium text-gray-700 mb-1">Image URL</label>
            <input type="url" id="imageUrl-${i}" name="imageUrl"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 placeholder-gray-400"
                placeholder="Enter the image URL" />
        </div>

        <!-- Price Field -->
        <div>
            <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Price</label>
            <input type="number" id="price-${i}" name="price"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 placeholder-gray-400"
                placeholder="Enter the price" />
        </div>

        <!-- Car Category Field -->
        <div>
            <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Category</label>
            <select id="category-${i}" name="category"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300">
                <option value="sport">Sport</option>
                <option value="suv">SUV</option>
                <option value="electric">Electric</option>
            </select>
        </div>
    </div>`;
    
    
    form.insertAdjacentHTML("beforeend", newField);
    

}

dynamicButton.addEventListener("click", addField);
