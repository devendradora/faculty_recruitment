<script type="text/javascript">
    <?php
    if(!isset($saved_data))
    {
        echo "schooling_add_row();";
        echo "undergraduation_add_row();";
    }
    else
    {
        $names=array(
            'schooling_certificate',
            'schooling_boardu',
            'schooling_yopass',
            'schooling_percentage',
            'undergraduation_degree',
            'undergraduation_eqdegree',
            'undegraduation_boardu',
            'undegraduation_yopass',
            'undegraduation_percentage',
            'masters_degree',
            'masters_branch',
            'masters_specialization',
            'masters_boardu',
            'masters_yopass',
            'masters_cgpa',
            'graduation_degree',
            'graduation_branch',
            'graduation_specialization',
            'graduation_boardu',
            'graduation_yopass',
            'graduation_cgpa',
            'phd_doe',
            'phd_progress',
            'phd_synopsis',
            'phd_thesis');
        //calculating filled row sizes
        $schooling=sizeof($saved_data['schooling_certificate']);
        $undergraduation=sizeof($saved_data['undergraduation_degree']);
        $masters=sizeof($saved_data['masters_degree']);
        $graduation=sizeof($saved_data['graduation_degree']);
        $phd=sizeof($saved_data['phd_doe']);
        for($i=0;$i<$schooling;$i++)
            echo "schooling_add_row();";
        for($i=0;$i<$undergraduation;$i++)
            echo "undergraduation_add_row();";
        for($i=0;$i<$masters;$i++)
            echo "masters_add_row();";
        for($i=0;$i<$graduation;$i++)
            echo "graduation_add_row();";
        for($i=0;$i<$phd;$i++)
            echo "phd_add_row();";

        foreach ($names as $key => $name)
        {
            if(sizeof($saved_data[$name])==1)
            {
                echo 'document.education_form.elements.namedItem("'.$name.'[]").value="'.$saved_data[$name][0].'";';
            }
            else
            {
                foreach ($saved_data[$name] as $key => $value)
                {
                    echo 'document.education_form.elements.namedItem("'.$name.'[]")['.$key.'].value="'.$saved_data[$name][$key].'";';
                }
            }
        }
    }
    ?>



</script>
</body>
</html>