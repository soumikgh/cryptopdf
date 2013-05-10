<?php

class Pagination {
    
    var $base_url			= ''; // The page we are linking to
	var $prefix				= ''; // A custom prefix added to the path.
	var $suffix				= ''; // A custom suffix added to the path.

	var $total_rows			=  0; // Total number of items (database results)
	var $per_page			= 10; // Max number of items you want shown per page
	var $num_links			=  2; // Number of "digit" links to show before/after the currently viewed page
	var $cur_page			=  0; // The current page being viewed
	var $use_page_numbers	= FALSE; // Use page number for segment instead of offset
	var $first_link			= '&lsaquo; First';
	var $next_link			= 'Next &gt;';
	var $prev_link			= '&lt; Prev';
	var $last_link			= 'Last &rsaquo;';
	var $uri_segment		= 3;
	var $full_tag_open		= '';
	var $full_tag_close		= '';
	var $first_tag_open		= '';
	var $first_tag_close	= '&nbsp;';
	var $last_tag_open		= '&nbsp;';
	var $last_tag_close		= '';
	var $first_url			= ''; // Alternative URL for the First Page.
	var $cur_tag_open		= '&nbsp;<strong>';
	var $cur_tag_close		= '</strong>';
	var $next_tag_open		= '&nbsp;';
	var $next_tag_close		= '&nbsp;';
	var $prev_tag_open		= '&nbsp;';
	var $prev_tag_close		= '';
	var $num_tag_open		= '&nbsp;';
	var $num_tag_close		= '';
	var $page_query_string	= FALSE;
	var $query_string_segment = 'per_page';
	var $display_pages		= TRUE;
	var $anchor_class		= '';
    var $type               = '';
    var $dir                = '';
    var $groupId            = '';
    
    function __construct()
    {
        
    }

    public function initialize( $params )
    {
        if (count($params) > 0)
		{
			foreach ($params as $key => $val)
			{
				if (isset($this->$key))
				{
					$this->$key = $val;
				}
			}
		}
    }
    
