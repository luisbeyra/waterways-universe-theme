import Header from '@/components/Header';
import Footer from '@/components/Footer';
import { Card } from '@/components/ui/card';
import { Users, Award, Globe, Lightbulb } from 'lucide-react';

const About = () => {
  const values = [
    {
      title: 'Innovation in Education',
      description: 'Pioneering the integration of entertainment and STEM learning through cutting-edge storytelling.',
      icon: Lightbulb
    },
    {
      title: 'Expert Collaboration',
      description: 'Working with renowned educators, scientists, and industry professionals to ensure accuracy and quality.',
      icon: Award
    },
    {
      title: 'Community Impact',
      description: 'Creating educational content that serves schools, families, and communities across Florida and beyond.',
      icon: Users
    },
    {
      title: 'Environmental Awareness',
      description: 'Promoting understanding and conservation of Florida\'s unique ecosystems through immersive experiences.',
      icon: Globe
    }
  ];

  return (
    <div className="min-h-screen bg-background">
      <Header />
      <main className="pt-20">
        {/* Hero Section */}
        <section className="py-20 bg-gradient-hero">
          <div className="container mx-auto px-4 text-center">
            <h1 className="text-5xl md:text-6xl font-bold mb-6 text-foreground">
              About Waterways
            </h1>
            <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
              A revolutionary approach to STEM education through the power of storytelling, 
              gaming, and immersive experiences in Florida's natural environment.
            </p>
          </div>
        </section>

        {/* Mission Statement */}
        <section className="py-20">
          <div className="container mx-auto px-4">
            <div className="max-w-4xl mx-auto text-center">
              <h2 className="text-3xl font-bold mb-8 text-foreground">Our Mission</h2>
              <p className="text-lg text-muted-foreground leading-relaxed mb-8">
                Waterways is dedicated to transforming education by seamlessly blending entertainment 
                with learning. Through our TV series, interactive games, graphic novel, and comprehensive 
                curriculum, we create engaging experiences that inspire students to explore science, 
                technology, engineering, and mathematics.
              </p>
              <p className="text-lg text-muted-foreground leading-relaxed">
                Set in the beautiful and mysterious Florida mangrove ecosystem, our content not only 
                educates but also promotes environmental awareness and conservation, preparing the next 
                generation of scientists, engineers, and environmental stewards.
              </p>
            </div>
          </div>
        </section>

        {/* Values */}
        <section className="py-20 bg-card">
          <div className="container mx-auto px-4">
            <h2 className="text-3xl font-bold text-center mb-12 text-foreground">
              Our Values
            </h2>
            
            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
              {values.map((value, index) => (
                <Card key={value.title} className="p-6 bg-card border-border hover:border-accent transition-all duration-300 hover:shadow-[var(--shadow-card)] text-center">
                  <div className="w-16 h-16 bg-gradient-ocean rounded-full flex items-center justify-center mx-auto mb-4">
                    <value.icon className="text-primary-foreground" size={32} />
                  </div>
                  <h3 className="text-xl font-semibold mb-3 text-foreground">{value.title}</h3>
                  <p className="text-muted-foreground leading-relaxed">{value.description}</p>
                </Card>
              ))}
            </div>
          </div>
        </section>

        {/* The Story Behind */}
        <section className="py-20">
          <div className="container mx-auto px-4">
            <div className="max-w-4xl mx-auto">
              <h2 className="text-3xl font-bold text-center mb-12 text-foreground">
                The Story Behind Waterways
              </h2>
              
              <div className="prose prose-lg mx-auto text-muted-foreground">
                <p className="text-lg leading-relaxed mb-6">
                  Waterways was born from a simple yet powerful idea: what if we could make learning 
                  as exciting and engaging as our favorite TV shows and games? Recognizing that traditional 
                  educational methods often fail to capture students' imagination, our team set out to 
                  create something entirely new.
                </p>
                
                <p className="text-lg leading-relaxed mb-6">
                  The project brings together the natural beauty and scientific richness of Florida's 
                  mangrove ecosystems with cutting-edge storytelling techniques. By setting our narrative 
                  in the fictional Waterways Academy, we create a relatable environment where students 
                  can see themselves as the heroes of their own educational journey.
                </p>
                
                <p className="text-lg leading-relaxed mb-6">
                  Our partnership with Academica ensures that every piece of content is educationally 
                  sound and aligned with STEM learning objectives. From the TV series that sparks curiosity 
                  to the games that reinforce concepts through play, every element works together to create 
                  a comprehensive learning ecosystem.
                </p>
                
                <p className="text-lg leading-relaxed">
                  Today, Waterways represents more than just educational content—it's a movement toward 
                  more engaging, effective, and inspiring ways to learn about science and our world.
                </p>
              </div>
            </div>
          </div>
        </section>

        {/* Partnership */}
        <section className="py-20 bg-card">
          <div className="container mx-auto px-4">
            <div className="max-w-4xl mx-auto text-center">
              <h2 className="text-3xl font-bold mb-8 text-foreground">
                Educational Partnership
              </h2>
              <div className="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div className="text-left">
                  <h3 className="text-2xl font-semibold mb-4 text-foreground">Academica Collaboration</h3>
                  <p className="text-muted-foreground leading-relaxed mb-4">
                    Our partnership with Academica brings decades of educational expertise to the Waterways project. 
                    Together, we've developed curriculum that meets rigorous academic standards while maintaining 
                    the excitement and engagement of our entertainment content.
                  </p>
                  <p className="text-muted-foreground leading-relaxed">
                    Through the Colēgia platform, educators have access to comprehensive resources, assessment tools, 
                    and professional development opportunities that make implementing Waterways content seamless and effective.
                  </p>
                </div>
                <div className="bg-gradient-ocean rounded-lg p-8 text-center">
                  <Award className="w-16 h-16 text-primary-foreground mx-auto mb-4" />
                  <h4 className="text-xl font-semibold text-primary-foreground mb-2">
                    Award-Winning Education
                  </h4>
                  <p className="text-primary-foreground/90">
                    Recognized for excellence in innovative STEM education and environmental awareness programs.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>

        {/* Contact CTA */}
        <section className="py-20">
          <div className="container mx-auto px-4 text-center">
            <div className="max-w-3xl mx-auto">
              <h2 className="text-3xl font-bold mb-8 text-foreground">
                Join the Waterways Community
              </h2>
              <p className="text-lg text-muted-foreground mb-8">
                Whether you're an educator, student, parent, or simply someone passionate about 
                innovative learning, we invite you to be part of the Waterways experience.
              </p>
              <div className="flex flex-col sm:flex-row gap-4 justify-center">
                <a 
                  href="/contact"
                  className="inline-flex items-center justify-center px-8 py-3 bg-gradient-ocean text-primary-foreground rounded-md hover:shadow-[var(--shadow-glow)] transition-all duration-300 font-medium"
                >
                  Get In Touch
                </a>
                <a 
                  href="/lessons"
                  className="inline-flex items-center justify-center px-8 py-3 border border-accent text-accent hover:bg-accent hover:text-accent-foreground rounded-md transition-all duration-300 font-medium"
                >
                  Explore Curriculum
                </a>
              </div>
            </div>
          </div>
        </section>
      </main>
      <Footer />
    </div>
  );
};

export default About;