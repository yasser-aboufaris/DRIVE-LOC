const dynamicButton = document.getElementById("addField");
const form = document.getElementById("dynamicForm");
const buttons = document.getElementById("buttons");




function addField() {
    buttons.remove();
    const inputField = `
    <hr>
    <br>
    <div>
                <label for="carModel" class="block text-sm font-medium text-gray-700 mb-1">Car Model</label>
                <input type="text" id="carModel" name="carModel"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 placeholder-gray-400"
                    placeholder="Enter the car model" />
            </div>

            <!-- Description Field -->
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                <textarea id="description" name="description"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 placeholder-gray-400"
                    rows="3" placeholder="Enter a description of the car"></textarea>
            </div>

            <!-- Image URL Field -->
            <div>
                <label for="imageUrl" class="block text-sm font-medium text-gray-700 mb-1">Image URL</label>
                <input type="url" id="imageUrl" name="imageUrl"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 placeholder-gray-400"
                    placeholder="Enter the image URL" />
            </div>

            <!-- Price Field -->
            <div>
                <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Price</label>
                <input type="number" id="price" name="price"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300 placeholder-gray-400"
                    placeholder="Enter the price" />
            </div>

            <!-- Car Category Field -->
            <div>
                <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                <select id="category" name="category"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-300">
                    <option value="sport">Sport</option>
                    <option value="suv">SUV</option>
                    <option value="electric">Electric</option>
                </select>
            </div>

            <!-- Buttons -->
            <div class="flex items-center justify-between " id="buttons">
                <button type="button" id="addField"
                    class="flex items-center justify-center bg-gradient-to-r from-green-400 to-green-500 hover:from-green-500 hover:to-green-600 text-white font-medium py-2 px-5 rounded-lg shadow-md transform transition hover:scale-105">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                            clip-rule="evenodd" />
                    </svg>
                    Add Field
                </button>
                <button type="submit"
                    class="flex items-center justify-center bg-gradient-to-r from-blue-400 to-blue-500 hover:from-blue-500 hover:to-blue-600 text-white font-medium py-2 px-5 rounded-lg shadow-md transform transition hover:scale-105">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path d="M5 10a5 5 0 1010 0 5 5 0 00-10 0z" />
                    </svg>
                    Submit
                </button>
            </div>`
    ;
    form.insertAdjacentHTML("beforeend", inputField);
}

dynamicButton.addEventListener("click", addField);