    public function createLinks()
    {
        // setup sorting
        if( !empty( $this->type ) ) {
            $this->type = 'type=' . $this->type;
        }

        if( !empty( $this->dir ) ) {
            $this->dir = 'dir=' . $this->dir;
        }

        if( !empty( $this->groupId ) ) {
            $this->groupId = 'groupId=' . $this->groupId;
        }
        // If our item count or per-page total is zero there is no need to continue.
		if ($this->total_rows == 0 OR $this->per_page == 0)
		{
			return '';
		}

		// Calculate the total number of pages
		$num_pages = ceil($this->total_rows / $this->per_page);
        
        // Is there only one page? Hm... nothing more to do here then.
		if ($num_pages == 1)
		{
			//return '';
		}

		// Set the base page index for starting page number
		if ($this->use_page_numbers)
		{
			$base_page = 1;
		}
		else
		{
			$base_page = 0;
		}
        
        $this->cur_page = isset( $_GET['p'] ) ?  $_GET['p'] : '';
        
        $this->num_links = (int)$this->num_links;

		if ($this->num_links < 1)
		{
			show_error('Your number of links must be a positive number.');
		}

		if ( ! is_numeric($this->cur_page))
		{
			$this->cur_page = $base_page;
		}

		// Is the page number beyond the result range?
		// If so we show the last page
		if ($this->use_page_numbers)
		{
			if ($this->cur_page > $num_pages)
			{
				$this->cur_page = $num_pages;
			}
		}
		else
		{
			if ($this->cur_page > $this->total_rows)
			{
				$this->cur_page = ($num_pages - 1) * $this->per_page;
			}
		}

		$uri_page_number = $this->cur_page;
		
		if ( ! $this->use_page_numbers)
		{
			$this->cur_page = floor(($this->cur_page/$this->per_page) + 1);
		}

		// Calculate the start and end numbers. These determine
		// which number to start and end the digit links with
		$start = (($this->cur_page - $this->num_links) > 0) ? $this->cur_page - ($this->num_links - 1) : 1;
		$end   = (($this->cur_page + $this->num_links) < $num_pages) ? $this->cur_page + $this->num_links : $num_pages;
        
        // And here we go...
		$output = '';

		// Render the "First" link
		if  ($this->first_link !== FALSE AND $this->cur_page > ($this->num_links + 1))
		{
			$first_url = ($this->first_url == '') ? $this->base_url : $this->first_url;

            if( !empty( $this->type ) || !empty( $this->dir ) ) {
                $first_url .= '?';
            }

            $first_url .= !empty( $this->type ) ? $this->type : $this->type;
            $first_url .= !empty( $this->dir ) ? '&amp;' . $this->dir : $this->dir;
            $first_url .= !empty( $this->groupId ) ? '&amp;' . $this->groupId : $this->groupId;

			$output .= $this->first_tag_open.'<a '.$this->anchor_class.'href="'.$first_url.'">'.$this->first_link.'</a>'.$this->first_tag_close;
		}

		// Render the "previous" link
		if  ($this->prev_link !== FALSE AND $this->cur_page != 1)
		{
			if ($this->use_page_numbers)
			{
				$i = $uri_page_number - 1;
			}
			else
			{
				$i = $uri_page_number - $this->per_page;
			}

			if ($i == 0 && $this->first_url != '')
			{
                $first_url = $this->append_sorting( $this->first_url );

				$output .= $this->prev_tag_open.'<a '.$this->anchor_class.'href="'.$first_url . '">'.$this->prev_link.'</a>'.$this->prev_tag_close;
			}
			else
			{
                $base_url = $this->append_sorting( $this->base_url.'?p='.$i );

				$i = ($i == 0) ? '' : $this->prefix.$i.$this->suffix;
				$output .= $this->prev_tag_open.'<a '.$this->anchor_class.'href="'. $base_url . '">'.$this->prev_link.'</a>'.$this->prev_tag_close;
			}

		}

		// Render the pages
		if ($this->display_pages !== FALSE)
		{
			// Write the digit links
			for ($loop = $start -1; $loop <= $end; $loop++)
			{
				if ($this->use_page_numbers)
				{
					$i = $loop;
				}
				else
				{
					$i = ($loop * $this->per_page) - $this->per_page;
                    
				}

				if ($i >= $base_page)
				{
					if ($this->cur_page == $loop)
					{
						$output .= $this->cur_tag_open.$loop.$this->cur_tag_close; // Current page
					}
					else
					{
						$n = ($i == $base_page) ? '' : $i;

						if ($n == '' && $this->first_url != '')
						{
                            $first_url = $this->append_sorting( $this->first_url );
							$output .= $this->num_tag_open.'<a '.$this->anchor_class.'href="'.$first_url.'">'.$loop.'</a>'.$this->num_tag_close;
						}
						else
						{
							$n = ($n == '') ? '' : $this->prefix.$n.$this->suffix;
                            $page_url = $this->append_sorting( $this->base_url. '?p=' . $n );

							$output .= $this->num_tag_open.'<a '.$this->anchor_class.'href="'. $page_url .'">'.$loop.'</a>'.$this->num_tag_close;
						}
					}
				}
			}
		}

		// Render the "next" link
		if ($this->next_link !== FALSE AND $this->cur_page < $num_pages)
		{
			if ($this->use_page_numbers)
			{
				$i = $this->cur_page + 1;
			}
			else
			{
				$i = ($this->cur_page * $this->per_page);
			}

            $next_link = $this->append_sorting( $this->base_url.$this->prefix.'?p='.$i.$this->suffix );
			$output .= $this->next_tag_open.'<a '.$this->anchor_class.'href="'. $next_link .'">'.$this->next_link.'</a>'.$this->next_tag_close;
		}

		// Render the "Last" link
		if ($this->last_link !== FALSE AND ($this->cur_page + $this->num_links) < $num_pages)
		{
			if ($this->use_page_numbers)
			{
				$i = $num_pages;
			}
			else
			{
				$i = (($num_pages * $this->per_page) - $this->per_page);
			}

            $last_link = $this->append_sorting( $this->base_url.$this->prefix.'?p='.$i.$this->suffix );
			$output .= $this->last_tag_open.'<a '.$this->anchor_class.'href="'. $last_link .'">'.$this->last_link.'</a>'.$this->last_tag_close;
		}

		// Kill double slashes.  Note: Sometimes we can end up with a double slash
		// in the penultimate link so we'll kill all double slashes.
		$output = preg_replace("#([^:])//+#", "\\1/", $output);

		// Add the wrapper HTML if exists
		$output = $this->full_tag_open.$output.$this->full_tag_close;
        
        return $output;

    }

    function append_sorting( $base_url )
    {
        $url = $base_url;

        if( !stristr( $base_url, '?' ) ) {
            $url .= '?';
        }

        if( !empty( $this->type ) && !empty( $this->dir ) ) {
            $url .= '&amp;' . $this->type;
        }

        if( !empty( $this->dir ) ) {
            $url .= '&amp;' . $this->dir;
        }

        if( !empty( $this->groupId ) ) {
            $url .= '&amp;' . $this->groupId;
        }

        return $url;
    }
}