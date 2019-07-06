$(document).ready(function () {
    console.log('log-form loaded')

    for (let i = 0; i < 5; ++i) {
        const $tbody = $('#entry' + i + '-tbody')
        const $count = $('#entry' + i + '-count')
        const $addBtn = $('#entry' + i + '-add')

        let itemCount = Number($count.val())
        console.log('itemCount on load', itemCount, i)

        $addBtn.click(function () {
            itemCount = Number($count.val())
            console.log('itemCount when $addBtn is clicked: ', itemCount, i)

            $tbody.append(
                '<tr id="entry' + i + '-item' + itemCount + '-row">\n' +
                '  <td>\n' +
                '      <select name="entry[' + i + '][' + itemCount + '][project_code]"\n' +
                '              class="form-control form-control-sm" required>\n' +
                '          <option value="">- Select Project Code</option>\n' +
                '          <option value="KLICK">Klick</option>\n' +
                '          <option value="LEARN">Learning (tutorials, playground, etc)</option>\n' +
                '          <option value="PROJ">Personal Projects</option>\n' +
                '          <option value="POC">Prototype or Proof-of-concept</option>\n' +
                '          <option value="SSO">Singapore Symphony Orchestra</option>\n' +
                '      </select>\n' +
                '  </td>\n' +
                '  <td>\n' +
                '      <input type="text" name="entry[' + i + '][' + itemCount + '][title_item]"\n' +
                '              class="form-control form-control-sm" required>\n' +
                '  </td>\n' +
                '  <td>\n' +
                '       <div class="form-check">\n' +
                '           <input class="form-check-input position-static" type="checkbox"\n' +
                '               name="entry[' + i + '][' + itemCount + '][remove]" value="remove">\n' +
                '       </div>' +
                '  </td>\n' +
                '</tr>'
            )

            itemCount += 1
            console.log('itemCount added: ', itemCount, i)
            $count.val(itemCount)
        })
    }
})
