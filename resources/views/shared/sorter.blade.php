<div class="sort-items">
    <div class="sort-group">
        <div class="form-group">
            <label>Sort by:</label>
            <select class="select2 form-control" id="sortedResults" onchange="getSorted('{{ $appliedParams['pageType'] }}', '{{ $pageNumber }}');">
                <option value="low-high"
                    {{ (isset($appliedParams['rating']) && $appliedParams['rating'] == 'low-high')?"selected":"" }}>Star
                    Rating</option>
                <option value="asc"
                    {{ (isset($appliedParams['sort']) && $appliedParams['sort'] == 'asc')?"selected":"" }}>Price low
                    to high</option>
                <option value="desc"
                    {{ (isset($appliedParams['sort']) && $appliedParams['sort'] == 'desc')?"selected":"" }}>Price
                    high to low</option>
                <option value="low-high"
                    {{ (isset($appliedParams['rating']) && $appliedParams['rating'] == 'low-high')?"selected":"" }}>Rating
                    low to
                    high</option>
                <option value="high-low"
                    {{ (isset($appliedParams['rating']) && $appliedParams['rating'] == 'high-low')?"selected":"" }}>Rating
                    high to
                    low</option>
            </select>
        </div>
    </div>
</div>
