@extends('master')
@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="uvod">
<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPsAAADJCAMAAADSHrQyAAAAkFBMVEX////pJirpICToDBPoExn0nJ72trjoAADpHCHpIyfoGR7tTlHoCRHua2z85+f/9vbxgYL3v8HoAAj729z4xcbtWlzqLzLrOTzucHL+8/TqKi/vdXfsVFbznp/5zs784ODsR0nzlJXxiInuZWbve3z0p6jqNTj1rq/rQELylpf609TvdHbtX2Lwhof3urvwf4A6pmReAAAG6UlEQVR4nO2c6VbiMBSAySJNQllsWQWhbAoOOu//dpO0QlOaNq2OkHru98cz2HD4SHLvzeK0WgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAECrN1zPF4fxeNLpbtphxUZhe9PtTMbjw2K+HvZ+9PP9GL3nSPiUYS7BTBAy3i2tjZa7MSHi3Ij6Inpunv5yG1CMMnARjI9lJr3jUyB4thGmwdb+lbnEauQzZIBTOiiy7w0o5aZGzB+tbvrpv8UxMJrHCH/dNzTpr31R2IYFx5s7fI3+yS+0UNDxMNdmOKalbfyT6QtzjtmkuAMTuLfLmvR3nnG0a4jJ7E4+NZhNisd7DGaMBS96xgtfAsZs8qwB8pGl1+lpKuluU/lw25Wv2L4yJKL7SVVjVz5vEWkXtVzg8paI7m4pUp+PwCZQ2LRNLE1R8HFDk9r0kWXacl7Y1u7OkcvBfmMZ8YjjwrZ2d0Q3N3Spycwarb/nzpm7sf5o6/ZvuiPqbn03tnX7d935+IY2tRjagvyV+zBT21ZxR0G+HHaDga2YzbpvPE8fwpXcxeDmVtV4sQ75jLtMeC9a60rumRYOsbJGuoz7Srp6Wtyu5I6om0v5x/Kl67X7q3T1telbzd1/vIOZnXW9ft/J6ED3afOK/b6+g5mduT3U6e4TGR1YN21ezV24uaAZ2RZiGfeep/45SZtXc8eje6hZOdjDvOaeqLJ057KaOz/cxc1GhRSnuSfFgP92aV7R3c0k91TLXU53ngl2Fd2f7uJmo5Z7T8gufNJDV6Pda435oY/E8cBxdGne6DFfK9ZtBPJDmRn8y1ZMo2NdrRy3wJz3ZTUUXIJdo3Pc3LbLrLn3CcKd1gdB5PXcvJo7m99Lr5RsTSuoEZI8K6e7rE5lfSMuLm3P3CI7mhytaTMdR/4+mEmePdJ4HSMH/mX+hkdzgygznIr39+9KqK3j9EWKiQ5GgYxyJ8yxdfsxE0P9qtc3bsuMpx/SK78t0WdcTvfPaG97X307iHNHd2o72OreXsQD4k1md7XX3taDXRG6e/yNuYi2RV3gvvKYp7YrHmiyCRGSCjtwuruzm9Rvgc39mSLxLn92GRLqib5Megvb2+ruaTngGumEL3DfsniLXSp/xnc5TYTtkE1zLznOuzc7Ue4+w/LL8Vat0DsvYt4F8mzBTnN3dNdGsfTL3ZdBkv725Jyn28SesTV33+HrZpdDKbP7WlnIilxO988HwiAJAGWk7u4eSbW0SG92j1e5MkU/8YsFRdoy1kzq7myUV/TOkZ7u21lUfO7JKSFLAHHEaRkfr+fK3/T94h44fb/0z/lzUpLFk+lcLtvwKJkVl4pGdiqJg90gUi8tp91rppeaVvy5n1gFwqKzGVWQ7ZRnkgfJObi/ymCnrtHsPSwTwIwJluOSOB2t5S9sP1dd1NehcVUyUYePUxYHrfM4Dz+r2wVWCUwmAMSvOauz7T3FKhB6ifrro45c2ou5DAasm6x0Uw25AMIn+UM1Iz0ZDHGOS+5wvNvPJ1PXcZ5yROWiTeZyFfD0JW4UBzt1MIn4ASM2avWztP4mMUS4uWOj04tvwF+7qz0dnLys7hBqZbn8ruSrp3iqcOPFiiTHceF0kE94IAb3Xpz44w1mVQNoNwzjYKeK3TimmZJ94k4efvJD/y8m2FDbdFXHxiWcXLuzU/oLufijD0P52lQVhcSw3xO740n+Fw6iqvqce7y+Ta4aPBFPM+wHCJ/+MuSv5Lzg1FDnxO4uV/I678RQ06rzNxy/utpktmoiOUzGcqrLWI9908VJ5U5sRb8zHHDeve0j8zZFsvBV0+EjmprKW+mO3TyNMRGSvHsfUe/Z9PBzHAaD4jE9EJw4n9pTXr38dahwaj5WePMtq9Md86z7mS4x79qf+aSHywuXFSLu7tYY6dCOmfyjap0mM8Djwfh8FAjrbqZjzJDIV+YYM5F/VKZ+ldvagamBBDl6HFHMipuO4033qPc0vmtWcA7LuZs3KUt5M/3Nm8l96XGvXeTOPWd35MtYkry88f784GnaKnDnpCH13DXDfM+b/3YgrmhM7txz9b68lWGu5+v93QQnjVWPp/I33LnX0AGf8Mbxl90xb2SYS1lx9kV31sTklmW2oF9yp4vGlTQGpsEX3IPpDT/hD7IPeE13HljuKjWHIRe13AVvcG67Zjbya7j7o98w1VOePVzRHZu3d5pMGJFK7iRq0P5UZdYBtrrjwM37st8mjPxyd+7/yk5P2JOy/+9CmE5lfg+z4qsTbW/+u8J7DZaNXrQBAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD8D/4BgVpgcimuj0UAAAAASUVORK5CYII=">
<h1>Bolnica Sveti Sava</h1>
<br>
<h3>Smederevo</h3>
<br>
<br>

</div>
<table data-toggle="table" class="table">
      <thead>
        <tr>
          <th align="center">Pacijent </th>
          <th align="center">Doctor </th>
          <th align="center">Dijagnoza</th>
        </tr>
      </thead>
      <tbody>
      @foreach($accounts as $account)
        <tr>
          <td>{{$account->patient->first_name}} {{$account->patient->last_name}}</td>
          
          <td><a href="detail/{{$account->doctor['id']}}">{{$account->doctor->name}} {{$account->doctor->surname}} </a></td>
         
          <td>{{$account->diagnosis_code}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    
</body>
</html>
@endsection