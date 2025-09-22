import React, { useEffect, useState } from 'react'
import axios from "axios"
import Blog from './components/Blog.jsx';

export default function App() {
  const [posts, setPosts] = useState([]);

  const fetchPosts = () => {
  axios.get("http://my-wordpress.test/wp-json/wp/v2/posts?_embed")
      .then(res => {
        setPosts(res.data);
        console.log(res.data);
      })
      .catch(err => {
        console.error("Error fetching posts:", err);
      });
  };

  useEffect(() => {
    fetchPosts()
  }, [])

  return (
    <div>
      {posts.map((item) => (
        <Blog
         key={item.id}
          post={item}
        />
      ))}
    </div>
  )
}