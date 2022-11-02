<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tailwind</title>
    <!-- when we run npm build style.css will appear -->
    <link rel="stylesheet" href="style.css">
</head>


<body>

    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">(company name with ssm no.)</th>
            </tr>
            <tr>
                <th class="px-4 py-2">(address)</th>
            </tr>
            <tr>
                <th class="px-4 py-2">(address)</th>
            </tr>
            <tr>
                <th class="px-4 py-2">(address)</th>
            </tr>
            <tr>
                <th class="px-4 py-2">(tel:fax:)</th>
            </tr>
            <tr>
                <th class="px-4 py-2">(gst reg:)</th>
            </tr>
            <tr>
                <th class="px-4 py-2"></th>
            </tr>
            <tr>
                <th class="bg-mygreen text-white p-2">TAX INVOICE</th>
            </tr>
        </thead>
        <tbody>
            <tr class="flex flex-row justify-between">
                <td class="pl-10 p-3 font-bold">(company name)</td>
                <td class="pr-10 p-3 font-bold -mr-[0px]">(Invoice No:)</td>
            </tr>
            <tr class="flex flex-row justify-between">
                <td class="pl-10 p-3">(address)</td>
                <td class="pr-10 p-3">(Date)</td>
            </tr>
            <tr class="flex flex-row justify-between">
                <td class="pl-10 p-3">(address)</td>
                <td class="pr-10 p-3">(Reference No:)</td>
            </tr>
            <tr class="flex flex-row justify-between">
                <td class="pl-10 p-3">(tel: fax:)</td>
                <td class="pr-10 p-3"></td>
            </tr>
            <tr class="flex flex-row justify-between border-solid border-t-2 border-b-2 border-indigo-600">
                <td class="p-2">No.</td>
                <td class="p-2"> Description</td>
                <td class="p-2">Amount Excl. Gst (RM) </td>
                <td class="p-2">Tax Code </td>
                <td class="p-2">Tax Rate (%) </td>
                <td class="p-2">GST Amount (RM) </td>
                <td class="p-2">Total Amount (RM) </td>
            </tr>
            <tr class="flex flex-row justify-between">
                <td class="p-2">1</td>
                <td class="p-2 -ml-12"> (description)</td>
                <td class="p-2 -ml-12">(amount) </td>
                <td class="p-2"> </td>
                <td class="p-2 -ml-12">6.00 </td>
                <td class="p-2"> </td>
                <td class="p-2">(total amount) </td>
            </tr>
            <tr class="flex flex-row justify-between">
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"> </td>
            </tr>
            <tr class="flex flex-row justify-between">
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"> </td>
            </tr>
            <tr class="flex flex-row justify-between">
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"> </td>
            </tr>
            <tr class="flex flex-row justify-between">
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"> </td>
            </tr>
            <tr class="flex flex-row justify-between">
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"> </td>
            </tr>
            <tr class="flex flex-row justify-between">
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"> </td>
            </tr>
            <tr class="flex flex-row justify-between">
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"> </td>
            </tr>
            <tr class="flex flex-row justify-between">
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"> </td>
            </tr>
            <tr class="flex flex-row justify-between">
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"> </td>
            </tr>
            <tr class="flex flex-row justify-between border-solid border-t-2 border-b-2 border-indigo-600">
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2">(amount)</td>
                <td class="p-2"> </td>
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2">(total amount) </td>
            </tr>
            <tr class="flex flex-row justify-between">
                <td class="p-2">Malaysia Ringgits:(spelled out)</td>
                <td class="p-2"> </td>
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"> </td>
            </tr>
            <tr class="flex flex-row justify-between">
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"> </td>
            </tr>
            <tr class="flex flex-row justify-between">
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"> </td>
            </tr>
            <tr class="flex flex-row justify-between">
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"> </td>
            </tr>
            <tr class="flex flex-row justify-between">
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"> </td>
            </tr>
            <tr class="flex flex-row justify-between">
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"> </td>
            </tr>
            <tr class="flex flex-row justify-between">
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"> </td>
            </tr>
            <tr class="flex flex-row justify-between">
                <td class="p-2"></td>
                <td class="p-2"> </td>
                <td class="p-2"></td>
                <td class="p-2"></td>
                <td class="p-2 border-solid border-t-2 border-indigo-600">Authorized by </td>
                <td class="p-2"></td>
                <td class="p-2"> </td>
            </tr>
            <tr class="flex flex-row justify-between">
                <td class="p-2">Report Name: (reportname)</td>
                <td class="p-2"> </td>
                <td class="p-2"></td>
                <td class="p-2"></td>
                <td class="p-2 pl-[210px]"> Printed by: (person's name) On (Date time) </td>
                <td class="p-2"> </td>
                <td class="p-2"></td>
            </tr>

        </tbody>


    </table>


</body>

</html>
