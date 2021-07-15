<label class="block">Title</label>
<input type="text" name="title" class="w-full" value="{{ old('title', $article->title ?? '') }}" />
<label class="block">Header image</label>
<input type="text" name="header_image" class="w-full" value="{{ old('header_image', $article->header_image ?? '') }}" />
<label class="block">Slug</label>
<input type="text" name="slug" class="w-full" value="{{ old('slug', $article->slug ?? '') }}" />
<label class="block">Category</label>
<select name="category">
    <option {{ old('category', $article->category ?? '') == "Tanulás" ? 'selected' : '' }} value="Tanulás">Tanulás</option>
    <option {{ old('category', $article->category ?? '') == "Pénz" ? 'selected' : '' }} value="Pénz">Pénz</option>
    <option {{ old('category', $article->category ?? '') == "Munka" ? 'selected' : '' }} value="Munka">Munka</option>
    <option {{ old('category', $article->category ?? '') == "Kollégium" ? 'selected' : '' }} value="Kollégium">Kollégium</option>
</select>
<label class="block">Description</label>
<textarea name="description" class="w-full" rows="3">{{ old('description', $article->description ?? '') }}</textarea>
<input class="block mt-2 p-2 rounded-md w-full" type="submit" value="Save" />
