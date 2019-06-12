$(document).ready(function() {
    console.log('tag-edit-form loaded')

    // Project
    $('#add-project').click(function() {
        console.log('"#add-project clicked')

        const count = $('#count-project').val()

        $('#tbody-project').append(
            '<tr>\n' +
            '    <td><sup class="text-success">NEW</sup></td>\n' +
            '    <td>\n' +
            '       <input type="text" name="project[' + count + '][title]"\n' +
            '           class="form-control form-control-sm">\n' +
            '    </td>\n' +
            '    <td>\n' +
            '        <input type="text" name="project[' + count + '][title]"\n' +
            '           class="form-control form-control-sm">\n' +
            '    </td>\n' +
            '    <td>\n' +
            '        <div class="form-check">' +
            '            <input class="form-check-input position-static" type="checkbox"' +
            '                name="project[' + count + '][remove]" value="remove"' +
            '        </div>' +
            '    </td>\n' +
            '</tr>'
        )
    })

    // Year
    $('#add-year').click(function() {
        console.log('"#add-year" clicked')

        const count = $('#count-year').val()

        $('#tbody-year').append(
            '<tr>\n' +
            '    <td><sup class="text-success">NEW</sup></td>\n' +
            '    <td>\n' +
            '        <input type="text" name="year['+count+'][title]"\n' +
            '                class="form-control form-control-sm">\n' +
            '    </td>\n' +
            '    <td>\n' +
            '        <div class="form-check">\n' +
            '            <input class="form-check-input position-static" type="checkbox"\n' +
            '                    name="year['+count+'][remove]" value="remove">\n' +
            '        </div>\n' +
            '    </td>\n' +
            '</tr>'
        )
    })
})
